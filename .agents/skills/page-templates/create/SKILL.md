---
name: page-templates-create
description: >-
  Create a niche page template under /_TEMPLATES/{template_id}/ from scratch
  or by extracting structure from an existing page. Enforces TEMPLATE.md,
  token-only CSS, slots, and nested git isolation.
---

# Create Page Template

## When

- Author a new catalog niche.
- Extract a reusable layout from an existing page into the catalog.

## Steps

1. Choose a kebab-case `{template_id}` that is not `_TEMPLATE`.
2. Copy the scaffold:

```bash
mkdir -p "_TEMPLATES/${TEMPLATE_ID}"
cp -a _TEMPLATES/_TEMPLATE/. "_TEMPLATES/${TEMPLATE_ID}/"
git -C "_TEMPLATES/${TEMPLATE_ID}" init
```

3. Rewrite `TEMPLATE.md` frontmatter per [`_TEMPLATE_SPEC.md`](../../../_TEMPLATES/_TEMPLATE_SPEC.md): `id`, `niche`, `tone`, `conversion_hooks`, `required_brand_tokens`, `slots`.
4. Build `index.html` with only documented `{{SLOT_NAME}}` placeholders.
5. Write `styles.css` using `var(--*)` only for brand-facing visuals (ADR-3.8). No hard-coded brand colors/fonts/radii.
6. If interactive: add a small vanilla ES module (< 10KB gzipped, non-blocking). No React/Vue/jQuery in catalog widgets (ADR-3.10).
7. From an existing page: strip brand-specific values into slots + tokens; leave structure brand-agnostic.

## Do not

- Put brand IP or project code under `/_TEMPLATES/`.
- Add the niche as a toolkit submodule or `git add -f` it into the toolkit remote.
- Push a template remote unless the user authorizes that template in the conversation.
