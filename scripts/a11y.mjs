import { firefox } from 'playwright';
import { AxeBuilder } from '@axe-core/playwright';

const urls = process.argv.slice(2);
// Defaults point at the Ideell demo on the wp-env tests site. Pass URLs to
// audit the child theme on :4721 instead.
const pages = urls.length ? urls : [
  'http://localhost:4722/',
  'http://localhost:4722/news/',
  'http://localhost:4722/about-us/',
  'http://localhost:4722/this-page-does-not-exist/',
];
const b = await firefox.launch();
const ctx = await b.newContext({ viewport:{ width:1280, height:900 } });
let total = 0;
for (const url of pages) {
  const p = await ctx.newPage();
  await p.goto(url, { waitUntil:'networkidle' });
  const r = await new AxeBuilder({ page: p }).withTags(['wcag2a','wcag2aa','wcag21a','wcag21aa','wcag22aa']).analyze();
  console.log(`\n=== ${url.replace(/^https?:\/\/localhost:\d+/,'')||'/'} — ${r.violations.length} violation(s) ===`);
  for (const v of r.violations) {
    total++;
    console.log(`  [${v.impact}] ${v.id}: ${v.help}`);
    for (const n of v.nodes.slice(0,3)) console.log(`     → ${n.target.join(' ')}`);
  }
  await p.close();
}
console.log(`\nTOTAL violations: ${total}`);
await b.close();
