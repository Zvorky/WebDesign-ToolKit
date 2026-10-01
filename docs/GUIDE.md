# WebDesign-ToolKit — Human Guide

This guide is for **people** using the toolkit day to day. It explains what the repository is, how to set it up, how brands and projects work, and where to look next.

For LLM/agent rules, see [`AGENTS.md`](../AGENTS.md).  
For architectural decisions (why things are the way they are), see [`ARCHITECTURE.md`](./ARCHITECTURE.md).

---

## What this toolkit is

WebDesign-ToolKit is a **documentation-and-infrastructure** repo for building front-end UI with humans and AI agents together. It is not a single app. It is:

1. **Rules** so agents do not invent generic “AI slop” and do not mix brand contexts.
2. **Setup** (`setup.sh`) so tools and skills install the same way on every machine.
3. **Brand isolation** (`BRANDS/`) so client IP stays local and out of git.
4. **Curated tools** (component registries, design references, optional visual testing).

You write brand guidelines and project code under `BRANDS/`. Agents read those files and generate UI inside one project at a time.

---

## Mental model

```text
Toolkit (this repo)          Brand context (git-ignored)         One app
─────────────────────        ───────────────────────────         ────────
docs/, setup.sh, AGENTS.md   BRANDS/acme/                        Projects/site/
.agents/skills/              DESIGN.md, brandbook.md             source + optional DESIGN.md
vendor/ (local installs)     history/                            history/
```

**Guideline order** (highest wins):

1. Project `DESIGN.md` (if present)
2. Brand `DESIGN.md`
3. Vercel Guidelines (fallback only)

---

## First-time setup

1. Clone this repository.
2. Install system basics if needed (Git, curl, Node.js 18+, Python 3.10+). Details: [root README — Prerequisites](../README.md#prerequisites).
3. Run:

```bash
./setup.sh
# optional visual testing stack:
./setup.sh --with-visual-testing
```

4. Open the generated **`TOOLS.md`** at the repo root. It lists what was installed, skipped, or failed, plus exact commands and paths on *your* machine.
5. Per-tool how-tos live under [`docs/tools/*/SETUP.md`](./tools/).

If `setup.sh` fails for one tool, the rest can still succeed — check `TOOLS.md` before debugging by hand.

---

## Working with brands and projects

`BRANDS/` holds real client/brand work and is **mostly git-ignored**. Only the scaffold is tracked:

- [`BRANDS/README.md`](../BRANDS/README.md) — how to copy the template
- `BRANDS/_TEMPLATE/` — brand scaffold
- `BRANDS/_TEMPLATE/Projects/_TEMPLATE/` — project scaffold

### Create a brand

```bash
BRAND=acme
mkdir -p "BRANDS/${BRAND}"
cp -a BRANDS/_TEMPLATE/. "BRANDS/${BRAND}/"
rm -rf "BRANDS/${BRAND}/Projects/_TEMPLATE"
```

Then edit:

| File | Role |
| :--- | :--- |
| `README.md` | Brand overview for humans and agents |
| `DESIGN.md` | Visual system (colors, type, layout, motion) |
| `brandbook.md` | Identity / voice / logo rules |
| `history/HISTORY.md` | Index of brand decisions (links only) |

You can bootstrap `DESIGN.md` from `vendor/awesome-design-md/` after setup, or write your own.

### Create a project

```bash
BRAND=acme
PROJECT=marketing-site
mkdir -p "BRANDS/${BRAND}/Projects/${PROJECT}"
cp -a BRANDS/_TEMPLATE/Projects/_TEMPLATE/. "BRANDS/${BRAND}/Projects/${PROJECT}/"
```

Put application source **only** under that project folder. Add a project `DESIGN.md` only when this app must override the brand.

### Rules of thumb

- Never use `_TEMPLATE` as a live brand when prompting an agent.
- One brand context per agent session — do not mix `BRANDS/acme` with `BRANDS/other`.
- Keep secrets and brandbooks out of git; they belong under `BRANDS/` (ignored).

---

## Recording decisions (history)

History is **three tiers**, all local/git-ignored except the template examples:

| Tier | Path |
| :--- | :--- |
| Toolkit-wide | `/history/` |
| Brand | `/BRANDS/{brand}/history/` |
| Project | `/BRANDS/{brand}/Projects/{project}/history/` |

At each tier:

- `HISTORY.md` is an **index** (short blurbs + links).
- Each real decision is its **own** Markdown file with a clear name (e.g. `adoption-new-palette.md`).

---

## Collaborating with AI agents

1. Run `./setup.sh` (or confirm `TOOLS.md` is current).
2. Point the agent at **one** brand and, if needed, **one** project path.
3. Agents follow [`AGENTS.md`](../AGENTS.md): load skills from `.agents/skills/`, respect guideline precedence, write code only under the project folder.
4. You still own taste: review generated UI against `DESIGN.md` and the brandbook.

Useful agent skills after setup:

- **design-taste-frontend** (Taste Skill) — anti-slop layout/aesthetic rules  
- **web-design-guidelines** — Vercel interface guidelines as fallback  

---

## Curated tools (where to look)

| Need | Start here |
| :--- | :--- |
| Local install paths / status | `TOOLS.md` (after `setup.sh`) |
| Taste / anti-slop skill | [`docs/tools/taste-skill/SETUP.md`](./tools/taste-skill/SETUP.md) |
| Ready-made `DESIGN.md` examples | [`docs/tools/awesome-design-md/SETUP.md`](./tools/awesome-design-md/SETUP.md) |
| Motion / MCP components | [`docs/tools/originkit/SETUP.md`](./tools/originkit/SETUP.md) |
| shadcn-style UI kits | [`docs/tools/cult-ui/SETUP.md`](./tools/cult-ui/SETUP.md), [`docs/tools/skiper-ui/SETUP.md`](./tools/skiper-ui/SETUP.md) |
| Screenshot → code | [`docs/tools/screenshot-to-code/SETUP.md`](./tools/screenshot-to-code/SETUP.md) |
| Fallback UI guidelines | [`docs/tools/vercel-guidelines/SETUP.md`](./tools/vercel-guidelines/SETUP.md) |
| Optional visual testing | [`docs/tools/midscene-js/SETUP.md`](./tools/midscene-js/SETUP.md), [`docs/tools/puppeteer/SETUP.md`](./tools/puppeteer/SETUP.md) |

Licenses and links are summarized in the [root README](../README.md#curated-tools--skills).

---

## Documentation map

| Document | Audience | Purpose |
| :--- | :--- | :--- |
| [Root README](../README.md) | Everyone | Quick start, prerequisites, tool table |
| **This guide** | Humans | How to use the toolkit day to day |
| [`AGENTS.md`](../AGENTS.md) | AI agents | Mandatory runtime rules |
| [`ARCHITECTURE.md`](./ARCHITECTURE.md) | Humans + agents | Architecture Decision Records |
| [`docs/tools/*/SETUP.md`](./tools/) | Humans + agents | Per-tool setup |
| [`BRANDS/README.md`](../BRANDS/README.md) | Humans | Brand/project template usage |

---

## Language

Global docs and repository structure are in **English**. Content inside a brand folder (and local history) may use your preferred language.
