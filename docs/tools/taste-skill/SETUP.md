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

Mirror installed skills under `/SKILLS/` so agents load them before generation. Each skill directory must include a `SKILL.md` with a YAML header.

## Verify

Confirm the skill is visible to your agent (Cursor / Claude Code / Codex / etc.) and that `/SKILLS/` contains the expected `SKILL.md` files.

## References

- Site: https://www.tasteskill.dev/
- Repo: https://github.com/Leonxlnx/taste-skill
