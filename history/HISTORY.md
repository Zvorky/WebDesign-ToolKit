# Toolkit history index

Index only. Full text lives in the linked files. New toolkit-wide decisions go here as their own Markdown files.

## Decisions

- [Brand and project git isolation](./brand-project-git-isolation.md) — nested brand/project git repos stay out of the toolkit remote (ADR-3.6).
- [adrtools is the only ADR CLI](./adrtools-is-the-only-adr-cli.md) — use zvorky/adrtools from `docs/`; never npryce/adr-tools (ADR-5.7).
- [Page-template catalog nested git isolation](./page-template-catalog-nested-git.md) — `/_TEMPLATES/` tracks scaffold only; niche templates are nested git worlds (ADR-3.7).
- [Template layout / token decoupling](./template-layout-token-decoupling.md) — catalog CSS uses custom properties only; brand bind is O(1) token injection (ADR-3.8).
- [TEMPLATE.md metadata and slots](./template-md-metadata-slots.md) — every niche ships a complete YAML + slot inventory (ADR-3.9).
- [Catalog vanilla JS widgets](./catalog-vanilla-js-widgets.md) — zero-dependency ES modules inside `/_TEMPLATES/` only (ADR-3.10).
- [Page-templates skill in-repo](./page-templates-skill-in-repo.md) — bundled allowlisted skill set; exception to ADR-2.4 (ADR-2.6).
- [Pre-publish visual quality gates](./pre-publish-visual-quality-gates.md) — LCP/CLS/contrast/small-viewport policy before release (ADR-5.8).
- [Multi-target static publish artifact](./multi-target-static-publish.md) — self-contained HTML/CSS/JS for any static host (ADR-5.9).
