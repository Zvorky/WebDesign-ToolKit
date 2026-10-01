# Midscene.js — Setup

Vision-driven UI automation. In this toolkit, pair Midscene with **Puppeteer only** (Playwright is banned for toolkit testing — see ADR).

## Model API keys

```bash
export MIDSCENE_MODEL_BASE_URL="https://dashscope.aliyuncs.com/compatible-mode/v1"
export MIDSCENE_MODEL_API_KEY="your-api-key"
export MIDSCENE_MODEL_NAME="qwen3.7-plus"
export MIDSCENE_MODEL_FAMILY="qwen3"
```

Other models (Doubao, GLM, Gemini, GPT, …) are documented under Midscene model configuration.

## Install (with Puppeteer)

Inside the target project:

```bash
pnpm add -D @midscene/web puppeteer tsx dotenv
```

## Minimal script

```ts
import "dotenv/config";
import puppeteer from "puppeteer";
import { PuppeteerAgent } from "@midscene/web/puppeteer";

const browser = await puppeteer.launch({ headless: true });
const page = await browser.newPage();
await page.goto("http://localhost:3000");

const agent = new PuppeteerAgent(page);
await agent.aiAssert("The primary CTA is visible");
await browser.close();
```

Run with:

```bash
pnpm exec tsx demo.ts
```

## Verify

A successful run prints a Midscene HTML report path. Open it in a browser to review vision steps.

## References

- Site: https://midscenejs.com/
- Puppeteer integration: https://midscenejs.com/integrate-with-puppeteer.html
- Demo: https://github.com/web-infra-dev/midscene-example/blob/main/puppeteer-demo
