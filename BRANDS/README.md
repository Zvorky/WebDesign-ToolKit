# BRANDS/

Git-ignored home for brand IP and project code on the **toolkit** remote. The only tracked entries here are this README and the `_TEMPLATE/` scaffold.

Each **brand** and each **project** is a nested git repository (its own git world). Never add those trees to the toolkit index, never `git add -f`, never open a toolkit PR with client files. Do not push a brand or project remote unless the user explicitly authorizes that publish. See [`AGENTS.md`](../AGENTS.md) and [ADR-3.6](../docs/ARCHITECTURE.md).

## Create a brand from the template

```bash
BRAND=acme
mkdir -p "BRANDS/${BRAND}"
cp -a BRANDS/_TEMPLATE/. "BRANDS/${BRAND}/"
rm -rf "BRANDS/${BRAND}/Projects/_TEMPLATE"   # optional until you add a project
git -C "BRANDS/${BRAND}" init
# Edit BRANDS/${BRAND}/README.md, DESIGN.md, brandbook.md
```

Do **not** treat `_TEMPLATE` as a real brand. Never ask agents to generate product UI using `_TEMPLATE` as the brand context.

## Create a project under a brand

```bash
BRAND=acme
PROJECT=marketing-site
mkdir -p "BRANDS/${BRAND}/Projects/${PROJECT}"
cp -a BRANDS/_TEMPLATE/Projects/_TEMPLATE/. "BRANDS/${BRAND}/Projects/${PROJECT}/"
git -C "BRANDS/${BRAND}/Projects/${PROJECT}" init
# Edit project README.md / DESIGN.md as needed
```

The brand template `.gitignore` ignores nested project directories (`Projects/*/`) except `Projects/_TEMPLATE/` (toolkit scaffold). Real projects are not committed into the brand repo.

## Layout

| Path | Purpose |
| :--- | :--- |
| `BRANDS/_TEMPLATE/` | Brand scaffold (`README.md`, `DESIGN.md`, `brandbook.md`, `history/`, `Projects/`, `.gitignore`) |
| `BRANDS/_TEMPLATE/Projects/_TEMPLATE/` | Project scaffold (`README.md`, optional `DESIGN.md`, `history/`, `.gitignore`) |
| `BRANDS/{brand}/` | Real brand context (ignored by toolkit git; own git repo) |
| `BRANDS/{brand}/Projects/{project}/` | Real project context (ignored by toolkit git; own git repo) |

Each template Markdown file describes **what that file is for**. Replace placeholders with real content after copying.

Guideline precedence: **Project > Brand > Vercel**.

## After creating or updating a brand

Ask the agent to run **BrandBooker `brandbook-review`** on that brand folder. Other BrandBooker skills (orchestrator, philosophy, identity, etc.) should be used only when you explicitly want a brandbook authored or expanded. See [`docs/tools/brandbooker/SETUP.md`](../docs/tools/brandbooker/SETUP.md).
