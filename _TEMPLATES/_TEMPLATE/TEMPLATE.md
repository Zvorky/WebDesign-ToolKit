---
id: _TEMPLATE
niche: Scaffold only — copy to a real {template_id}; do not ship as a live niche
tone: neutral
conversion_hooks:
  - primary_cta
required_brand_tokens:
  - --color-bg
  - --color-fg
  - --color-primary
  - --color-primary-fg
  - --font-heading
  - --font-body
  - --space-section
  - --max-width
slots:
  - BRAND_NAME
  - HEADLINE
  - SUPPORTING
  - CTA_LABEL
  - CTA_HREF
---

# Template scaffold

Copy this folder to `/_TEMPLATES/{template_id}/`, run `git init`, replace this file’s frontmatter, and fill slots in `index.html`. See [`../_TEMPLATE_SPEC.md`](../_TEMPLATE_SPEC.md).
