// Contrast gate for the Ideell palette and every style variation.
//
// Reads theme.json plus styles/*.json, resolves each
// palette, and checks the foreground/background pairs the theme actually uses.
// A variation only ships if every pair passes, so accessibility-ready holds
// across all six palettes rather than only the default.
//
// Usage: node scripts/contrast.mjs [themeDir]

import { readdirSync, readFileSync, existsSync } from 'node:fs';
import { join } from 'node:path';

const themeDir = process.argv[2] || '.';

// WCAG 2.2 minimums.
const AA_TEXT = 4.5; // normal body text
const AA_LARGE = 3.0; // >=24px, or >=18.66px bold
const AA_UI = 3.0; // UI component boundaries, focus indicators

// Semantic pairs, by palette slug. Every palette must define these slugs.
// kind drives which threshold applies.
const PAIRS = [
	['ink', 'base', 'text', 'Body text on page background'],
	['ink-muted', 'base', 'text', 'Muted meta text on page background'],
	['primary', 'base', 'text', 'Links and headings on page background'],
	['primary-dark', 'base', 'text', 'Link hover on page background'],
	['base', 'primary', 'text', 'Inverted text on the primary surface'],
	['base', 'primary-dark', 'text', 'Inverted text on primary hover'],
	['ink', 'secondary', 'text', 'Body text on the secondary (sand) band'],
	['primary', 'secondary', 'text', 'Links on the secondary band'],
	['ink', 'primary-tint', 'text', 'Body text on the soft primary surface (cards)'],
	['primary', 'primary-tint', 'text', 'Headings on the soft primary surface'],
	['ink', 'secondary-tint', 'text', 'Body text on the soft secondary surface'],
	['primary', 'base', 'ui', 'Focus ring / button edge against the page'],
	['base', 'primary', 'ui', 'Focus ring on a primary surface'],
	['success', 'base', 'text', 'Success message text'],
	['warning', 'base', 'text', 'Warning message text'],
	['error', 'base', 'text', 'Error message text'],
];

const THRESH = { text: AA_TEXT, large: AA_LARGE, ui: AA_UI };

// Surfaces that must be *perceptible* against the page, though not to a WCAG
// ratio: a tinted card or band is a container, not a control, so SC 1.4.11's
// 3:1 does not apply and every sane palette would fail it. What does matter is
// that the surface is not effectively invisible. 1.05:1 is roughly the point
// below which a large flat area stops reading as a distinct panel.
const SURFACE_MIN = 1.05;
const SURFACES = [
	['primary-tint', 'base', 'Filled card surface against the page'],
	['secondary', 'base', 'Section band against the page'],
];

function hexToRgb(hex) {
	const h = hex.replace('#', '').trim();
	const full = h.length === 3 ? h.split('').map((c) => c + c).join('') : h;
	if (!/^[0-9a-fA-F]{6}$/.test(full)) return null;
	return [0, 2, 4].map((i) => parseInt(full.slice(i, i + 2), 16));
}

// WCAG relative luminance.
function luminance(hex) {
	const rgb = hexToRgb(hex);
	if (!rgb) return null;
	const [r, g, b] = rgb.map((v) => {
		const s = v / 255;
		return s <= 0.03928 ? s / 12.92 : Math.pow((s + 0.055) / 1.055, 2.4);
	});
	return 0.2126 * r + 0.7152 * g + 0.0722 * b;
}

function ratio(fg, bg) {
	const a = luminance(fg);
	const b = luminance(bg);
	if (a === null || b === null) return null;
	const [hi, lo] = a > b ? [a, b] : [b, a];
	return (hi + 0.05) / (lo + 0.05);
}

function paletteOf(json) {
	const list = json?.settings?.color?.palette;
	if (!Array.isArray(list)) return null;
	return Object.fromEntries(list.map((c) => [c.slug, c.color]));
}

function loadJson(path) {
	return JSON.parse(readFileSync(path, 'utf8'));
}

const themeJsonPath = join(themeDir, 'theme.json');
if (!existsSync(themeJsonPath)) {
	console.error(`contrast: no theme.json at ${themeJsonPath}`);
	process.exit(2);
}

const base = loadJson(themeJsonPath);
const basePalette = paletteOf(base);
if (!basePalette) {
	console.error('contrast: theme.json defines no settings.color.palette');
	process.exit(2);
}

const variations = [{ name: 'Default', palette: basePalette }];
const stylesDir = join(themeDir, 'styles');
if (existsSync(stylesDir)) {
	for (const f of readdirSync(stylesDir).filter((f) => f.endsWith('.json')).sort()) {
		const json = loadJson(join(stylesDir, f));
		// A variation may override only some colours; fall back to the default.
		const merged = { ...basePalette, ...(paletteOf(json) || {}) };
		variations.push({ name: json.title || f.replace(/\.json$/, ''), palette: merged });
	}
}

let failed = 0;
let checked = 0;

for (const { name, palette } of variations) {
	const rows = [];
	for (const [fgSlug, bgSlug, kind, label] of PAIRS) {
		const fg = palette[fgSlug];
		const bg = palette[bgSlug];
		if (!fg || !bg) {
			rows.push({ ok: false, missing: true, fgSlug, bgSlug, label, kind });
			continue;
		}
		const r = ratio(fg, bg);
		const need = THRESH[kind];
		const ok = r !== null && r >= need;
		rows.push({ ok, r, need, fg, bg, fgSlug, bgSlug, label, kind });
		checked++;
	}

	for (const [aSlug, bSlug, label] of SURFACES) {
		const a = palette[aSlug];
		const b = palette[bSlug];
		if (!a || !b) continue;
		const r = ratio(a, b);
		checked++;
		rows.push({
			ok: r !== null && r >= SURFACE_MIN,
			r,
			need: SURFACE_MIN,
			fg: a,
			bg: b,
			fgSlug: aSlug,
			bgSlug: bSlug,
			label: label + ' (perceptible surface, not a WCAG rule)',
			kind: 'surface',
		});
	}

	const bad = rows.filter((row) => !row.ok);
	const mark = bad.length === 0 ? '✔' : '✘';
	console.log(`\n${mark} ${name}  (${rows.length - bad.length}/${rows.length} pairs pass)`);

	for (const row of bad) {
		failed++;
		if (row.missing) {
			console.log(`    MISSING  ${row.fgSlug} on ${row.bgSlug}  — ${row.label}`);
		} else {
			console.log(
				`    ${row.r.toFixed(2)}:1  need ${row.need}  ${row.fgSlug} (${row.fg}) on ${row.bgSlug} (${row.bg})\n` +
				`             ${row.label}`
			);
		}
	}
}

console.log(`\n${checked} pairs checked across ${variations.length} palette(s).`);
if (failed > 0) {
	console.error(`${failed} failing pair(s) — accessibility-ready requires all of them to pass.`);
	process.exit(1);
}
console.log('All text and UI pairs meet WCAG 2.2 AA; all surfaces are perceptible.');
