# adrtools: update vs deprecate

**Date:** 2026-10-12  
**Scope:** toolkit-wide ADR authoring practice

**Decision:** When an architecture decision is only modified—same intent, refined wording, renamed artifact, or an incremental mechanism change—agents and humans must use `adrtools decision update --id X.Y`. Deprecation (`--deprecates` plus a new decision id) is reserved for cases where the prior decision is fully revoked and replaced by a substantially different architectural choice.

**Why:** Treating renames and refinements as deprecations creates noisy ADR chains (e.g. 5.2 → 5.3 for `install.sh` → `setup.sh`) that look like policy reversals when they were only updates. Update keeps a stable id and a clear modification history.

**Related:** [ADR-5.7](../docs/ARCHITECTURE.md), [AGENTS.md](../AGENTS.md) (Architecture Decision Records).

**Not changing:** Existing deprecated records (including 5.1 / 5.2) stay as written; this rule applies going forward.
