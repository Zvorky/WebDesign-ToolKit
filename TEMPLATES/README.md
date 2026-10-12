# Page Templates Catalog

Brand-agnostic niche page templates. Distinct from `BRANDS/_TEMPLATE/` (brand/project folder scaffold).

## Tracked vs nested

| Path | Toolkit remote |
| :--- | :--- |
| `README.md`, `_TEMPLATE_SPEC.md`, `_TEMPLATE/**` | Tracked |
| `/TEMPLATES/{template_id}/` (real niches) | Nested git world — gitignored; never a submodule |

## Create a niche template

```bash
TEMPLATE_ID=landing-saas
mkdir -p "TEMPLATES/${TEMPLATE_ID}"
cp -a TEMPLATES/_TEMPLATE/. "TEMPLATES/${TEMPLATE_ID}/"
git -C "TEMPLATES/${TEMPLATE_ID}" init
# Edit TEMPLATE.md, index.html, styles.css — see _TEMPLATE_SPEC.md
```

Do not `git add -f` niche trees into the toolkit repo. Do not push a template remote unless the user explicitly authorizes that template.

## Use (bind) a template

1. Load `.agents/skills/page-templates/` (bundled).
2. Select a niche via `TEMPLATE.md` metadata.
3. Inject a brand token sheet from `/BRANDS/{brand}/` (`DESIGN.md` / brandbook → CSS custom properties).
4. Fill `{{SLOTS}}` and write the bound page under `/BRANDS/{brand}/Projects/{project}/`.

**Opt-out:** if the user clearly asks for a page **from scratch**, do not use the catalog.

## Contract

See [`_TEMPLATE_SPEC.md`](./_TEMPLATE_SPEC.md). Decisions: ADR-3.7–3.10, ADR-2.6, ADR-5.8–5.9.
