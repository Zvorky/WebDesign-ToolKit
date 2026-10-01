# screenshot-to-code — Setup

Local app that turns screenshots into HTML/Tailwind/React/Vue. Prefer cloning via root `setup.sh` when available.

> Note: this upstream project may install Playwright Chromium for its own preview tooling. That dependency is internal to screenshot-to-code — toolkit visual testing still uses Midscene.js + Puppeteer (see ADR).

## Clone

```bash
git clone https://github.com/abi/screenshot-to-code.git
cd screenshot-to-code
```

## Backend

Requires Python 3.10+, Poetry, and at least one model API key (OpenAI / Anthropic / Gemini).

```bash
cd backend
cat > .env <<'EOF'
OPENAI_API_KEY=sk-your-key
# ANTHROPIC_API_KEY=your-key
# GEMINI_API_KEY=your-key
# REPLICATE_API_KEY=r8_your-key
EOF

poetry install
poetry run playwright install chromium   # preview tooling only
poetry run uvicorn main:app --reload --port 7001
```

On Linux, if Chromium system libs are missing:

```bash
poetry run playwright install --with-deps chromium
```

## Frontend

Requires Node.js and pnpm.

```bash
cd frontend
pnpm install
pnpm dev
```

Open http://localhost:5173

## Docker (optional)

```bash
echo "OPENAI_API_KEY=sk-your-key" > .env
docker-compose up -d --build
```

## Verify

Upload a screenshot in the UI and confirm generated code streams back from the backend.

## References

- Repo: https://github.com/abi/screenshot-to-code
- Topic index: https://github.com/topics/image-to-code
