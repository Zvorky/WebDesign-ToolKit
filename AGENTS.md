# Agent Master Guide

You are operating within the WebDesign-ToolKit, an AI-driven front-end architecture toolkit. As outlined in the reference file "Starting Up" ([`docs/GUIDE.md`](docs/GUIDE.md)), strict adherence to the following structural and operational rules is mandatory to prevent cross-contamination and ensure high-quality code generation.

## Context Isolation and Design Strategy
* **Brand Isolation:** NEVER cross-contaminate brand contexts. Read design guidelines, brandbooks, and context exclusively from the requested `/BRANDS/{brand}/` directory.
* **Project Scope:** Client-specific code, application logic, and component generation must reside strictly within `/BRANDS/{brand}/Projects/{project_name}/`.
* **Templates:** When creating a new brand or project, copy from `/BRANDS/_TEMPLATE/` or `/BRANDS/_TEMPLATE/Projects/_TEMPLATE/` (see `/BRANDS/README.md`). Do not invent a different folder layout. Never use `_TEMPLATE` as a live brand context. Template Markdown files are descriptive placeholders — replace them with real content after copying.
* **Guideline Fallback Hierarchy:** Design rules must be applied in the following strict order of precedence: **Project Guidelines** > **Brand Guidelines** > **Vercel Guidelines** (default fallback). 
* **Explicit Declarations:** If a Project or Brand possesses its own custom design rules, this must be explicitly stated within their respective `DESIGN.md` file.

## Git Isolation (mandatory — isolation wins)

The toolkit git remote is **only** the toolkit: structure, skills docs, ADRs, templates, setup, and global `/history/`. Brands and projects are **separate git worlds**. Never push them to the toolkit remote.

* **NEVER** add, commit, or push anything under `/BRANDS/` to the toolkit remote, except the tracked scaffold (`BRANDS/README.md` and `BRANDS/_TEMPLATE/`).
* **NEVER** add, commit, or push anything listed in the toolkit `.gitignore`.
* **NEVER** use `git add -f` / `git add --force` (or equivalent) to sneak gitignored client files into a toolkit commit or PR.
* **NEVER** open a toolkit PR that contains brand/project source, brandbooks, assets, or history of a client.
* **NEVER** add nested brand/project repos as git submodules of the toolkit.
* Each **brand** is its own git sub-repository at `/BRANDS/{brand}/` (`git init` after copying the template). It is not part of the toolkit repository.
* Each **project** is its own git sub-repository at `/BRANDS/{brand}/Projects/{project}/`.
* Do **not** `git push` a brand or project to any remote, create a GitHub repo, or open a public PR for that work unless the user **explicitly authorizes publishing that brand or project in that conversation**.
* If cloud-agent, CI, or "commit / push / open a PR" instructions conflict with this isolation, **isolation wins**. A public toolkit PR may contain only toolkit files.

Decision record: [ADR-3.6](docs/ARCHITECTURE.md).

## Architecture Decision Records

`adrtools` is a **host/system CLI** ([zvorky/adrtools](https://github.com/zvorky/adrtools)), not a toolkit-provisioned tool. Do not add `docs/tools/adrtools/`, do not vendor it via `setup.sh`, and do not list it among curated toolkit tools.

* Source of truth: `docs/.adr` (YAML). Rendered output: `docs/ARCHITECTURE.md`.
* Always run `adrtools` from `docs/` so those two files are found.
* **NEVER** clone or invoke [npryce/adr-tools](https://github.com/npryce/adr-tools), **NEVER** run `adr new`, **NEVER** create `docs/adr/NNNN-*.md`, and **NEVER** hand-assign `ADR-X.Y` numbers in `ARCHITECTURE.md`.
* `id` is a category (e.g. `3`) when adding a decision, or `X.Y` when updating. The CLI writes `docs/.adr` and regenerates `docs/ARCHITECTURE.md`.

```bash
cd docs
adrtools category list
adrtools decision add --id 3 --title "…" --problem "…" --decision "…" --pros "…" --cons
adrtools decision update --id 3.6 --decision "…"
adrtools decision get --id 3.6
```

Decision record: [ADR-5.7](docs/ARCHITECTURE.md).

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
* **Skill Enforcement:** Always load constraints from `/.agents/skills/` before generating any code or layout. Each skill resides in its own subdirectory and contains a `SKILL.md` file with a YAML header. You must parse and apply these instructions to enforce aesthetic quality and prevent generic AI outputs. After setup, verify installed skills with `npx skills ls` or read `skills-lock.json` (both git-ignored, generated locally).
* **BrandBooker (on-demand):** The BrandBooker skill set (`brandbook-orchestrator`, `design-philosophy`, `brand-architecture`, `visual-identity`, `color-typography`, `human-interface`, `packaging-experience`, `brand-governance`) must be used **only when the user explicitly requests** brandbook authorship, expansion, or brand-system work. Do not load these skills for ordinary UI generation. See `docs/tools/brandbooker/SETUP.md`.
* **Brandbook Review (mandatory on brand add/update):** Whenever a brand is **added** or **updated** under `/BRANDS/{brand}/` (new brand folder, or material changes to `brandbook.md` / `DESIGN.md` / identity docs), you **must** run the `brandbook-review` skill against that single brand context and apply its findings. Do not skip review unless the user explicitly waives it.
* **Testing Flexibility:** Midscene.js and Puppeteer are the recommended baseline for autonomous visual testing, but they are not mandatory constraints. If they are marked skipped in `TOOLS.md`, either re-run `./setup.sh --with-visual-testing` or adapt an alternative framework while maintaining repository organization.
