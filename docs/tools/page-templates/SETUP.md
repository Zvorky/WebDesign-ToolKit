# Page Templates — Setup

Bundled toolkit skill set for the `/TEMPLATES/` niche page catalog ([ADR-2.6](../../ARCHITECTURE.md)). **No install step.**

## Install

Nothing to install. The skill tree ships with the toolkit clone at:

```text
.agents/skills/page-templates/
  SKILL.md           # orchestrator
  create/SKILL.md
  use/SKILL.md
  maintain/SKILL.md
```

`setup.sh` records it in `TOOLS.md` as **bundled** and must **never delete** this directory. It is allowlisted in `.gitignore` (unlike CLI-installed skills).

Do **not** run `npx skills add` for this skill.

## Skills

| Skill | Path | Role |
| :--- | :--- | :--- |
| `page-templates` | `.agents/skills/page-templates/` | Router: create / use / maintain; default-use + from-scratch opt-out |
| `page-templates-create` | `…/create/` | New niche from scratch or extract from an existing page |
| `page-templates-use` | `…/use/` | Select via `TEMPLATE.md`, inject brand tokens, fill slots → project |
| `page-templates-maintain` | `…/maintain/` | Keep SPEC / ADR contracts |

## Catalog vs brand scaffold

| Path | Meaning |
| :--- | :--- |
| `BRANDS/_TEMPLATE/` | Brand / project **folder** scaffold |
| `/TEMPLATES/` | Niche **page** catalog (`README.md`, `_TEMPLATE_SPEC.md`, `_TEMPLATE/`) |

Real niches: `/TEMPLATES/{template_id}/` — nested git repos, brand-agnostic ([ADR-3.7](../../ARCHITECTURE.md)).

## Usage policy

- **Default:** for new pages, consult the catalog unless the user asks for a page **from scratch**.
- Bind only into `/BRANDS/{brand}/Projects/{project}/`.
- Map brand `DESIGN.md` / brandbook → `required_brand_tokens` (CSS variables). No mandatory `BRAND.md`.
- Catalog widgets: vanilla ES modules only ([ADR-3.10](../../ARCHITECTURE.md)).

Further reading: [`TEMPLATES/README.md`](../../../TEMPLATES/README.md), [`TEMPLATES/_TEMPLATE_SPEC.md`](../../../TEMPLATES/_TEMPLATE_SPEC.md), [`AGENTS.md`](../../../AGENTS.md).
