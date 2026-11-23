# BrandBooker — Setup

Skill set for authoring, auditing, and governing brand systems ([zvorky/brandbooker](https://github.com/zvorky/brandbooker)). Enforces vector/Bézier hygiene, optical engineering, OKLCH/APCA color models, concentric geometry, and a 6-test acceptance gate. Prefer installing via root `setup.sh`.

- **Upstream Repository:** `https://github.com/zvorky/brandbooker`
- **Local Skill Root:** `.agents/skills/brandbooker/`

---

## Install

Install all skills at once (orchestrator + specialists + review):

```bash
npx skills add https://github.com/zvorky/brandbooker --skill '*' -y
```

Or install individual skills:

```bash
# Orchestrator (entry point):
npx skills add https://github.com/zvorky/brandbooker --skill brandbooker -y

# Mandatory review gate:
npx skills add https://github.com/zvorky/brandbooker --skill brandbook-review -y

# Specialist skills:
npx skills add https://github.com/zvorky/brandbooker --skill visual-identity -y
npx skills add https://github.com/zvorky/brandbooker --skill color-typography -y
npx skills add https://github.com/zvorky/brandbooker --skill human-interface -y
# … design-philosophy, brand-architecture, packaging-experience, brand-governance
```

---

## Skills Mapping (after install)

Following BrandBooker v2, the skill layout organizes the orchestrator at the root of `.agents/skills/brandbooker/` and the specialist domains in subdirectories:

| Skill | Path | Role |
| :--- | :--- | :--- |
| `brandbooker` | `.agents/skills/brandbooker/SKILL.md` | Entry router & manifesto (scope gates, stylescape validation) |
| `design-philosophy` | `.agents/skills/brandbooker/design-philosophy/SKILL.md` | Doctrine, voice, positioning & stylescape strategy |
| `brand-architecture` | `.agents/skills/brandbooker/brand-architecture/SKILL.md` | Monolithic vs. endorsed models, naming grammar & hierarchy |
| `visual-identity` | `.agents/skills/brandbooker/visual-identity/SKILL.md` | 7 Bézier hygiene rules, 4 optical compensations, responsive marks |
| `color-typography` | `.agents/skills/brandbooker/color-typography/SKILL.md` | OKLCH ramps, APCA/WCAG 2.1 contrast, font fallback metrics |
| `human-interface` | `.agents/skills/brandbooker/human-interface/SKILL.md` | Concentric radii $R_{\text{inner}}$, G3 squircles, 24×24 dp icon grid |
| `packaging-experience` | `.agents/skills/brandbooker/packaging-experience/SKILL.md` | Unboxing mechanics, lid friction, material sustainability |
| `brand-governance` | `.agents/skills/brandbooker/brand-governance/SKILL.md` | Decision-tree DAM taxonomy, vector formats, raster scale rules |
| `brandbook-review` | `.agents/skills/brandbooker/brandbook-review/SKILL.md` | Critical QA gate (6-Test Acceptance Protocol, >= 85/100) |

---

## Capabilities (v2 — Vector, Optical & Perceptual Governance)

1. **Orchestrator (`SKILL.md`):** Enforces stylescape validation before pixel generation, optical/geometric precision, and scope gates.
2. **Design Philosophy (`design-philosophy`):** Strategic brief, competitive audit, stylescapes, and enforceable voice posture.
3. **Brand Architecture (`brand-architecture`):** Branded house vs. endorsed models, naming grammar, and lockup hierarchy.
4. **Visual Identity (`visual-identity`):**
   - 7 Bézier hygiene rules (zero-handle ban, Magic Triangle, orthogonal extrema, 55%–72% handle balance, inflection discipline, G2 continuity, bounds cleanup).
   - 4 optical compensations (optical center, overshoot, stroke contrast/joins, ink traps).
   - Wordmark surgery (ban on mechanical stretching, 1–2 glyph customization, single ligature, optical kerning) & supergraphics.
   - 4-tier responsive mark floors (`120px/35mm` full lockup, stacked, `24px/15mm` logomark, `16×16px` solid favicon).
5. **Color & Typography (`color-typography`):** `OKLCH`/`LCh` perceptual ramps, `CMYK`/`Pantone` Coated & Uncoated gamut specs, dual `WCAG 2.1` + `APCA` (`Lc`) auditing, color-blindness luminance delta ($\Delta L \ge 35$), functional font pairing, and `@font-face` fallback metrics.
6. **Human Interface (`human-interface`):** Concentric border-radius equation $R_{\text{inner}} = \max(0, R_{\text{outer}} - (\text{padding} + \text{border}))$, `>24px` independence threshold, G3 squircles, and `24×24 dp` icon grids (`20×20 dp` live area).
7. **Packaging Experience (`packaging-experience`):** Unboxing mechanics, lid friction, and sustainable fiber specs.
8. **Brand Governance (`brand-governance`):** Decision-tree DAM taxonomy (`Variant > Color Space > Chromia > Vector/Raster`), required formats (`SVG`/`PDF`/`EPS`), and standard raster scales (`1920px`, `960px`, `192px`, `16×16px`).
9. **Critical QA Gate (`brandbook-review`):** 6-Test Acceptance Protocol (16px/80px micro-scale stress test, contrast/gamut, fallback typography, verbal/claim source integrity, concentric token usability, independent handover) with `>= 85/100` approval gate.

---

## Toolkit usage policy

- **On demand only (default):** Do **not** load BrandBooker authorship skills (`brandbooker`, specialists, governance, packaging, etc.) unless the user **explicitly** asks to create, expand, or rewrite a brandbook / brand system.
- **Mandatory review:** Whenever a brand is **added** or **updated** under `/BRANDS/{brand}/` (new folder, new/updated `brandbook.md`, `DESIGN.md`, or equivalent brand identity docs), run **`brandbook-review`** against that brand context. Load the orchestrator and specialist rubrics as required by the review skill.
- Keep reviews scoped to **one** `/BRANDS/{brand}/` directory. Never cross-contaminate brands.
- Write remediation notes into that brand’s `history/` (unique decision files + index in `HISTORY.md`) when the review changes guidelines.

---

## Verify

```bash
npx skills ls
ls .agents/skills/brandbooker/SKILL.md
ls .agents/skills/brandbooker/brandbook-review/SKILL.md
```

---

## References

- Upstream Repository: https://github.com/zvorky/brandbooker
