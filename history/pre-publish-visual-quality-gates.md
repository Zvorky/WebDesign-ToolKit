# Pre-publish visual quality gates

**Date:** 2026-10-12  
**Scope:** bound/compiled pages before release

**Decision:** Bound pages should pass a pre-publish audit: LCP < 1.2s, CLS = 0, text contrast WCAG ≥ 4.5:1, and layout integrity at 360px–430px widths. Prefer Puppeteer (+ optional Midscene when provisioned). Failing pages are not released. Automation may land after Phase 1; the gate is architectural policy now.

**Record:** [ADR-5.8](../docs/ARCHITECTURE.md)

**Rejected:** shipping bound pages without a shared Core Web Vitals / contrast / small-viewport bar.
