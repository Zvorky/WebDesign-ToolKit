# Cult UI — Setup

MIT-licensed shadcn/ui registry of animated components. Copy-paste / CLI install — no package lock-in.

## Prerequisites

A React project with Tailwind CSS and shadcn/ui initialized:

```bash
pnpm dlx shadcn@latest init
```

## Install a component

```bash
pnpm dlx shadcn@latest add @cult-ui/halo-button
```

Search / preview:

```bash
pnpm dlx shadcn@latest search @cult-ui --query card
pnpm dlx shadcn@latest view @cult-ui/prompt-composer
```

Optional: pin the registry in `components.json`:

```json
{
  "registries": {
    "@cult-ui": "https://www.cult-ui.com/r/{name}.json"
  }
}
```

## Toolkit usage

Install into `/BRANDS/{brand}/Projects/{project_name}/` only. Treat components as owned source — refactor to match the brand `DESIGN.md`.

## Verify

Import the installed component in the project and confirm it renders with local theme tokens.

## References

- Site: https://www.cult-ui.com/
- Installation: https://www.cult-ui.com/docs/installation
