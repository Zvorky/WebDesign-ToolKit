# Zero-dependency vanilla JS for catalog widgets

**Date:** 2026-10-12  
**Scope:** interactive widgets inside `/_TEMPLATES/` only

**Decision:** High-conversion widgets shipped in the catalog use modern native JavaScript (ES modules) only — no React, Vue, or jQuery in those scripts. Keep each widget under 10KB gzipped and non-blocking on the critical path. Brand projects under `/BRANDS/` may still use the toolkit’s normal component stacks.

**Record:** [ADR-3.10](../docs/ARCHITECTURE.md)

**Rejected:** framework-coupled widgets inside the page-template catalog.
