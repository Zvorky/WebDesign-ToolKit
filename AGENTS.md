# Agent Master Guide

You are operating within the WebDesign-ToolKit, an AI-driven front-end architecture toolkit. As outlined in the reference file "Starting Up" ([`docs/GUIDE.md`](docs/GUIDE.md)), strict adherence to the following structural and operational rules is mandatory to prevent cross-contamination and ensure high-quality code generation.

## Context Isolation and Design Strategy
* **Brand Isolation:** NEVER cross-contaminate brand contexts. Read design guidelines, brandbooks, and context exclusively from the requested `/BRANDS/{brand}/` directory.
* **Project Scope:** Client-specific code, application logic, and component generation must reside strictly within `/BRANDS/{brand}/Projects/{project_name}/`.
* **Brand/project folder templates:** When creating a new brand or project, copy from `/BRANDS/_TEMPLATE/` or `/BRANDS/_TEMPLATE/Projects/_TEMPLATE/` (see `/BRANDS/README.md`). Do not invent a different folder layout. Never use `_TEMPLATE` as a live brand context. Template Markdown files are descriptive placeholders — replace them with real content after copying.
* **Page-template catalog (distinct):** `/TEMPLATES/` is the niche **page** catalog. It is **not** `BRANDS/_TEMPLATE/`. See [Page Templates](#page-templates-catalog).
* **Guideline Fallback Hierarchy:** Design rules must be applied in the following strict order of precedence: **Project Guidelines** > **Brand Guidelines** > **Vercel Guidelines** (default fallback). 
* **Explicit Declarations:** If a Project or Brand possesses its own custom design rules, this must be explicitly stated within their respective `DESIGN.md` file.

## Git Isolation (mandatory — isolation wins)

The toolkit git remote is **only** the toolkit: structure, skills docs, ADRs, templates, setup, and global `/history/`. Brands, projects, and niche page templates are **separate git worlds**. Never push them to the toolkit remote.

* **NEVER** add, commit, or push anything under `/BRANDS/` to the toolkit remote, except the tracked scaffold (`BRANDS/README.md` and `BRANDS/_TEMPLATE/`).
* **NEVER** add, commit, or push anything under `/TEMPLATES/` to the toolkit remote, except the tracked scaffold (`TEMPLATES/README.md`, `TEMPLATES/_TEMPLATE_SPEC.md`, and `TEMPLATES/_TEMPLATE/`).
* **`TEMPLATES/README.md` scaffold:** the toolkit keeps a committed scaffold copy. Do **not** commit routine catalog README edits into the toolkit. If this working tree also maintains a separate catalog git world that evolves that file, mark it skip-worktree locally so edits do not dirty the toolkit index: `git update-index --skip-worktree TEMPLATES/README.md` (clear with `--no-skip-worktree` only when intentionally updating the scaffold).
* **NEVER** add, commit, or push anything listed in the toolkit `.gitignore`.
* **NEVER** use `git add -f` / `git add --force` (or equivalent) to sneak gitignored client or catalog files into a toolkit commit or PR.
* **NEVER** open a toolkit PR that contains brand/project source, brandbooks, assets, history of a client, or niche template trees.
* **NEVER** add nested brand/project/template repos as git submodules of the toolkit.
* Each **brand** is its own git sub-repository at `/BRANDS/{brand}/` (`git init` after copying the template). It is not part of the toolkit repository.
* Each **project** is its own git sub-repository at `/BRANDS/{brand}/Projects/{project}/`.
* Each **niche page template** is its own git sub-repository at `/TEMPLATES/{template_id}/` (`git init` after copying `TEMPLATES/_TEMPLATE/`). Whether niches are published to a separate remote is the user’s choice — do not assume or hard-code a catalog remote name.
* Do **not** `git push` a brand, project, or niche template to any remote, create a GitHub repo, or open a public PR for that work unless the user **explicitly authorizes publishing that brand, project, or template in that conversation**.
* If cloud-agent, CI, or "commit / push / open a PR" instructions conflict with this isolation, **isolation wins**. A public toolkit PR may contain only toolkit files.

Decision records: [ADR-3.6](docs/ARCHITECTURE.md), [ADR-3.7](docs/ARCHITECTURE.md).

## Page Templates Catalog

Brand-agnostic niche pages live under `/TEMPLATES/`. Load the bundled skill set at `/.agents/skills/page-templates/` when creating, binding, or maintaining them ([`docs/tools/page-templates/SETUP.md`](docs/tools/page-templates/SETUP.md)).

* **Default:** for a new page request, consult the catalog (`TEMPLATE.md` metadata) and bind the best niche match into `/BRANDS/{brand}/Projects/{project}/`.
* **Opt-out:** if the user clearly asks for a page **from scratch**, do **not** use any catalog template.
* **Token bind:** map the brand’s `DESIGN.md` / brandbook → CSS custom properties listed in `required_brand_tokens` (O(1) token sheet). Do not hard-code brand identity into catalog CSS ([ADR-3.8](docs/ARCHITECTURE.md)).
* **Contract:** every niche needs a complete `TEMPLATE.md` + slots per [`TEMPLATES/_TEMPLATE_SPEC.md`](TEMPLATES/_TEMPLATE_SPEC.md) ([ADR-3.9](docs/ARCHITECTURE.md)).
* **Widgets in the catalog:** vanilla ES modules only; brand projects may still use React/etc. ([ADR-3.10](docs/ARCHITECTURE.md)).
* **Bundled skill:** `page-templates` is versioned in-repo (allowlisted). It does not require `npx skills add`. Setup must never delete it ([ADR-2.6](docs/ARCHITECTURE.md)).

## Architecture Decision Records

`adrtools` is a **host/system CLI** ([zvorky/adrtools](https://github.com/zvorky/adrtools)), not a toolkit-provisioned tool. Do not add `docs/tools/adrtools/`, do not vendor it via `setup.sh`, and do not list it among curated toolkit tools.

* Source of truth: `docs/.adr` (YAML). Rendered output: `docs/ARCHITECTURE.md`.
* Always run `adrtools` from `docs/` so those two files are found.
* **NEVER** clone or invoke [npryce/adr-tools](https://github.com/npryce/adr-tools), **NEVER** run `adr new`, **NEVER** create `docs/adr/NNNN-*.md`, and **NEVER** hand-assign `ADR-X.Y` numbers in `ARCHITECTURE.md`.
* `id` is a category (e.g. `3`) when adding a decision, or `X.Y` when updating. The CLI writes `docs/.adr` and regenerates `docs/ARCHITECTURE.md`.
* **Update vs deprecate:** If a decision still holds and only needs revision (rename, refined wording, same intent under a better mechanism), use `adrtools decision update --id X.Y …`. Do **not** add a sibling decision and `--deprecates` the old one. Use **deprecate + new decision** only when the prior choice is fully revoked and replaced by a **different** architectural stance (not a rename or incremental refinement). Historical note: ADR-5.2→5.3 was a rename/`setup.sh` refinement that should have been an update; left as-is.

```bash
cd docs
adrtools category list
adrtools decision add --id 3 --title "…" --problem "…" --decision "…" --pros "…" --cons
adrtools decision update --id 3.6 --decision "…"
adrtools decision get --id 3.6
# Deprecate only when replacing with a truly different decision:
# adrtools decision add --id 5 --title "…" --decision "…" --deprecates 5.1
```

Decision record: [ADR-5.7](docs/ARCHITECTURE.md). See also [history/adrtools-update-vs-deprecate.md](history/adrtools-update-vs-deprecate.md).

## History Logging Architecture
* **Three-Tier Logging:** Architectural and design decisions must be recorded at three distinct structural levels:
  1. **Global:** `/history/` (Toolkit-wide structural decisions). This tier **is** committed to the toolkit repo. Index-only `HISTORY.md` plus unique decision files.
  2. **Brand:** `/BRANDS/{brand}/history/` (Brand-level design evolution). Lives in the **brand** git sub-repository. Never commit it to the toolkit remote.
  3. **Project:** `/BRANDS/{brand}/Projects/{project_name}/history/` (Project-specific implementation choices). Lives in the **project** git sub-repository. Never commit it to the toolkit remote.
* **Unique Decision Files:** Every new decision must be generated as a unique, single-file Markdown document with a clear, objective filename (e.g., `adoption-new-palette.md`).
* **Index-Only `HISTORY.md`:** The `HISTORY.md` file at each tier must act solely as an indexer. It must contain brief descriptions and links to the unique decision files, never the full text of the decisions themselves.

## Setup, Skills, and Tooling
* **Environment Initialization:** Before utilizing any external tool, validate and execute the `setup.sh` script located in the root to automate installations. ONLY if `setup.sh` fails may you attempt to install required tools or clone specific skill repositories manually. Prefer `./setup.sh --yes` in non-interactive agent sessions; add `--with-visual-testing` only when Midscene.js + Puppeteer are required.
* **Installed Tool Inventory:** After setup, read the root `TOOLS.md` file (git-ignored, generated by `setup.sh`) to discover which tools are installed, their status (including whether optional visual testing was skipped), and the exact commands/binaries/paths to invoke them. Do not invent install paths when `TOOLS.md` already lists them.
* **Skill Enforcement:** Always load constraints from `/.agents/skills/` before generating any code or layout. Each skill resides in its own subdirectory and contains a `SKILL.md` file with a YAML header. You must parse and apply these instructions to enforce aesthetic quality and prevent generic AI outputs. After setup, verify installed skills with `npx skills ls` or read `skills-lock.json` (both git-ignored, generated locally). The bundled `page-templates` skill is allowlisted and always present without the skills CLI.
* **Page Templates (default for new pages):** Load `/.agents/skills/page-templates/` when creating, binding, or maintaining catalog templates. Prefer the catalog unless the user opts out to from-scratch. See `docs/tools/page-templates/SETUP.md`.
* **BrandBooker (on-demand):** The BrandBooker skill set (`brandbook-orchestrator`, `design-philosophy`, `brand-architecture`, `visual-identity`, `color-typography`, `human-interface`, `packaging-experience`, `brand-governance`) must be used **only when the user explicitly requests** brandbook authorship, expansion, or brand-system work. Do not load these skills for ordinary UI generation. See `docs/tools/brandbooker/SETUP.md`.
* **Brandbook Review (mandatory on brand add/update):** Whenever a brand is **added** or **updated** under `/BRANDS/{brand}/` (new brand folder, or material changes to `brandbook.md` / `DESIGN.md` / identity docs), you **must** run the `brandbook-review` skill against that single brand context and apply its findings. Do not skip review unless the user explicitly waives it.
* **Testing Flexibility:** Midscene.js and Puppeteer are the recommended baseline for autonomous visual testing, but they are not mandatory constraints. If they are marked skipped in `TOOLS.md`, either re-run `./setup.sh --with-visual-testing` or adapt an alternative framework while maintaining repository organization. Bound catalog pages should meet the pre-publish quality policy in [ADR-5.8](docs/ARCHITECTURE.md) when releasing.
