# Page-template catalog nested git isolation

**Date:** 2026-10-12  
**Scope:** toolkit-wide catalog boundaries

**Decision:** Place the niche page-template catalog at `/TEMPLATES/`. Track only `README.md`, `_TEMPLATE_SPEC.md`, and `_TEMPLATE/**` on the toolkit remote. Each real template is a nested git repository at `/TEMPLATES/{template_id}/` — never a submodule, never force-added into toolkit commits/PRs. Templates stay brand-agnostic; brand context applies only at bind time under a project tree.

**Record:** [ADR-3.7](../docs/ARCHITECTURE.md)

**Rejected:** git submodules for the catalog; committing niche template trees to the toolkit remote.
