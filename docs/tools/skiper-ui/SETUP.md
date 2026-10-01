# Skiper UI — Setup

Uncommon shadcn/ui components. Free base components require attribution; Pro removes attribution.

## Prerequisites

React + Tailwind + shadcn/ui. Common deps:

```bash
pnpm add clsx framer-motion lucide-react tailwind-merge
pnpm dlx shadcn@latest init
```

## Install a free component

```bash
pnpm dlx shadcn@latest add @skiper-ui/skiper40
```

## Pro components (optional)

1. Add the license key:

```bash
# .env.local
SKIPER_LICENSE_KEY=your_license_key_here
```

2. Register the authenticated registry in `components.json`:

```json
{
  "registries": {
    "@skiper-ui": {
      "url": "https://skiper-ui.com/r/{name}.json",
      "headers": {
        "Authorization": "Bearer ${SKIPER_LICENSE_KEY}"
      }
    }
  }
}
```

3. Install:

```bash
pnpm dlx shadcn@latest add @skiper-ui/skiper20
```

## Toolkit usage

Install only inside `/BRANDS/{brand}/Projects/{project_name}/`. Keep free-tier attribution when required by the license.

## Verify

Import the component and confirm motion/layout match the brand guidelines.

## References

- Site: https://skiper-ui.com/
- Quick start: https://skiper-ui.com/docs/quick-start
