# Brandbook review: TDX Engenharia v1.0

## Verdict
Maturity: Emerging — o PDF oficial é doutrinário e tokenizável em cor/tipo/logo, mas HIG digital, catálogo visual de misuse e DAM executável estavam só em prosa. Remediação aplicada em `DESIGN.md` e `brandbook.md` para o site institucional.

## Scope assumed
Digital (site) + vestimenta de campo. Packaging de unboxing: N/A justificado (sem SKU de prateleira). Scope Gates do orchestrator: Packaging marcado N/A; HIG obrigatório porque há produto digital.

## Skills loaded
- `.agents/skills/brandbook-orchestrator/SKILL.md`
- `.agents/skills/design-philosophy/SKILL.md`
- `.agents/skills/brand-architecture/SKILL.md`
- `.agents/skills/visual-identity/SKILL.md`
- `.agents/skills/color-typography/SKILL.md`
- `.agents/skills/human-interface/SKILL.md`
- `.agents/skills/packaging-experience/SKILL.md`
- `.agents/skills/brand-governance/SKILL.md`
- `.agents/skills/brandbook-review/SKILL.md`

## Manifesto gate
| Directive | Pass/Fail | Notes |
|-----------|-----------|-------|
| Suppression | Pass | Política de recusa e cap. 1 subtraem ornamento |
| Enforcement | Partial | Hex no PDF; tokens agora no CSS do site |
| Silent ergonomics | Partial | Site spec existia; foco/skip/reduced-motion foram fechados no DESIGN.md |
| Tangible worth | Pass | Uniforme, EPI e veículo especificados; unboxing N/A |

## Completeness matrix
| Domain | Specialist skill | Score | Notes |
|--------|------------------|-------|-------|
| Philosophy | design-philosophy | Pass | Manifesto + recusa em linguagem imperativa |
| Architecture | brand-architecture | Pass | Branded House + taxonomia TDX + Nome |
| Visual identity | visual-identity | Partial | Clear space 1X e mínimas ok; misuse em lista, sem pares visuais no PDF |
| Color & typography | color-typography | Pass | Hierarquia 80/15/5, WCAG, papéis Display/Text/Mono |
| Human interface | human-interface | Partial | Cap. 6 descreve About/Contact; HIG tokenizado no DESIGN.md |
| Packaging | packaging-experience | N/A (justified) | Sem caixa de produto |
| Governance | brand-governance | Partial | Nomenclatura de arquivos sim; DAM/permissões ainda locais |

## Findings
### P0 — Blockers
Nenhum para o site institucional após copiar o PDF para `assets/` e fechar tokens no DESIGN.md.

### P1 — High
- **[P1-HIG]** Cap. 6 sem skip-link, focus-visible, reduced-motion → Fix via `human-interface` no DESIGN.md e no CSS do projeto.
- **[P1-LOGO-COLOR]** Separar X em amber violaria o próprio catálogo de misuse → logo monócromo por aplicação.
- **[P1-PHONE]** Brandbook cita WhatsApp profissional sem número → site não inventa telefone.

### P2 — Medium
- **[P2-MISUSE]** Catálogo de logo é textual, sem pares correto/incorreto desenhados → `visual-identity`.
- **[P2-DAM]** Pastas `/brand/vectors/` ainda não existem como DAM real → `brand-governance`.

### P3 — Low
- **[P3-CLEARSPACE]** Brandbook usa 1X; BrandBooker default é X/2. Mantido 1X por ser mais restrito.

## What already works
Doutrina mensurável, naming sem fantasia, paleta com jobs, escala Inter, malha/cotas no lugar de stock, e-mail institucional real.

## Remediation backlog
1. Tokens CSS no projeto → `color-typography` (feito)
2. HIG no DESIGN.md e CSS → `human-interface` (feito)
3. Logo cor única → `visual-identity` (feito no site)
4. Pares visuais de misuse e pasta DAM → futuro, fora do MVP do site

## Rewrite targets
Nenhum capítulo do PDF foi reescrito. Complementos ficam em `brandbook.md` §§9-10 e `DESIGN.md`.
