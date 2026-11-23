# Brandbook & Visual Identity System — {{BRAND_NAME}}

**Status:** Draft / Internal Preview System  
**Architecture:** Monolithic (Branded House) | Endorsed | Hybrid  
**Governance Framework:** BrandBooker Protocol v2 (Vector/Bézier Hygiene, Optical Geometry, OKLCH/APCA, 6-Test Acceptance Gate)

---

## 0. Scope Gates

| Scope | Status | Chapters |
| :--- | :--- | :--- |
| **Core Identity** | **REQUIRED** | §1 Doctrine & Stylescape, §2 Architecture, §3 Visual Identity, §4 Color & Typography, §6 Governance & DAM |
| **Digital Products / Web** | **REQUIRED / N/A** | §5 Human Interface (Concentric Radii & `24×24 dp` Icon Grid) |
| **Physical Goods / Print** | **REQUIRED / N/A** | §7 Packaging & Print Gamut Specs |

---

## 1. Doctrine, Manifesto & Strategic Positioning

- **Core Principle (Suppression):** {{CORE_DOCTRINE}}
- **Three Pillars:**
  1. **{{PILLAR_1}}**
  2. **{{PILLAR_2}}**
  3. **{{PILLAR_3}}**
- **Voice Posture:** {{VOICE_POSTURE}} (Direct, empirical, zero marketing clichés or AI filler).

---

## 2. Brand Architecture & Naming Grammar

- **Institutional Signature:** `{{INSTITUTIONAL_SIGNATURE}}`
- **Naming Taxonomy:**
  - `{{BRAND_NAME}} {{PRODUCT_OR_SERVICE_1}}`
  - `{{BRAND_NAME}} {{PRODUCT_OR_SERVICE_2}}`

---

## 3. Visual Identity & Vector Engineering

### 3.1 Mark Construction & Bézier Hygiene
- **Primary Geometric Motif:** {{GEOMETRIC_MOTIF}}
- **Vector Standards Enforced:** Zero-handle elimination, orthogonal extrema nodes, Magic Triangle curve discipline, balanced handle proportions (`55%–72%`), G2 curvature continuity, and clean `viewBox` bounds.
- **Optical Compensations Applied:**
  - *Optical vs. Geometric Center:* Directional icons/play triangles shifted toward visual mass center.
  - *Overshoot:* Circular/pointed contours extended `~1.5%–3%` past cap-height/baseline.
  - *Stroke Contrast:* Horizontal bars thinned relative to vertical stems; acute joins relieved.

### 3.2 Responsive Mark Matrix & Clear Space

| Variant | Minimum Clear Space | Minimum Size (Digital / Print) | Deployment Context |
| :--- | :--- | :--- | :--- |
| **Full Lockup (with tagline)** | `1.5x – 2x` (x-height module) | `120 px` width / `35 mm` width | Hero headers, institutional covers |
| **Stacked Lockup** | `1x – 1.5x` | Governed by internal legibility | Square containers, cards, vertical formats |
| **Isolated Logomark** | `0.5x – 1x` | `24 px` width / `15 mm` width | Compact headers, avatars, badges |
| **Favicon / Micro-Scale** | Fixed pixel grid | `16×16 px` single solid color | Browser tabs, app icons |

### 3.3 Catalog of Forbidden Uses
1. Non-orthogonal rotation, skewing, or mechanical aspect-ratio stretching.
2. Drop shadows, outer glows, bevels, or unauthorized multi-stop gradients.
3. Placing the full lockup below `120 px` / `35 mm` instead of switching to the isolated logomark.
4. Placing marks over photography where contrast drops below `4.5:1` (`WCAG AA`).

---

## 4. Color & Typography Governance

- **Perceptual Color System:** Authored in `OKLCH` for uniform perceptual lightness, exported to `HEX`/`RGB` (and `CMYK`/`Pantone` Coated & Uncoated when print is in scope).
- **Accessibility Targets:** Body copy `>= 4.5:1` (`WCAG AA`) and `Lc >= 60` (`APCA`); Large headings `>= 3.0:1` and `Lc >= 45`; Color-blind safe luminance delta (`ΔL >= 35`).
- **Typographic Pairing:** Display/Wordmark (`{{DISPLAY_FONT}}`) paired with Utility/Body (`{{BODY_FONT}}`), backed by calibrated system fallback metrics and `tabular-nums` for pricing/data.

---

## 5. Human Interface & Concentric Geometry

- **Concentric Border-Radius Rule:** Nested rounded containers must satisfy $R_{\text{inner}} = \max(0, R_{\text{outer}} - (\text{padding} + \text{border}))$ (exempt when `padding > 24px`).
- **Iconography Grid:** `24×24 dp` artboard with `20×20 dp` live area (`2 dp` perimeter trim) and perceptual mass keyline equalization.

---

## 6. Approved Claims & Source Verification

> **Zero-Fabrication Policy:** Every metric, rating, price, credential, or channel claim used in copy must appear below with an exact primary source URL.

| Claim / Fact | Exact Value | Primary Source URL | Status |
| :--- | :--- | :--- | :--- |
| {{CLAIM_TYPE}} | {{CLAIM_VALUE}} | {{SOURCE_URL}} | Verified |

### Not Approved (Unverified — Do Not Publish)
- {{UNVERIFIED_ITEM_OR_NONE}}

---

## 7. 6-Test Acceptance Gate (`brandbook-review`)

- [ ] **Test 1 — Micro-Scale Stress (`16×16 px` & `80 px`):** Solid monochrome mark holds crisp contours without clogging or shadow reliance.
- [ ] **Test 2 — Contrast & Gamut (`WCAG 2.1` + `APCA`):** All token pairs pass contrast and color-blindness luminance checks.
- [ ] **Test 3 — Fallback Typography & Metrics:** Self-hosted `woff2` fonts ship with calibrated fallback metrics (`size-adjust`) and zero mechanical stretching.
- [ ] **Test 4 — Verbal Identity & Claim Sources:** Copy matches voice posture; 100% of factual claims are backed by primary URLs.
- [ ] **Test 5 — Concentric Tokens & Usability:** `DESIGN.md` and `tokens.css` define semantic tokens and concentric radius math.
- [ ] **Test 6 — Independent Handover & DAM:** Decision-tree asset folders (`01-lockup/`, `02-logomark/`, `03-favicon/`) and clean SVGs are complete.
