# Brand and project git isolation

**Date:** 2026-10-01  
**Scope:** toolkit-wide repository boundaries

**Decision:** Treat the toolkit git remote and brand/project work as separate git worlds. Each brand is a nested git repository at `/BRANDS/{brand}/`. Each project is a nested git repository at `/BRANDS/{brand}/Projects/{project}/`. Neither is committed, force-added, or pushed to the toolkit remote. Publishing a brand or project remote requires explicit user authorization in that conversation. Isolation outranks generic "open a PR" instructions.

**Record:** [ADR-3.6](../docs/ARCHITECTURE.md)

**Rejected:** adding client trees as toolkit submodules; `git add -f` of gitignored `/BRANDS/` paths; shipping brandbooks or project source in a public toolkit PR.
