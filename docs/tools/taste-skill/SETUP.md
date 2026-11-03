# Taste Skill — Setup

Anti-slop skill files that steer coding agents toward higher-quality UI. Prefer installing via root `setup.sh` when available.

## Install

```bash
npx skills add https://github.com/Leonxlnx/taste-skill --skill "design-taste-frontend"
```

Optional variants:

```bash
# Original v1 (only if v2 breaks a specific workflow)
npx skills add https://github.com/Leonxlnx/taste-skill --skill "design-taste-frontend-v1"
```

## Toolkit placement

Installed by `setup.sh` into `/.agents/skills/design-taste-frontend/` via the skills CLI. Agents (Cursor, Claude Code, Codex, etc.) discover skills from that directory automatically.

Default generation skill. `./setup.sh --with-impeccable-design` skips it and removes an existing copy (Impeccable then generates); `--skip-impeccable-design` restores it. Impeccable stays installed for review in both modes — see [`../impeccable/SETUP.md`](../impeccable/SETUP.md).

## Verify

```bash
npx skills ls
ls .agents/skills/design-taste-frontend/SKILL.md
```

## References

- Site: https://www.tasteskill.dev/
- Repo: https://github.com/Leonxlnx/taste-skill
