# Brandbooker Setup & Architecture

- **Upstream Repository:** `https://github.com/Zvorky/BrandBooker`
- **Local Skill Path:** `.agents/skills/brandbooker/`

## Capabilities (v2 — Vector, Optical & Perceptual Governance)

1. **Orchestrator (`SKILL.md`):** Enforces stylescape validation before pixel generation, optical/geometric precision, and scope gates.
2. **Design Philosophy (`design-philosophy`):** Strategic brief, competitive audit, stylescapes, and enforceable voice posture.
3. **Brand Architecture (`brand-architecture`):** Branded house vs. endorsed models, naming grammar, and lockup hierarchy.
4. **Visual Identity (`visual-identity`):**
   - 7 Bézier hygiene rules (zero-handle ban, Magic Triangle, orthogonal extrema, 55%–72% handle balance, inflection discipline, G2 continuity, bounds cleanup).
   - 4 optical compensations (optical center, overshoot, stroke contrast/joins, ink traps).
   - Wordmark surgery (ban on mechanical stretching, 1–2 glyph customization, single ligature, optical kerning) & supergraphics.
   - 4-tier responsive mark floors (`120px/35mm` full lockup, stacked, `24px/15mm` logomark, `16×16px` solid favicon).
5. **Color & Typography (`color-typography`):** `OKLCH`/`LCh` perceptual ramps, `CMYK`/`Pantone` Coated & Uncoated gamut specs, dual `WCAG 2.1` + `APCA` (`Lc`) auditing, color-blindness luminance delta (`ΔL >= 35`), functional font pairing, and `@font-face` fallback metrics.
6. **Human Interface (`human-interface`):** Concentric border-radius equation $R_{\text{inner}} = \max(0, R_{\text{outer}} - (\text{padding} + \text{border}))$, `>24px` independence threshold, G3 squircles, and `24×24 dp` icon grids (`20×20 dp` live area).
7. **Packaging Experience (`packaging-experience`):** Unboxing mechanics, lid friction, and sustainable fiber specs.
8. **Brand Governance (`brand-governance`):** Decision-tree DAM taxonomy (`Variant > Color Space > Chromia > Vector/Raster`), required formats (`SVG`/`PDF`/`EPS`), and standard raster scales (`1920px`, `960px`, `192px`, `16×16px`).
9. **Critical QA Gate (`brandbook-review`):** 6-Test Acceptance Protocol (16px/80px micro-scale stress test, contrast/gamut, fallback typography, verbal/claim source integrity, concentric token usability, independent handover) with `>= 85/100` approval gate.

## Synchronization

When `Zvorky/BrandBooker` is updated:
1. Sync `.agents/skills/brandbooker/` in this toolkit repository (maintaining `SKILL.md` and domain sub-skills).
2. Run `brandbook-review` whenever any brand under `BRANDS/{brand}/` is created or materially updated.
