# WebDesign-ToolKit — Operational Guide

## 1. Repository Architecture & Precedence

- **`WebDesign-ToolKit` (this repo):** Architectural manual, agent rules (`AGENTS.md`), skill definitions (`.agents/skills/`), and clean brand scaffolds (`BRANDS/_TEMPLATE/`). Never commit client brands or proprietary templates here.
- **`Landingpages-` (production repo):** Holds active client brands (`BRANDS/<slug>/`), agnostic niche templates (`TEMPLATES/<nicho>/`), and the staging deployment pipeline (`PREVIEW-PIPELINE/`).
- **Precedence Chain:** `Project DESIGN.md / tokens.css` > `Brand DESIGN.md / brandbook.md` > `web-design-guidelines`.

## 2. Standard 5-Phase Execution Workflow

1. **Brand Ingest & Semantic Stylescape (`BRANDS/<slug>/`):**
   - Extract real logo, authentic photography, fonts, and palette from primary public sources.
   - Author `brandbook.md`, `DESIGN.md`, and `tokens.css` using `OKLCH` perceptual color scales, functional font pairing, supergraphics motifs, and verified claims with exact source URLs.
   - Run `brandbook-review` and pass the **6-Test Acceptance Protocol** (`>= 85/100`) before building pages.
2. **Template Routing (`TEMPLATES/`):**
   - Select an agnostic template via `page-templates` or build from scratch if explicitly requested. Never hardcode brand tokens or copy into `TEMPLATES/`.
3. **UI Generation & Optical Craft (`design-taste-frontend`):**
   - Author self-contained HTML/CSS/JS bound to `tokens.css` with all `{{SLOT_NAME}}` placeholders resolved.
   - Enforce **Concentric Border-Radius Math** on nested rounded containers:
     $$R_{\text{inner}} = \max\left(0,\; R_{\text{outer}} - (\text{padding} + \text{border\_width})\right)$$
     (Containers with `padding > 24px` act as independent surfaces.)
   - Apply optical centering on directional button icons, `font-variant-numeric: tabular-nums` on pricing/calculators, `font-synthesis: none`, and `24×24 dp` icon grids (`20×20 dp` live area).
   - Enforce clean SVG hygiene (`viewBox` required, zero duplicate/zero-handle nodes, micro-scale legibility at `16×16 px`).
4. **Automated & Visual Quality Review (`impeccable-review`):**
   - Validate relative asset paths, `noindex` headers, `WCAG 2.1 AA` (`4.5:1` / `3.0:1`) + `APCA` (`Lc >= 60` / `Lc >= 45`) contrast, concentric radii, and mobile touch targets (`>= 44×44 px`) across `1440px`, `768px`, and `390px`.
5. **Preview Readiness (`PREVIEW-PIPELINE/`):**
   - Configure `preview.manifest.json` (short unique `slug`, `expires: ""`, `indefinite: false`, internal `contact`), run `validate-project.sh`, and stage via branch + Pull Request.
