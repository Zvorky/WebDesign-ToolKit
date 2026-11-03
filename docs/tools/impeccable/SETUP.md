# Impeccable — Setup

Design skill with a deterministic anti-pattern detector (no LLM, no API key) and review commands. In this toolkit it is a **review** skill by default; it can optionally replace Taste Skill for generation. Prefer installing via root `setup.sh`.

## Modes

| Mode | How | Generation skill | Impeccable may use |
| :--- | :--- | :--- | :--- |
| **taste** (default) | `./setup.sh` / `--skip-impeccable-design` / `INSTALL_IMPECCABLE_DESIGN=0` | Taste Skill (`design-taste-frontend`) | `critique`, `polish`, `detect` only |
| **impeccable** (optional) | `./setup.sh --with-impeccable-design` / `INSTALL_IMPECCABLE_DESIGN=1` | Impeccable | All commands except `live` and the design hook |

Non-interactive runs (`--yes`) keep Taste unless the flag or env var asks for Impeccable. In impeccable mode setup does not install Taste and removes an existing `.agents/skills/design-taste-frontend/` plus its `skills-lock.json` entry, so the two generation skills never coexist. The active mode is written to the **Design skills** section of `TOOLS.md`.

## Install

What `setup.sh` runs (both modes):

```bash
npx skills add https://github.com/pbakaus/impeccable --skill impeccable -y
.agents/skills/impeccable/scripts/impeccable pin pin critique
.agents/skills/impeccable/scripts/impeccable pin pin polish
.agents/skills/impeccable/scripts/impeccable telemetry off
```

- Do **not** use `npx impeccable install` here: it offers the design hook, which runs outside model approval on every edit.
- Never enable the hook and never use `live` mode (it can launch agent CLIs with sandbox and approvals off).
- Telemetry: `telemetry off` writes `"telemetry": false` to `~/.impeccable/config.json` (machine-wide). Also export `DO_NOT_TRACK=1` in CI. Turning telemetry off does not stop the visual-directions fetch from impeccable.style on new designs (impeccable mode only).

## Toolkit placement

- Skill: `/.agents/skills/impeccable/` (skills CLI, git-ignored).
- Pinned shortcuts: `/.agents/skills/critique/` and `/.agents/skills/polish/` (thin `SKILL.md` files that forward to `$impeccable critique` / `$impeccable polish`, git-ignored, not in `skills-lock.json`; re-run `setup.sh` after a lockfile restore).
- Engine: the launcher `scripts/impeccable` downloads a checksum-verified binary into `~/.impeccable/bin/` on first use (no Node needed).
- Runtime state (`.impeccable/`, e.g. `critique/` reports that `polish` reads) is git-ignored at the toolkit root; in brand projects it lands in the project folder.

## Detect

```bash
.agents/skills/impeccable/scripts/impeccable detect BRANDS/{brand}/Projects/{project}/
```

Exit code `2` means findings were reported. Static scans of `.css`/`.js` are regex-only; `.html` files and a running URL (`detect http://localhost:PORT`) get the fuller element rules. Treat `cramped-padding` hits on full-bleed sections with care: often false positives in static mode.

## Verify

```bash
npx skills ls
ls .agents/skills/impeccable/SKILL.md .agents/skills/critique/SKILL.md .agents/skills/polish/SKILL.md
.agents/skills/impeccable/scripts/impeccable telemetry status
```

## References

- Site: https://impeccable.style
- Repo: https://github.com/pbakaus/impeccable (Apache-2.0)
- Privacy / telemetry: https://impeccable.style/privacy
