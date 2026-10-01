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
**Created at:** 2026-10-01T13:15:11 | **Modified at:** 2026-10-01T13:15:24  

**Description:** Decisions about visual guidelines, aesthetic enforcement, and how UI building blocks are sourced for LLM-friendly generation.  

- ### **[ADR-2.1]** Semantic Design Guidelines (DESIGN.md)  
  **Modified at:** 2026-10-01T13:15:24  
  **Problem:** JSON design tokens and Figma exports require complex parsers and are poorly aligned with how LLMs natively consume design intent.  
  **Decision:** Adopt plain-text DESIGN.md files (based on the VoltAgent/Stitch standard) to define visual themes, color roles, and typography, instead of relying on JSON design tokens or Figma exports. Place a descriptive DESIGN.md in each brand directory.  
  **Pro:** LLMs process Markdown natively  
  **Pro:** Agents instantly understand look and feel without parsers  
  **Pro:** Keeps brand visual intent human-readable and versionable  

- ### **[ADR-2.2]** Anti-Slop Enforcement (SKILL.md)  
  **Modified at:** 2026-10-01T13:15:24  
  **Problem:** Unconstrained LLM generation tends toward generic AI aesthetics (slop), weak layout choices, and noisy motion unless quality preferences are enforced before code is written.  
  **Decision:** Integrate the Taste Skill framework using SKILL.md files to enforce strict aesthetic, layout, and motion rules. Keep these files version-controlled in the root /SKILLS/ directory.  
  **Pro:** Prevents generic AI-generated UI  
  **Pro:** Encodes high-quality design preferences before generation  
  **Pro:** Centralizes reusable aesthetic rules for all agents  

- ### **[ADR-2.3]** Open-Source Component Sourcing  
  **Modified at:** 2026-10-01T13:15:24  
  **Problem:** Heavy NPM dependency trees bloat the toolkit and give agents brittle, hard-to-refactor building blocks.  
  **Decision:** Prefer copy-paste, zero-dependency component libraries (Cult UI, Skiper UI) and MCP-enabled motion libraries (Originkit).  
  **Pro:** Reduces NPM dependency bloat  
  **Pro:** Provides ready-to-use high-quality blocks  
  **Pro:** Makes LLM refactoring and adaptation easier  


## **[ADR-3.0]** Repository Structure & Brand Isolation
**Created at:** 2026-10-01T13:15:12 | **Modified at:** 2026-10-01T13:15:30  

**Description:** Decisions about directory layout, brand IP protection, project segregation, and history tracking.  

- ### **[ADR-3.1]** Strict Brand Context Isolation (/BRANDS/)  
  **Modified at:** 2026-10-01T13:15:30  
  **Problem:** Brand-specific configuration mixed into shared repository paths risks IP leakage and causes LLMs to hallucinate or bleed context across design systems.  
  **Decision:** All brand-specific configuration, DESIGN.md guidelines, brandbooks, and overviews (README.md) must be isolated inside a git-ignored /BRANDS/{brand}/ directory.  
  **Pro:** Protects intellectual property  
  **Pro:** Prevents cross-brand context contamination  
  **Pro:** Gives each brand a clear, isolated source of truth  

- ### **[ADR-3.2]** Granular and Decentralized History Tracking  
  **Modified at:** 2026-10-01T13:15:30  
  **Problem:** A single shared history log mixes toolkit architecture evolution with brand/client design history, making both harder to reason about.  
  **Decision:** Maintain split history logs: a git-ignored /history/HISTORY.md at the root for global architectural decisions, and a local /history/HISTORY.md inside each brand directory.  
  **Pro:** Separates toolkit codebase evolution from brand design evolution  
  **Pro:** Keeps brand history local and private  
  **Pro:** Improves context focus for agents and maintainers  

- ### **[ADR-3.3]** Project-Level Segregation  
  **Modified at:** 2026-10-01T13:15:30  
  **Problem:** Multiple applications under the same brand can share source code or project-specific decisions unintentionally, diluting agent focus and coupling unrelated work.  
  **Decision:** Introduce a /Projects/ subdirectory within each brand folder as /BRANDS/{brand}/Projects/{project_name}/ so applications do not share source code or project-specific historical decisions.  
  **Pro:** Isolates project contexts for the LLM  
  **Pro:** Prevents cross-project source and history coupling  
  **Pro:** Supports multiple apps per brand cleanly  


## **[ADR-4.0]** Agent Orchestration & Documentation
**Created at:** 2026-10-01T13:15:12 | **Modified at:** 2026-10-01T13:15:38  

**Description:** Decisions about LLM guidance files, language policy, and how agents are constrained at runtime.  

- ### **[ADR-4.1]** Agent Orchestration via AGENTS.md  
  **Modified at:** 2026-10-01T13:15:38  
  **Problem:** Without a mandatory root guide, agents lack a single index of tools/skills and may cross-contaminate brand data across executions.  
  **Decision:** A mandatory AGENTS.md file must be present at the repository root to act as the master guide for the LLM. It indexes available tools/skills and explicitly forbids cross-contaminating brand data, ensuring the agent only reads one /BRANDS/{brand}/ context per execution.  
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


## **[ADR-5.0]** Tooling, Testing & Provisioning
**Created at:** 2026-10-01T13:15:12 | **Modified at:** 2026-10-01T13:15:38  

**Description:** Decisions about UI testing strategy, forbidden tooling, and environment setup automation.  

- ### **[ADR-5.1]** Vision-Based Autonomous Testing (Microsoft Isolation)  
  **Modified at:** 2026-10-01T13:15:38  
  **Problem:** DOM-based UI tests are fragile, and Microsoft-backed tooling such as Playwright introduces unwanted corporate dependency and telemetry concerns.  
  **Decision:** Use Midscene.js paired with Puppeteer for headless UI testing, strictly banning Microsoft-backed tools like Playwright. Prefer vision-based phenomenological checks over brittle DOM assertions.  
  **Pro:** Ensures corporate independence  
  **Pro:** Avoids unwanted telemetry surfaces  
  **Pro:** Reduces test fragility via visual/phenomenological validation  

- ### **[ADR-5.2]** Automated Environment Provisioning  
  **Modified at:** 2026-10-01T13:15:38  
  **Problem:** Installing third-party UI tools, agents, and testing frameworks manually leads to inconsistent environments across machines.  
  **Decision:** Include a single install.sh bash script in the repository root to standardize setup so all third-party UI tools, agents, and testing frameworks install seamlessly in the same environment.  
  **Pro:** Standardizes onboarding and setup  
  **Pro:** Reduces environment drift  
  **Pro:** Installs agents and testing frameworks together  


