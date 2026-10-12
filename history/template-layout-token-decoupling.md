# Strict decoupling of template layout and design tokens

**Date:** 2026-10-12  
**Scope:** `/TEMPLATES/` catalog CSS contract

**Decision:** Catalog template HTML/CSS stays brand-agnostic. All visual parameters use CSS custom properties only. Binding a brand is an O(1) injection of a token sheet (typically `tokens.css` from that brand’s `DESIGN.md` / brandbook) without editing template structure or class logic.

**Record:** [ADR-3.8](../docs/ARCHITECTURE.md)

**Rejected:** hard-coded colors, fonts, or radii in catalog template stylesheets.
