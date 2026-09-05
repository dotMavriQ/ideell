import { firefox } from 'playwright';
import { AxeBuilder } from '@axe-core/playwright';

const urls = process.argv.slice(2);
// Pass the URLs you want audited. The defaults assume wp-env on its usual port
// with the theme active.
const pages = urls.length ? urls : [
  'http://localhost:8888/',
  'http://localhost:8888/?p=1',
  'http://localhost:8888/this-page-does-not-exist/',
];
const b = await firefox.launch();
const ctx = await b.newContext({ viewport:{ width:1280, height:900 } });
let total = 0;
for (const url of pages) {
  const p = await ctx.newPage();
  await p.goto(url, { waitUntil:'networkidle' });
  const r = await new AxeBuilder({ page: p }).withTags(['wcag2a','wcag2aa','wcag21a','wcag21aa','wcag22aa']).analyze();
  console.log(`\n=== ${url.replace(/^https?:\/\/localhost:\d+/,'')||'/'} : ${r.violations.length} violation(s) ===`);
  for (const v of r.violations) {
    total++;
    console.log(`  [${v.impact}] ${v.id}: ${v.help}`);
    for (const n of v.nodes.slice(0,3)) console.log(`     → ${n.target.join(' ')}`);
  }
  await p.close();
}
console.log(`\nTOTAL violations: ${total}`);
await b.close();
