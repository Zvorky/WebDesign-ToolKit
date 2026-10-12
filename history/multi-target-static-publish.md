# Multi-target static publish artifact

**Date:** 2026-10-12  
**Scope:** bound page output packaging

**Decision:** The bound output is a self-contained static package (plain HTML/CSS/JS), directly publishable to static file hosting (Apache/Nginx docroots, GitHub Pages, Cloudflare Pages, Vercel static). No runtime adapter. Exact output directory naming is deferred to later bind tooling (commonly `dist/` under the project).

**Record:** [ADR-5.9](../docs/ARCHITECTURE.md)

**Rejected:** framework adapters or host-specific runtime requirements for bound demos.
