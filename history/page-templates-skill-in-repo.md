# Toolkit-native page-templates skill set

**Date:** 2026-10-12  
**Scope:** `/.agents/skills/page-templates/`

**Decision:** Version the `page-templates` skill set in-repo as a controlled exception to ADR-2.4. Allowlist it in `.gitignore`. It does not require `setup.sh` / `npx skills add`. Setup must not delete it. Load it when creating, binding, or maintaining page templates.

**Record:** [ADR-2.6](../docs/ARCHITECTURE.md)

**Rejected:** installing catalog create/use/maintain rules only via the git-ignored skills CLI.
