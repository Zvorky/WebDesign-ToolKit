# Vercel Guidelines — Setup

Optional fallback UI guidelines for brands without their own style guide. No runtime dependency.

## Install as an agent skill (recommended)

```bash
npx skills add https://github.com/vercel-labs/agent-skills --skill web-design-guidelines
```

## Manual reference

1. Open https://vercel.com/design/guidelines
2. Use it only when Project and Brand guidelines are absent.
3. Follow the toolkit fallback order: **Project > Brand > Vercel**.

## Toolkit usage

Do not treat Vercel Guidelines as a brand design system. If a brand needs lasting rules, capture them in `/BRANDS/{brand}/DESIGN.md` instead of relying on this fallback.

## Verify

Confirm agents load brand/project `DESIGN.md` first; Vercel rules apply only when those files do not declare custom design constraints.

## References

- Guidelines: https://vercel.com/design/guidelines
- Agent skill repo: https://github.com/vercel-labs/agent-skills
