# site-institucional — DESIGN.md (Project)

Este projeto define **regras customizadas** que sobrescrevem o brand `DESIGN.md`.

## Dials

- `DESIGN_VARIANCE: 5` (split assimétrico, bento 5 células, não caos)
- `MOTION_INTENSITY: 3` (brand)
- `VISUAL_DENSITY: 4`

## Deltas vs brand

1. Página única PHP com includes (`header.php`, `footer.php`). Âncoras: `#inicio`, `#sobre`, `#servicos`, `#conduta`, `#contato`.
2. Malha blueprint e cotas só em superfícies dark (header, hero, contato, footer). Corpo light limpo para normas.
3. Hero: split texto + desenho técnico. Badges NR ficam no painel, não sob o CTA.
4. Serviços em bento de 5 células (Laudos em destaque + quatro frentes). Proibido 3 cards iguais.
5. Seção Conduta (política de recusa) em lista numerada mono, layout próprio.
6. Formulário placeholder: `disabled` no submit, `preventDefault`, aviso visível. Sem PHP mail, sem sucesso falso.
7. WhatsApp flutuante visível; sem número inventado. O botão leva a `#contato` até o número oficial existir. Mensagem pré-formatada documentada no markup.
8. CTA único de conversão: rótulo **Solicitar vistoria** (nav, hero, form). WhatsApp é canal operacional, não o mesmo intent.
9. Fontes self-hosted em `assets/fonts/`.
10. Eyebrows: no máximo um no site (Serviços). Hero e demais seções sem micro-label uppercase.

## Color Block Story

Única inversão planejada: dark → light (Sobre/Serviços/Conduta) → dark (Contato/Footer). Não inverter seções individuais além disso.
