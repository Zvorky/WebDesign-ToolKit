---
name: page-templates-use
description: >-
  Select a niche via TEMPLATE.md metadata, inject brand design tokens, fill
  slots, and write the bound page under /BRANDS/{brand}/Projects/{project}/.
---

# Use / Bind Page Template

## When

- User wants a new page and did **not** opt out to from-scratch.
- Binding a chosen `/_TEMPLATES/{template_id}/` into a brand project.

## Steps

1. Confirm brand + project paths: `/BRANDS/{brand}/` and `/BRANDS/{brand}/Projects/{project}/`.
2. Scan niche `TEMPLATE.md` files (skip `_TEMPLATE` as a live niche). Match on `niche`, `tone`, `conversion_hooks`.
3. Read `required_brand_tokens`. Derive a token sheet (e.g. `tokens.css`) from that brand’s `DESIGN.md` / brandbook — map to the listed custom properties. Do not invent a mandatory `BRAND.md`.
4. Copy template HTML/CSS/assets into the project (or generate bound files there). Replace every `{{SLOT_NAME}}` with project content. Link/inject the brand token sheet so layout CSS keeps using `var(--*)` (ADR-3.8).
5. Keep catalog widget scripts vanilla if retained; project may wrap or replace with its stack later (ADR-3.10 allows project frameworks).
6. Bound output must remain a self-contained static package when that is the deliverable (ADR-5.9).

## Opt-out

If the user clearly asks for a page **from scratch**, do not use the catalog — author under the project only.

## Do not

- Write bound pages outside `/BRANDS/{brand}/Projects/{project}/`.
- Edit the catalog niche to hard-code one brand’s identity.
- Cross-contaminate brand contexts.
