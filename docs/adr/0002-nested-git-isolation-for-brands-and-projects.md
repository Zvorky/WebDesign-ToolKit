# 2. Nested git isolation for brands and projects

Date: 2026-10-01

## Status

Accepted

Amends [ADR-3.1](../ARCHITECTURE.md#adr-31-strict-brand-context-isolation-brands), [ADR-3.2](../ARCHITECTURE.md#adr-32-three-tier-decentralized-history-tracking), [ADR-3.3](../ARCHITECTURE.md#adr-33-project-level-segregation), and [ADR-3.5](../ARCHITECTURE.md#adr-35-versioned-brand-and-project-templates-under-brands) in `docs/ARCHITECTURE.md`.

## Context

The toolkit git remote is a public documentation-and-infrastructure repository. Brand IP, brandbooks, assets, and project source are client work. Putting them on the toolkit remote (including via `git add -f` on gitignored paths, git submodules, or a "review PR") leaks client files and mixes two unrelated git histories.

ADR-3.1 already isolates brand files under git-ignored `/BRANDS/{brand}/`. That is necessary but not sufficient: agents still need an explicit rule that brands and projects are **separate git worlds**, never published with the toolkit, and never force-added into a toolkit PR.

Cloud-agent and PR instructions sometimes say "commit, push, open a PR" for whatever is on disk. Isolation must outrank those instructions.

## Decision

1. **Two worlds.** The toolkit repository holds toolkit structure, skills docs, ADRs, templates, and toolkit-wide `/history/`. Brands and projects are not toolkit content.
2. **Brand git sub-repository.** Each brand is its own nested git repository at `/BRANDS/{brand}/` (`git init` after copying `BRANDS/_TEMPLATE/`). It is **not** a git submodule of the toolkit and must **not** be committed into the toolkit repo.
3. **Project git sub-repository.** Each project is its own nested git repository at `/BRANDS/{brand}/Projects/{project}/`. Project source is not part of the brand repo (the brand template `.gitignore` ignores `Projects/*/` except the `_TEMPLATE` scaffold) and is not part of the toolkit repo.
4. **No publish by default.** Do not `git push` a brand or project to any remote, create a GitHub repository, or open a public PR for that work unless the user **explicitly authorizes publishing that brand or project in that conversation**.
5. **Toolkit `.gitignore`.** `/BRANDS/*` stays ignored except `BRANDS/README.md` and `BRANDS/_TEMPLATE/**`. Agents must never force-add gitignored paths (`git add -f`, `git add --force`) to sneak client files into a toolkit commit or PR.
6. **Isolation wins.** If cloud-agent, CI, or "open a public PR" instructions conflict with this isolation, follow isolation. A public toolkit PR may contain only toolkit files (docs, ADRs, templates, gitignore, global history, setup).
7. **History tiers.** Toolkit-wide `/history/` is versioned in the toolkit repo. Brand and project `history/` folders live inside those nested git worlds and stay out of the toolkit remote.

## Consequences

- Client work can live on disk next to the toolkit without entering `origin` of WebDesign-ToolKit.
- Agents initialize `git init` in brand and project folders; they do not `git add` those trees to the toolkit index.
- Publishing a client remote is an explicit, per-conversation permission, not an implied step of "make a PR".
- Toolkit `/history/` becomes reviewable in git; brand/project decision logs remain private unless the user publishes that nested repo.
- Accidental submodule gitlinks under `/BRANDS/` are a policy violation and must be removed from the toolkit index, not documented as the workflow.
