# WebDesign-ToolKit

A 100% human and AI-agent collaborative front-end architecture toolkit. This repository serves as pure documentation and an infrastructure guide to generate high-quality interfaces while strictly avoiding "AI slop" and respecting isolated brand guidelines.

## Repository Structure

* `/SKILLS/`: Contains third-party agentic skills. Each skill resides in its own directory and includes a `SKILL.md` file formatted with a standard YAML header.
* `/BRANDS/`: (Git-ignored) Isolated directories for each brand's context, design guidelines (`DESIGN.md`), project-specific code (`/Projects/`), and historical decisions.
* `/docs/`: Architectural Decision Records (ADRs) and global documentation.
* `setup.sh`: The unified bash script to provision the environment and clone third-party skills directly from their sources.
* `AGENTS.md`: The master guide and rulebook for LLM execution.

## Curated Tools & Skills

| Tool / Skill | Link | License & Usage |
| :--- | :--- | :--- |
| **Taste Skill** | [tasteskill.dev](https://www.tasteskill.dev/) | MIT License. Open source constraint guidelines to enforce design quality. |
| **awesome-design-md** | [VoltAgent/awesome-design-md](https://github.com/VoltAgent/awesome-design-md) | Open source reference for plain-text design constraints and brand systems. |
| **Originkit** | [originkit.dev](https://www.originkit.dev/) | Open source. Free components; MCP server requires an API key (10 free requests/day). |
| **Cult UI** | [cult-ui.com](https://www.cult-ui.com/) | MIT License. Free for commercial/personal use, no attribution required. |
| **Skiper UI** | [skiper-ui.com](https://skiper-ui.com/) | Hybrid. Free base components require attribution; Pro version is attribution-free. |
| **screenshot-to-code** | [topics/image-to-code](https://github.com/topics/image-to-code) | MIT License. Open source and free for local hosting. |
| **Vercel Guidelines** | [vercel.com/design/guidelines](https://vercel.com/design/guidelines) | Optional fallback reference for brands without their own style guides. |
| **Midscene.js & Puppeteer** | N/A | Optional (MIT/Open Source). Recommended baseline for autonomous visual testing. |