# Architecture Decision Record

## **[ADR-1.0]** Core Architecture & Workflow
**Created at:** 2026-10-01T13:15:07 | **Modified at:** 2026-10-01T13:15:18  

**Description:** Foundational decisions about how the WebDesign ToolKit operates, including AI-driven development and interface strategy.  

- ### **[ADR-1.1]** AI-Driven Front-End Infrastructure  
  **Modified at:** 2026-10-01T13:15:18  
  **Problem:** Manual front-end development does not scale for a multi-brand toolkit where components, integration, and UI testing must stay autonomous and consistent across natural-language constraints.  
  **Decision:** Shift from manual front-end development to an AI-agent-driven workflow. The repository acts as a unified toolkit where LLMs handle component generation, integration, and UI testing based on natural language constraints.  
  **Pro:** Maximizes agent autonomy  
  **Pro:** Unifies generation, integration, and testing in one toolkit  
  **Pro:** Aligns the repo with LLM-native workflows  

- ### **[ADR-1.2]** TUI/CLI First Approach  
  **Modified at:** 2026-10-01T13:15:18  
  **Problem:** Jumping straight into complex web layouts risks weak foundations for agent tooling and slows early iteration on the developer-facing toolkit.  
  **Decision:** Initial toolkit and development efforts will focus on Terminal User Interfaces (TUI) and Command Line Interfaces (CLI) before expanding into complex web layouts.  
  **Pro:** Establishes a strong developer-friendly foundation  
  **Pro:** Keeps early scope focused and iterable  
  **Pro:** Delays complex web layout concerns until the agent toolkit is solid  


## **[ADR-2.0]** Design System & Component Sourcing
**Created at:** 2026-10-01T13:15:11 | **Modified at:** 2026-10-01T17:26:08  

**Description:** Decisions about visual guidelines, aesthetic enforcement, and how UI building blocks are sourced for LLM-friendly generation.  

- ### **[ADR-2.1]** Semantic Design Guidelines (DESIGN.md)  
  **Modified at:** 2026-10-01T15:54:15  
  **Problem:** JSON design tokens and Figma exports require complex parsers and are poorly aligned with how LLMs natively consume design intent.  
  **Decision:** Adopt plain-text DESIGN.md files (based on the VoltAgent/Stitch standard and the awesome-design-md reference collection) to define visual themes, color roles, and typography, instead of relying on JSON design tokens or Figma exports. Place a descriptive DESIGN.md in each brand directory under /BRANDS/{brand}/. Reference copies may live under vendor/awesome-design-md/ after setup.  
  **Pro:** LLMs process Markdown natively  
  **Pro:** Agents instantly understand look and feel without parsers  
  **Pro:** Keeps brand visual intent human-readable and versionable  

- ### **[ADR-2.2 (DEPRECATED)]** ~~Anti-Slop Enforcement (SKILL.md)~~  
  ~~**Modified at:** 2026-10-01T15:54:15~~  
  ~~**Problem:** Unconstrained LLM generation tends toward generic AI aesthetics (slop), weak layout choices, and noisy motion unless quality preferences are enforced before code is written.~~  
  ~~**Decision:** Integrate the Taste Skill framework using SKILL.md files to enforce strict aesthetic, layout, and motion rules. Keep these files version-controlled in the root /SKILLS/ directory.~~  
  ~~**Pro:** Prevents generic AI-generated UI~~  
  ~~**Pro:** Encodes high-quality design preferences before generation~~  
  ~~**Pro:** Centralizes reusable aesthetic rules for all agents~~  
  **Deprecated at:** 2026-10-01T15:54:15  
  **Replaced by:** 2.4  

- ### **[ADR-2.3]** Open-Source Component Sourcing  
  **Modified at:** 2026-10-01T13:15:24  
  **Problem:** Heavy NPM dependency trees bloat the toolkit and give agents brittle, hard-to-refactor building blocks.  
  **Decision:** Prefer copy-paste, zero-dependency component libraries (Cult UI, Skiper UI) and MCP-enabled motion libraries (Originkit).  
  **Pro:** Reduces NPM dependency bloat  
  **Pro:** Provides ready-to-use high-quality blocks  
  **Pro:** Makes LLM refactoring and adaptation easier  

- ### **[ADR-2.4]** Agent Skills via skills CLI (.agents/skills/)  
  **Modified at:** 2026-10-01T15:54:15  
  **Problem:** A manual root /SKILLS/ clone layout duplicated the skills CLI install path (.agents/skills/), drifted from Cursor/agent conventions, and left skills-lock.json unmanaged.  
  **Decision:** Install agent skills exclusively through the skills CLI into /.agents/skills/{skill-name}/. setup.sh provisions Taste Skill (design-taste-frontend) and Vercel web-design-guidelines this way. The legacy /SKILLS/ directory is removed and git-ignored. Local skills-lock.json records installed skill hashes and is git-ignored.  
  **Pro:** Matches Cursor and skills.sh conventions  
  **Pro:** Single install path for agents and setup.sh  
  **Pro:** Lockfile enables reproducible skill restores  
  **Con:** Skills are local/git-ignored rather than versioned in-repo  

- ### **[ADR-2.5]** BrandBooker Skill Set (On-Demand + Mandatory Review)  
  **Modified at:** 2026-10-01T17:26:08  
  **Problem:** Brand authorship skills must not inflate every UI generation session, but new or updated brand contexts still need a critical audit against a coherent brand-system rubric.  
  **Decision:** Install the BrandBooker skill set from https://github.com/zvorky/brandbooker via setup.sh into .agents/skills/. Agents may load BrandBooker authorship/specialist skills only when the user explicitly requests brandbook or brand-system work. Whenever a brand is added or materially updated under /BRANDS/{brand}/, agents must run brandbook-review against that single brand context. Document usage in docs/tools/brandbooker/SETUP.md and AGENTS.md.  
  **Pro:** Keeps ordinary UI sessions lean  
  **Pro:** Enforces quality gates on brand add/update  
  **Pro:** Centralizes brand OS rules in a dedicated skill set  


## **[ADR-3.0]** Repository Structure & Brand Isolation
**Created at:** 2026-10-01T13:15:12 | **Modified at:** 2026-10-01T16:09:59  

**Description:** Decisions about directory layout, brand IP protection, project segregation, and history tracking.  

- ### **[ADR-3.1]** Strict Brand Context Isolation (/BRANDS/)  
  **Modified at:** 2026-10-01T13:15:30  
  **Problem:** Brand-specific configuration mixed into shared repository paths risks IP leakage and causes LLMs to hallucinate or bleed context across design systems.  
  **Decision:** All brand-specific configuration, DESIGN.md guidelines, brandbooks, and overviews (README.md) must be isolated inside a git-ignored /BRANDS/{brand}/ directory.  
  **Pro:** Protects intellectual property  
  **Pro:** Prevents cross-brand context contamination  
  **Pro:** Gives each brand a clear, isolated source of truth  

- ### **[ADR-3.2]** Three-Tier Decentralized History Tracking  
  **Modified at:** 2026-10-01T15:54:18  
  **Problem:** A single shared history log mixes toolkit architecture evolution with brand and project design history, and unstructured HISTORY.md files bury decisions without navigable indexes.  
  **Decision:** Maintain three-tier git-ignored history: (1) /history/ at root for toolkit-wide structural decisions, (2) /BRANDS/{brand}/history/ for brand design evolution, (3) /BRANDS/{brand}/Projects/{project_name}/history/ for project-specific choices. Every decision is a unique Markdown file with an objective name. Each HISTORY.md is index-only (brief descriptions and links), never the full decision text.  
  **Pro:** Separates toolkit, brand, and project evolution  
  **Pro:** Keeps brand/project history local and private  
  **Pro:** Index-only HISTORY.md stays scannable for agents  

- ### **[ADR-3.3]** Project-Level Segregation  
  **Modified at:** 2026-10-01T13:15:30  
  **Problem:** Multiple applications under the same brand can share source code or project-specific decisions unintentionally, diluting agent focus and coupling unrelated work.  
  **Decision:** Introduce a /Projects/ subdirectory within each brand folder as /BRANDS/{brand}/Projects/{project_name}/ so applications do not share source code or project-specific historical decisions.  
  **Pro:** Isolates project contexts for the LLM  
  **Pro:** Prevents cross-project source and history coupling  
  **Pro:** Supports multiple apps per brand cleanly  

- ### **[ADR-3.4]** Local Vendor Checkouts (/vendor/)  
  **Modified at:** 2026-10-01T15:54:18  
  **Problem:** Third-party skill repos, component references, and apps like screenshot-to-code must be present locally without polluting the shared git history or brand IP paths.  
  **Decision:** Provision third-party checkouts and local npm CLI prefixes under a git-ignored /vendor/ directory via setup.sh (e.g., vendor/awesome-design-md/, vendor/screenshot-to-code/, vendor/npm-global/, vendor/visual-testing/).  
  **Pro:** Keeps large clones out of git  
  **Pro:** Gives setup.sh a stable local layout  
  **Pro:** Separates vendor code from /BRANDS/ IP  

- ### **[ADR-3.5]** Versioned Brand and Project Templates under /BRANDS/  
  **Modified at:** 2026-10-01T16:09:59  
  **Problem:** New brand and project folders under git-ignored /BRANDS/ lacked a shared, documented scaffold, so agents and humans invented inconsistent layouts and missing history/DESIGN files.  
  **Decision:** Keep the versioned Markdown-only scaffolds inside /BRANDS/ itself: /BRANDS/_TEMPLATE/ for brands and /BRANDS/_TEMPLATE/Projects/_TEMPLATE/ for projects. .gitignore ignores /BRANDS/* but un-ignores README.md and _TEMPLATE/** so the scaffold stays in git while real brand IP remains private. Copy the template into /BRANDS/{brand}/ (and project paths), then replace placeholders. Document usage in BRANDS/README.md, README.md, and AGENTS.md. Never treat _TEMPLATE as a live brand context.  
  **Pro:** Template lives in the final BRANDS tree  
  **Pro:** Real brands stay git-ignored  
  **Pro:** Clear file-purpose docs for agents  


## **[ADR-4.0]** Agent Orchestration & Documentation
**Created at:** 2026-10-01T13:15:12 | **Modified at:** 2026-10-01T15:54:22  

**Description:** Decisions about LLM guidance files, language policy, and how agents are constrained at runtime.  

- ### **[ADR-4.1]** Agent Orchestration via AGENTS.md  
  **Modified at:** 2026-10-01T15:54:22  
  **Problem:** Without a mandatory root guide, agents lack a single index of tools/skills and may cross-contaminate brand data across executions.  
  **Decision:** A mandatory AGENTS.md file must be present at the repository root to act as the master guide for the LLM. It indexes available tools/skills, requires reading git-ignored TOOLS.md after setup, enforces loading constraints from /.agents/skills/, and forbids cross-contaminating brand data so the agent only reads one /BRANDS/{brand}/ context per execution.  
  **Pro:** Provides a single orchestration entrypoint  
  **Pro:** Indexes tools and skills for the agent  
  **Pro:** Enforces one-brand-per-execution isolation  

- ### **[ADR-4.2]** English as the Primary Repository Language  
  **Modified at:** 2026-10-01T13:15:38  
  **Problem:** Mixed-language repository structure and global docs reduce consistency for global contributors and weaken LLM comprehension of shared toolkit context.  
  **Decision:** The repository structure, source code, and global documentation (including this ADR) must be exclusively in English. User-specific and brand-specific content (e.g., files inside /BRANDS/ and local history/ folders) are exempt and may use the user's native language.  
  **Pro:** Standardizes the toolkit for global usage  
  **Pro:** Improves LLM comprehension of shared docs and code  
  **Pro:** Keeps brand-local content flexible for native languages  

- ### **[ADR-4.3]** Guideline Fallback Hierarchy  
  **Modified at:** 2026-10-01T15:54:22  
  **Problem:** Agents need a deterministic order when project, brand, and shared style references disagree or when a brand has no DESIGN.md yet.  
  **Decision:** Apply design rules in strict precedence: Project Guidelines > Brand Guidelines > Vercel Guidelines (default fallback). Vercel Guidelines are optional and must not replace a brand design system when one exists. Custom project/brand rules must be declared in the respective DESIGN.md.  
  **Pro:** Prevents conflicting style sources  
  **Pro:** Gives brands without guides a safe fallback  
  **Pro:** Matches AGENTS.md runtime rules  


## **[ADR-5.0]** Tooling, Testing & Provisioning
**Created at:** 2026-10-01T13:15:12 | **Modified at:** 2026-10-01T15:54:33  

**Description:** Decisions about UI testing strategy, forbidden tooling, and environment setup automation.  

- ### **[ADR-5.1 (DEPRECATED)]** ~~Vision-Based Autonomous Testing (Microsoft Isolation)~~  
  ~~**Modified at:** 2026-10-01T15:54:26~~  
  ~~**Problem:** DOM-based UI tests are fragile, and Microsoft-backed tooling such as Playwright introduces unwanted corporate dependency and telemetry concerns.~~  
  ~~**Decision:** Use Midscene.js paired with Puppeteer for headless UI testing, strictly banning Microsoft-backed tools like Playwright. Prefer vision-based phenomenological checks over brittle DOM assertions.~~  
  ~~**Pro:** Ensures corporate independence~~  
  ~~**Pro:** Avoids unwanted telemetry surfaces~~  
  ~~**Pro:** Reduces test fragility via visual/phenomenological validation~~  
  **Deprecated at:** 2026-10-01T15:54:26  
  **Replaced by:** 5.4  

- ### **[ADR-5.2 (DEPRECATED)]** ~~Automated Environment Provisioning~~  
  ~~**Modified at:** 2026-10-01T15:54:25~~  
  ~~**Problem:** Installing third-party UI tools, agents, and testing frameworks manually leads to inconsistent environments across machines.~~  
  ~~**Decision:** Include a single install.sh bash script in the repository root to standardize setup so all third-party UI tools, agents, and testing frameworks install seamlessly in the same environment.~~  
  ~~**Pro:** Standardizes onboarding and setup~~  
  ~~**Pro:** Reduces environment drift~~  
  ~~**Pro:** Installs agents and testing frameworks together~~  
  **Deprecated at:** 2026-10-01T15:54:25  
  **Replaced by:** 5.3  

- ### **[ADR-5.3.0]** Root setup.sh Provisioner  
  **Modified at:** 2026-10-01T15:54:33  
  **Problem:** Installing third-party UI tools, agent skills, and testing frameworks manually leads to inconsistent environments; the earlier install.sh name no longer matches the repository.  
  **Decision:** Use a single root setup.sh bash script as the unified provisioner. It installs prerequisites, agent skills via the skills CLI, vendor checkouts, local npm CLIs under vendor/npm-global/, and screenshot-to-code. Agents must run setup.sh before using external tools and may install manually only if setup.sh fails. Prefer ./setup.sh --yes in non-interactive sessions.  
  **Pro:** Standardizes onboarding  
  **Pro:** Matches README and AGENTS.md  
  **Pro:** Supports non-interactive agent runs  
  - #### **[ADR-5.3.1]** Local npm Prefix and Managed Python for Native Deps  
    **Modified at:** 2026-10-01T15:54:33  
    **Problem:** Global npm installs fail with EACCES on locked system prefixes, and screenshot-to-code native wheels (Pillow/pillow-heif) fail on bleeding-edge system Python (e.g. 3.14).  
    **Decision:** Install npm CLIs (Originkit, shadcn) with npm install -g --prefix vendor/npm-global so binaries live in vendor/npm-global/bin. When system Python is newer than 3.12, setup.sh provisions a managed CPython 3.12 via uv and points the screenshot-to-code Poetry env at it.  
    **Pro:** Avoids root/global npm permission failures  
    **Pro:** Keeps screenshot-to-code installable on Arch/newer Python  
    **Pro:** Bins remain discoverable via TOOLS.md  

- ### **[ADR-5.4]** Optional Vision Testing (Midscene.js + Puppeteer)  
  **Modified at:** 2026-10-01T15:54:26  
  **Problem:** Requiring Midscene.js and Puppeteer for every environment increases install time and model-key burden, while Playwright remains undesirable as the toolkit test stack.  
  **Decision:** Treat Midscene.js paired with Puppeteer as the recommended but optional visual-testing baseline. setup.sh prompts to install them (or honors --with-visual-testing / --skip-visual-testing / INSTALL_VISUAL_TESTING). Toolkit agents must not adopt Microsoft Playwright as the primary test stack; Playwright Chromium used only as an internal dependency of screenshot-to-code preview is allowed and does not replace Midscene+Puppeteer.  
  **Pro:** Keeps core setup lighter  
  **Pro:** Preserves Microsoft-isolation for toolkit tests  
  **Pro:** Documents optional path clearly in README and TOOLS.md  
  **Con:** Visual testing may be absent until explicitly opted in  

- ### **[ADR-5.5]** Incremental Local Tool Inventory (TOOLS.md)  
  **Modified at:** 2026-10-01T15:54:32  
  **Problem:** After provisioning, agents invent install paths and miss whether optional tools were skipped, causing failed commands and inconsistent usage.  
  **Decision:** Have setup.sh generate a git-ignored root TOOLS.md and append a row after every install or skip step (not only at the end). TOOLS.md lists each tool status, exact binaries/commands/paths, and notes. Agents must read TOOLS.md after setup and must not invent paths when the inventory already lists them.  
  **Pro:** Surfaces partial installs immediately  
  **Pro:** Gives agents authoritative local paths  
  **Pro:** Records skipped optional tools explicitly  

- ### **[ADR-5.6]** Per-Tool Setup Guides under docs/tools/  
  **Modified at:** 2026-10-01T15:54:32  
  **Problem:** Curated tools need durable English setup docs without mixing them into brand contexts or burying them beside the ADR root.  
  **Decision:** Maintain a short SETUP.md for each curated tool under docs/tools/{tool-name}/SETUP.md. README and setup.sh point agents there for detailed install/usage after consulting TOOLS.md for local paths.  
  **Pro:** Keeps global docs English and discoverable  
  **Pro:** Separates ADR history from how-to guides  
  **Pro:** One folder per tool  


