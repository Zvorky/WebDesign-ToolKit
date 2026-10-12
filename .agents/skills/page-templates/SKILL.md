---
name: page-templates
description: >-
  Orchestrates create, use/bind, and maintain for the brand-agnostic
  /_TEMPLATES/ catalog. Use when authoring niche templates, binding a template
  to a brand project, or keeping TEMPLATE.md / token / widget contracts valid.
  Default: consult the catalog for new pages unless the user opts out to
  from-scratch.
---

# Page Templates Orchestrator

Bundled toolkit skill (ADR-2.6). Not installed via `npx skills add`. Setup must never delete this directory.

## Distinguish scaffolds

| Path | Meaning |
| :--- | :--- |
| `BRANDS/_TEMPLATE/` | Brand / project **folder** scaffold |
| `/_TEMPLATES/` | Niche **page** catalog (this skill) |

## Router

| Task | Load |
| :--- | :--- |
| New niche from scratch or extract from an existing page | [`create/SKILL.md`](create/SKILL.md) |
| Bind catalog template → brand project page | [`use/SKILL.md`](use/SKILL.md) |
| Keep SPEC / ADR contracts (tokens, slots, vanilla widgets) | [`maintain/SKILL.md`](maintain/SKILL.md) |

## Default flow

1. **New page request** → consult `/_TEMPLATES/*/TEMPLATE.md` and bind the best niche match, **unless** the user clearly asks for a page **from scratch** (opt-out).
2. Write bound pages only under `/BRANDS/{brand}/Projects/{project}/`.
3. Map brand `DESIGN.md` / brandbook → CSS variables listed in `required_brand_tokens` (O(1) token sheet; ADR-3.8).
4. Create or maintain templates only under `/_TEMPLATES/`; run nested `git init` on new niches; never submodule; never push a template remote without explicit user authorization (ADR-3.7).

```
New page:
- [ ] Opt-out from-scratch? → author without catalog
- [ ] Else scan TEMPLATE.md niches → pick match
- [ ] Inject brand token sheet + fill slots
- [ ] Write under BRANDS/{brand}/Projects/{project}/
```

## Hard rules

- Catalog is brand-agnostic. No brand IP inside `/_TEMPLATES/`.
- Never force-add gitignored niche trees into the toolkit remote.
- Catalog widgets: vanilla ES modules only (ADR-3.10). Brand projects may use React/etc.
- Bound output is static HTML/CSS/JS (ADR-5.9). Pre-publish quality gates: ADR-5.8 (policy).

See [`docs/tools/page-templates/SETUP.md`](../../../docs/tools/page-templates/SETUP.md) and [`_TEMPLATES/_TEMPLATE_SPEC.md`](../../../_TEMPLATES/_TEMPLATE_SPEC.md).
