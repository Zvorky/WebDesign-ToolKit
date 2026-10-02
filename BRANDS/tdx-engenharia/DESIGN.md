---
name: TDX Engenharia
description: "Hybrid Industrial: header, hero, contact and footer on carbon-black CAD mesh; body on Swiss light paper. Safety amber is the only CTA accent. Geometry is machined (60° chamfer, metric cotas, 0.75px vectors). No gears, no drop shadows, no multicolor gradients, no advertising noise."
colors:
  safety-amber: "#F59E0B"
  carbon-black: "#121316"
  technical-vermilion: "#DC2626"
  surface-pure: "#FFFFFF"
  surface-subtle: "#F8F9FA"
  border-grid: "#E5E7EB"
  dark-surface: "#1A1C20"
  ink-muted-light: "#4B5563"
  ink-muted-dark: "#C9CDD3"
  feedback-danger: "#DC2626"
  feedback-warning: "#F59E0B"
  feedback-success: "#3F6212"
  feedback-info: "#1D4ED8"
---

# TDX Engenharia — DESIGN.md (Brand)

Este brand define **regras customizadas** que sobrescrevem o fallback Vercel Guidelines.

## 1. Atmosfera

Hybrid Industrial, Color Block Story explícito no brandbook (não é inversão acidental de tema):

- Header / Hero / Contato / Footer: `color-carbon-black` com malha blueprint a 4%
- Corpo (Sobre, Serviços, Conduta): `color-surface-pure` e `color-surface-subtle`
- Sem modo auto `prefers-color-scheme` no site: a mistura light/dark é a identidade

## 2. Cores (tokens do brandbook)

Proporção ~80% neutros / 15% carbon estrutural / ≤5% amber.

| Token | Hex | Uso |
| :--- | :--- | :--- |
| `color-safety-amber` | `#F59E0B` | CTAs, cotas, acentos. Nunca texto de parágrafo. |
| `color-carbon-black` | `#121316` | Texto no light; fundo no dark. |
| `color-technical-vermilion` | `#DC2626` | Risco crítico / não-conformidade, parcimônia extrema. |
| `color-surface-pure` | `#FFFFFF` | Fundo de leitura. |
| `color-surface-subtle` | `#F8F9FA` | Faixas e cartões. |
| `color-border-grid` | `#E5E7EB` | Divisores e grades. |
| `color-dark-surface` | `#1A1C20` | Painéis no dark. |

Contraste:

- Carbon sobre branco: AAA
- Texto sobre amber: **obrigatoriamente** carbon (`#121316`), nunca branco
- Vermilion não é cor de botão primário

## 3. Tipografia

- **UI / Display:** Inter (Helvetica Now / Univers só em ambientes proprietários). O brandbook nomeia Inter; não substituir por Geist ou serif.
- **Dados:** JetBrains Mono (ART, normas, cotas, mm, bar, N·m)
- **Laudos impressos:** Source Serif Pro. **Proibido no site.**

Escala digital:

- H1: Inter SemiBold 44px / 1.15
- H2: Inter Medium 28px / 1.25
- H3: Inter Medium 20px / 1.3
- Corpo: Inter Regular 16px / ≥1.5
- Botões: Inter SemiBold 15px, tracking +0.02em

Itálico em display: line-height mínimo 1.15 e reserva inferior para descendentes.

## 4. Logotipo

- Assinatura: TDX ENGENHARIA, uma só cor por aplicação (positivo carbon, negativo branco). Amber no X **é proibido** (quebra a leitura da sigla).
- Clear space: **1X**, X = altura da haste do T (mais restrito que o default BrandBooker X/2).
- Mínimo digital: 120px com endosso; 40px monograma.
- Proibido: rotação não-ortogonal, drop shadow, gradiente, fundo fotográfico abaixo de 4.5:1.

## 5. Componentes

- Raio: 10px em botões e painéis; 8px em inputs. Sem pílulas no layout estrutural. FAB WhatsApp é a única exceção (pílula), porque é canal operacional persistente.
- Primário: amber, texto carbon.
- Secundário (dark): outline clara.
- Inputs: label acima, borda `#E5E7EB` no light / `#3A3E45` no dark, foco amber.
- Nav: 68px, uma linha, dark, malha 4%.

## 6. Layout e espaçamento

Escala modular: 4 / 8 / 16 / 24 / 32 / 48 / 64 / 96. Valores fora da escala são proibidos.

- Container 1200px
- Seções: 96px desktop / 56px mobile
- Detalhes vetoriais: cotas métricas, chanfro 60°, traço 0.75px
- Sem sombras projetadas, sem gradientes multicolor, sem engrenagens

## 7. Motion

`MOTION_INTENSITY: 3`. Transições 0.25s em `transform` e `opacity` apenas. Reveal via IntersectionObserver. `prefers-reduced-motion` desliga motion.

## 8. Voz

Claro, confiante, honesto, calmo, preciso. Proibido: combo de laudos, slogans genéricos, em-dash, “elevar/revolucionar/next-gen”.

## 9. HIG (site)

Clarity / Deference / Depth: a malha e as cotas são conteúdo técnico, não ornamento. Controles fora de safe-area. Foco visível (`:focus-visible`). Skip link. Formulários com label clicável, `autocomplete` e erros inline.

## 10. Packaging

N/A justificado para e-commerce/unboxing. A marca não vende SKU de prateleira. Vestimenta de campo (polo grafite, capacete branco, veículo discreto) segue o brandbook cap. 8.

## 11. Proibições

Sem ruído publicitário, sem 3 cards iguais genéricos, sem eyebrow em todas as seções, sem Inter via Google Fonts em produção (self-host), sem inventar telefone.

## 12. Precedência

Project `DESIGN.md` > este arquivo > Vercel Guidelines.
