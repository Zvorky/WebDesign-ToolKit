# adr-tools — Setup

CLI for numbered Architecture Decision Records. In this toolkit, **new ADRs must be created with `adr new`**. Do not hand-assign a new `ADR-X.Y` number in `docs/ARCHITECTURE.md`.

## Install

`setup.sh` clones [npryce/adr-tools](https://github.com/npryce/adr-tools) to `vendor/adr-tools/`. Read `TOOLS.md` for the exact `adr` binary on this machine.

```bash
export PATH="$PWD/vendor/adr-tools/src:$PATH"
adr help
```

The ADR directory is `docs/adr/` (see `.adr-dir` at the repo root).

## Use in this toolkit

```bash
adr new "Short decision title"
# then edit the generated docs/adr/NNNN-….md
adr list
adr generate toc
```

Legacy ADRs (sections 1.x–5.x) stay in [`docs/ARCHITECTURE.md`](../../ARCHITECTURE.md). Link from that outline when a new file amends a legacy decision.

## References

- https://github.com/npryce/adr-tools
- http://thinkrelevance.com/blog/2011/11/15/documenting-architecture-decisions
