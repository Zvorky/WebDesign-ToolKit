# Design Specification & Semantic Stylescape — {{BRAND_NAME}}

**Precedence:** `Project DESIGN.md` > `Brand DESIGN.md` (`this file`) > `web-design-guidelines`

---

## 1. Semantic Stylescape & Visual Territory

- **Visual Direction:** {{VISUAL_DIRECTION_SUMMARY}}
- **Geometric Motif & Supergraphics:** {{EXTRACTED_ANGLE_CURVE_OR_GRID_MODULE}} (used for section dividers, framing masks, and structural accents).
- **Photography & Surface Rules:** Authentic photography only (local assets, never hotlinked); calm surfaces with deliberate whitespace (`padding >= 80px` desktop).

---

## 2. Perceptual Color Palette (`OKLCH` → `HEX`)

| Semantic Token | OKLCH | HEX | Contrast vs. Canvas (`WCAG` / `APCA`) | Role |
| :--- | :--- | :--- | :--- | :--- |
| `--bg-canvas` | `{{OKLCH_BG}}` | `{{HEX_BG}}` | Base | Primary page background (never void `#000000` unless OLED-mandated) |
| `--surface-primary` | `{{OKLCH_SURFACE}}` | `{{HEX_SURFACE}}` | — | Card and container surface |
| `--surface-elevated` | `{{OKLCH_ELEVATED}}` | `{{HEX_ELEVATED}}` | — | Interactive hover / elevated panels |
| `--border-subtle` | `{{OKLCH_BORDER}}` | `{{HEX_BORDER}}` | `>= 3.0:1` / `Lc >= 30` | Hairline structural borders |
| `--text-primary` | `{{OKLCH_TEXT}}` | `{{HEX_TEXT}}` | `>= 7.0:1` / `Lc >= 75` | Headings and primary copy |
| `--text-secondary` | `{{OKLCH_MUTED}}` | `{{HEX_MUTED}}` | `>= 4.5:1` / `Lc >= 60` | Supporting descriptions and metadata |
| `--accent-primary` | `{{OKLCH_ACCENT}}` | `{{HEX_ACCENT}}` | `>= 4.5:1` / `Lc >= 60` | Primary CTA and focus states |

---

## 3. Functional Typography & Fallback Metrics

- **Pairing Strategy:** {{PAIRING_STRATEGY}} (max 2 font families; zero mechanical stretching; `font-synthesis: none`).
- **Display / Headings:** `{{DISPLAY_FONT}}` (`woff2` self-hosted) + calibrated system fallback (`size-adjust`, `ascent-override`).
- **Body / Utility:** `{{BODY_FONT}}` (`woff2` self-hosted), max line measure `65ch`, `font-variant-numeric: tabular-nums` on pricing/calculators.

---

## 4. Concentric Border-Radius & Spatial Geometry

Nested rounded containers follow the concentric radius equation so inner and outer arcs stay parallel at `45°`:

$$R_{\text{inner}} = \max\left(0,\; R_{\text{outer}} - (\text{padding} + \text{border\_width})\right)$$

- `--radius-outer`: `{{RADIUS_OUTER}}` (e.g., `24px`)
- `--shell-padding`: `{{SHELL_PADDING}}` (e.g., `12px`)
- `--shell-border`: `{{SHELL_BORDER}}` (e.g., `1px`)
- `--radius-inner`: `max(0px, calc(var(--radius-outer) - var(--shell-padding) - var(--shell-border)))`
- **Independence Threshold:** Containers with `padding > 24px` act as independent surfaces.
- **Iconography:** All UI icons conform to a `24×24 dp` grid (`20×20 dp` live area, `2 dp` trim) with optical centering on directional glyphs.
