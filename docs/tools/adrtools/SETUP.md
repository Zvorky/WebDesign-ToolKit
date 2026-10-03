# adrtools — Setup

The **only** Architecture Decision Record CLI for this toolkit is [zvorky/adrtools](https://github.com/zvorky/adrtools). Do not clone or invoke [npryce/adr-tools](https://github.com/npryce/adr-tools). Do not use `adr new`. Do not create a parallel `docs/adr/` numbered-file tree. Do not hand-number sections in `docs/ARCHITECTURE.md`.

Source of truth: `docs/.adr` (YAML). Rendered output: `docs/ARCHITECTURE.md`. Always run `adrtools` from `docs/`.

## Install

`setup.sh` prefers a system `adrtools` on `PATH` (for example `~/.local/bin/adrtools`). If it is missing, it clones `https://github.com/zvorky/adrtools.git` to `vendor/adrtools/`. Read `TOOLS.md` for the exact binary on this machine.

```bash
adrtools --help
# or, if vendored:
./vendor/adrtools/adrtools --help
```

Requires Python 3.10+ and PyYAML.

## Use in this toolkit

```bash
cd docs
adrtools category list
adrtools decision add --id 3 --title "…" --problem "…" --decision "…" --pros "…" --cons
adrtools decision update --id 3.6 --decision "…"
adrtools decision get --id 3.6
```

`id` is category (e.g. `3`) when adding a decision, or `X.Y` when updating. The CLI writes `docs/.adr` and regenerates `docs/ARCHITECTURE.md`.

## References

- https://github.com/zvorky/adrtools
