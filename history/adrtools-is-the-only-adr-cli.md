# adrtools is the only ADR CLI

**Date:** 2026-10-03  
**Scope:** toolkit-wide ADR workflow

**Decision:** Architecture decisions are recorded only with [zvorky/adrtools](https://github.com/zvorky/adrtools). Run `adrtools` from `docs/`. Source of truth is `docs/.adr`; `docs/ARCHITECTURE.md` is generated. Do not clone npryce/adr-tools, do not run `adr new`, do not keep a parallel `docs/adr/` numbered-file tree, do not hand-edit ADR numbers.

**Record:** [ADR-5.7](../docs/ARCHITECTURE.md)

**Rejected:** substituting Nat Pryce's adr-tools; inventing a second ADR layout beside `ARCHITECTURE.md`.
