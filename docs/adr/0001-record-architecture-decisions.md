# 1. Record architecture decisions

Date: 2026-10-01

## Status

Accepted

## Context

WebDesign-ToolKit needs a durable, numbered record of architectural decisions. This repository already has a narrative ADR outline in [`docs/ARCHITECTURE.md`](../ARCHITECTURE.md) using `ADR-X.Y` section numbers (legacy ADRs 1.x through 5.x). Hand-editing a new number in that file risks collisions and skips the project's ADR tool.

## Decision

New architecture decision records are created with [adr-tools](https://github.com/npryce/adr-tools) (`adr new "Title"`). Files live under [`docs/adr/`](./). Do not invent a new `ADR-X.Y` number by hand in `docs/ARCHITECTURE.md`.

Legacy ADRs in `docs/ARCHITECTURE.md` remain in force. When a new file amends a legacy decision, update that section's text and link here. Do not copy the full new ADR into the outline.

Agents must use the `adr` CLI from `vendor/adr-tools/src/adr` (provisioned by `setup.sh`; see `TOOLS.md` and [`docs/tools/adr-tools/SETUP.md`](../tools/adr-tools/SETUP.md)).

## Consequences

See Michael Nygard's article: [Documenting Architecture Decisions](http://thinkrelevance.com/blog/2011/11/15/documenting-architecture-decisions). For the CLI, see Nat Pryce's [adr-tools](https://github.com/npryce/adr-tools).

`docs/ARCHITECTURE.md` stays the human index of the legacy outline. `docs/adr/` is the source of truth for every ADR created after this decision.
