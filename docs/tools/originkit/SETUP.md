# Originkit — Setup

Motion-friendly, copy-paste components plus a hosted MCP server. Browsing is free; fetching source needs an API key (10 free requests/day).

## API key

1. Create an account at https://www.originkit.dev/
2. Open **Settings / Profile → API Integration (API Keys)**
3. Copy a key (`cmp_live_…`)
4. Export it for CLI / agents:

```bash
export ORIGINKIT_API_KEY=cmp_live_…
```

## CLI (project components)

```bash
npx originkit@latest login          # browser OAuth, or rely on ORIGINKIT_API_KEY
npx originkit@latest list
npx originkit@latest search globe
npx originkit@latest add globe --dry-run --no-deps   # inspect first
npx originkit@latest add globe
```

## MCP (Cursor / Claude / Codex)

Hosted endpoint: `https://mcp.originkit.dev/mcp`

Example Cursor / MCP config:

```json
{
  "mcpServers": {
    "originkit": {
      "url": "https://mcp.originkit.dev/mcp",
      "headers": {
        "Authorization": "Bearer <your-api-key>"
      }
    }
  }
}
```

Claude Code:

```bash
claude mcp add originkit https://mcp.originkit.dev/mcp --transport http \
  --header "Authorization: Bearer <your-api-key>" --scope user
```

## Verify

```bash
npx originkit@latest whoami
npx originkit@latest search particle
```

## References

- Site: https://www.originkit.dev/
- Integrations: https://www.originkit.dev/integrations
- npm: https://www.npmjs.com/package/originkit
