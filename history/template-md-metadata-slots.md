# Declarative TEMPLATE.md metadata and slots

**Date:** 2026-10-12  
**Scope:** `/_TEMPLATES/` catalog manifests

**Decision:** Every niche template ships a `TEMPLATE.md` with standardized YAML frontmatter: niche target, tone profile, conversion hooks, required brand tokens, and the mandatory `{{SLOT_NAME}}` inventory. Incomplete specs are rejected by `_TEMPLATE_SPEC.md` and the page-templates skill.

**Record:** [ADR-3.9](../docs/ARCHITECTURE.md)

**Rejected:** catalog entries without a complete semantic manifest.
