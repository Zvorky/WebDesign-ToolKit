# TDX Engenharia brand onboarding

**Date:** 2026-10-01  
**Scope:** toolkit-wide brand isolation

**Decision:** Onboard TDX Engenharia as a live brand at `BRANDS/tdx-engenharia/` with project `Projects/site-institucional/`. Keep the BrandBooker rule: authorship skills stay on demand; `brandbook-review` ran because this is a new brand. Site code stays inside the project folder. Brand files are normally git-ignored; this delivery force-adds the TDX tree so the marketing site can be reviewed in git without changing ADR-3.1 for other brands.

**Rejected:** putting PHP under `/docs` or repo root; treating `_TEMPLATE` as the live brand; mixing another brand's tokens.
