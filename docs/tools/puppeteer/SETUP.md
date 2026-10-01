# Puppeteer — Setup

Headless Chrome/Firefox automation baseline for this toolkit. Use with Midscene.js for vision-based UI tests.

## Install

```bash
pnpm add -D puppeteer
# or library-only (no bundled browser download):
pnpm add -D puppeteer-core
```

If the package manager blocks install scripts, download the browser manually:

```bash
pnpm dlx puppeteer browsers install
```

## Smoke test

```js
import puppeteer from "puppeteer";

const browser = await puppeteer.launch({ headless: true });
const page = await browser.newPage();
await page.goto("https://example.com");
console.log(await page.title());
await browser.close();
```

## Pair with Midscene.js

```bash
pnpm add -D @midscene/web puppeteer tsx dotenv
```

See `docs/tools/midscene-js/SETUP.md` for agent setup and model keys.

## Verify

```bash
pnpm exec node -e "import('puppeteer').then(async ({default: p}) => { const b = await p.launch(); console.log('ok'); await b.close(); })"
```

## References

- Docs: https://pptr.dev/
- GitHub: https://github.com/puppeteer/puppeteer
