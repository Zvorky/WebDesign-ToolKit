---
name: page-templates-maintain
description: >-
  Keep /_TEMPLATES/ niches compliant with _TEMPLATE_SPEC.md and ADRs:
  TEMPLATE.md completeness, token-only CSS, slot inventory, vanilla widgets,
  nested git isolation.
---

# Maintain Page Templates

## When

- Auditing or updating an existing niche.
- After SPEC or ADR changes that affect the catalog contract.

## Checklist

- [ ] `TEMPLATE.md` frontmatter complete: `id` matches folder, `niche`, `tone`, `conversion_hooks`, `required_brand_tokens`, `slots` (ADR-3.9).
- [ ] Every `{{SLOT_NAME}}` in HTML appears in `slots`.
- [ ] Brand-facing CSS uses only `var(--*)`; no hard-coded identity values (ADR-3.8).
- [ ] Catalog widgets are vanilla ES modules, non-blocking, under 10KB gzipped (ADR-3.10).
- [ ] Niche is a nested git repo; not a toolkit submodule; not force-added to the toolkit remote (ADR-3.7).
- [ ] No brand IP leaked into the catalog.
- [ ] Scaffold `_TEMPLATE/` still demonstrates a valid minimal instance of the SPEC.

## Remediation

Fix the niche in place under `/_TEMPLATES/{template_id}/`. Record material contract changes in toolkit `/history/` when they are toolkit-wide; niche-local notes stay in that template’s nested repo.

## Do not

- “Fix” compliance by baking one brand’s tokens into the catalog CSS.
- Delete the bundled `.agents/skills/page-templates/` tree during setup or cleanup.
