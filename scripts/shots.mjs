// Visual / responsive check. Screenshots a URL at several widths.
// Usage: node scripts/shots.mjs [url] [outDir]
// Firefox is this machine's browser; Playwright should match it.
import { firefox } from 'playwright';
import { mkdirSync } from 'node:fs';

const url = process.argv[2] || 'http://localhost:4721/';
const outDir = process.argv[3] || '/tmp/shots';
const widths = [
	{ name: 'mobile', width: 390, height: 844 },
	{ name: 'tablet', width: 768, height: 1024 },
	{ name: 'desktop', width: 1280, height: 900 },
];

mkdirSync(outDir, { recursive: true });
const browser = await firefox.launch();
for (const v of widths) {
	const page = await browser.newPage({ viewport: { width: v.width, height: v.height }, deviceScaleFactor: 1 });
	await page.goto(url, { waitUntil: 'networkidle' });
	const file = `${outDir}/${v.name}-${v.width}.png`;
	await page.screenshot({ path: file, fullPage: true });
	console.log(`${v.name.padEnd(8)} ${v.width}px -> ${file}`);
	await page.close();
}
await browser.close();
