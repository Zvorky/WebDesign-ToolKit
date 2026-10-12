# Page Template Spec

Contract for every niche under `/TEMPLATES/{template_id}/`. The tracked scaffold at `_TEMPLATE/` demonstrates a valid minimal instance.

## Required files

| File | Role |
| :--- | :--- |
| `TEMPLATE.md` | YAML frontmatter + short human notes |
| `index.html` | Semantic layout with `{{SLOT_NAME}}` placeholders |
| `styles.css` | Layout only via `var(--*)` — no hard-coded brand colors/fonts/radii |
| `assets/` | Optional media; keep a `.gitkeep` if empty |

Optional: non-blocking ES module under `assets/` or next to `index.html` (catalog widgets only; ADR-3.10).

## `TEMPLATE.md` frontmatter schema

```yaml
---
id: string              # kebab-case template_id (matches folder name)
niche: string           # who / what conversion surface
tone: string            # tone profile (e.g. direct, calm, urgent)
conversion_hooks:       # list of intended CTAs / persuasion levers
  - string
required_brand_tokens:  # CSS custom property names the stylesheet expects
  - --color-primary
  - --font-heading
slots:                  # every {{SLOT_NAME}} used in HTML must appear here
  - SLOT_NAME
---
```

Rules:

- `id` must match the directory name `{template_id}`.
- Every `{{SLOT_NAME}}` in HTML must be listed under `slots`.
- Every `var(--token)` used in CSS must be listed under `required_brand_tokens` (or documented as a catalog-internal layout token with a fallback in `:root` for scaffolding only).
- No template enters the catalog without this complete spec (ADR-3.9).

## CSS / tokens (ADR-3.8)

- Brand-facing visuals: only `var(--…)`.
- Binding = inject a token sheet (e.g. `tokens.css`) derived from the brand’s `DESIGN.md` / brandbook. Do not edit template class structure for a brand.
- Scaffold `:root` may define temporary fallbacks for local preview; bound pages replace them with the brand sheet.

## Widgets (ADR-3.10)

- Interactive widgets **inside `/TEMPLATES/`** use vanilla ES modules only — no React, Vue, jQuery, or npm UI kits in those scripts.
- Keep each widget script under 10KB gzipped; load with `defer` or `type="module"` so they do not block the critical path.
- This rule is **catalog-scoped**. Brand projects may use the toolkit’s normal stacks.

## Isolation (ADR-3.7)

- Niche folders are nested git repositories.
- Never add them as toolkit submodules.
- Never force-add gitignored niche trees into toolkit commits/PRs.

## Publish gates (policy; ADR-5.8–5.9)

Bound output is a self-contained static HTML/CSS/JS package. Pre-publish targets (automation may follow later): LCP < 1.2s, CLS = 0, contrast ≥ 4.5:1, layout intact at 360px–430px.
