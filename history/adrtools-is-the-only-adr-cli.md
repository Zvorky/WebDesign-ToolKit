# adrtools is the only ADR CLI

**Date:** 2026-10-03  
**Scope:** toolkit-wide ADR workflow

**Decision:** Architecture decisions are recorded only with the host [zvorky/adrtools](https://github.com/zvorky/adrtools) CLI. Run `adrtools` from `docs/`. Source of truth is `docs/.adr`; `docs/ARCHITECTURE.md` is generated. Usage lives in `AGENTS.md`. Do not add `docs/tools/adrtools/`, do not vendor it via `setup.sh`, do not clone npryce/adr-tools, do not run `adr new`.

**Record:** [ADR-5.7](../docs/ARCHITECTURE.md)

**Rejected:** substituting Nat Pryce's adr-tools; inventing a second ADR layout beside `ARCHITECTURE.md`.
