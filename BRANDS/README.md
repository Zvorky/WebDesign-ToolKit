# BRANDS/

Git-ignored home for brand IP and project code. The only tracked entries here are this README and the `_TEMPLATE/` scaffold.

## Create a brand from the template

```bash
BRAND=acme
mkdir -p "BRANDS/${BRAND}"
cp -a BRANDS/_TEMPLATE/. "BRANDS/${BRAND}/"
rm -rf "BRANDS/${BRAND}/Projects/_TEMPLATE"   # optional until you add a project
# Edit BRANDS/${BRAND}/README.md, DESIGN.md, brandbook.md
```

Do **not** treat `_TEMPLATE` as a real brand. Never ask agents to generate product UI using `_TEMPLATE` as the brand context.

## Create a project under a brand

```bash
BRAND=acme
PROJECT=marketing-site
mkdir -p "BRANDS/${BRAND}/Projects/${PROJECT}"
cp -a BRANDS/_TEMPLATE/Projects/_TEMPLATE/. "BRANDS/${BRAND}/Projects/${PROJECT}/"
# Edit project README.md / DESIGN.md as needed
```

## Layout

| Path | Purpose |
| :--- | :--- |
| `BRANDS/_TEMPLATE/` | Brand scaffold (`README.md`, `DESIGN.md`, `brandbook.md`, `history/`, `Projects/`) |
| `BRANDS/_TEMPLATE/Projects/_TEMPLATE/` | Project scaffold (`README.md`, optional `DESIGN.md`, `history/`) |
| `BRANDS/{brand}/` | Real brand context (git-ignored) |
| `BRANDS/{brand}/Projects/{project}/` | Real project context (git-ignored) |

Each template Markdown file describes **what that file is for**. Replace placeholders with real content after copying.

Guideline precedence: **Project > Brand > Vercel**.

## After creating or updating a brand

Ask the agent to run **BrandBooker `brandbook-review`** on that brand folder. Other BrandBooker skills (orchestrator, philosophy, identity, etc.) should be used only when you explicitly want a brandbook authored or expanded. See [`docs/tools/brandbooker/SETUP.md`](../docs/tools/brandbooker/SETUP.md).
