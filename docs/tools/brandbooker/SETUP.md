# BrandBooker — Setup

Skill set for authoring, auditing, and governing brand systems ([zvorky/brandbooker](https://github.com/zvorky/brandbooker)). Prefer installing via root `setup.sh`.

## Install

```bash
npx skills add https://github.com/zvorky/brandbooker --skill '*' -y
```

Or install individual skills (orchestrator + specialists + review):

```bash
npx skills add https://github.com/zvorky/brandbooker --skill brandbook-orchestrator -y
npx skills add https://github.com/zvorky/brandbooker --skill brandbook-review -y
# … design-philosophy, brand-architecture, visual-identity, color-typography,
#   human-interface, packaging-experience, brand-governance
```

## Skills (after install)

| Skill | Path | Role |
| :--- | :--- | :--- |
| `brandbook-orchestrator` | `.agents/skills/brandbook-orchestrator/` | Entry router / manifesto |
| `design-philosophy` | `.agents/skills/design-philosophy/` | Doctrine and voice |
| `brand-architecture` | `.agents/skills/brand-architecture/` | Naming and lockups |
| `visual-identity` | `.agents/skills/visual-identity/` | Logo and clear space |
| `color-typography` | `.agents/skills/color-typography/` | Palette and type |
| `human-interface` | `.agents/skills/human-interface/` | Digital HIG |
| `packaging-experience` | `.agents/skills/packaging-experience/` | Unboxing / packaging |
| `brand-governance` | `.agents/skills/brand-governance/` | DAM / tokens / compliance |
| `brandbook-review` | `.agents/skills/brandbook-review/` | Critical audit of existing brandbooks |

## Toolkit usage policy

- **On demand only (default):** Do **not** load BrandBooker authorship skills (`brandbook-orchestrator`, specialists, governance, packaging, etc.) unless the user **explicitly** asks to create, expand, or rewrite a brandbook / brand system.
- **Mandatory review:** Whenever a brand is **added** or **updated** under `/BRANDS/{brand}/` (new folder, new/updated `brandbook.md`, `DESIGN.md`, or equivalent brand identity docs), run **`brandbook-review`** against that brand context. Load the orchestrator and specialist rubrics as required by the review skill.
- Keep reviews scoped to **one** `/BRANDS/{brand}/` directory. Never cross-contaminate brands.
- Write remediation notes into that brand’s `history/` (unique decision files + index in `HISTORY.md`) when the review changes guidelines.

## Verify

```bash
npx skills ls
ls .agents/skills/brandbook-review/SKILL.md
ls .agents/skills/brandbook-orchestrator/SKILL.md
```

## References

- Repo: https://github.com/zvorky/brandbooker
