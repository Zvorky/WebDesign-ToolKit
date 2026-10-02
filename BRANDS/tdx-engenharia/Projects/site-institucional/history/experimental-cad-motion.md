# Experimento de motion CAD no site institucional

**Data:** 2026-10-01  
**Escopo:** branch `cursor/tdx-animacoes-experimentais-daa5` (não o PR do site estático)

**Decisão:** Isolar animações em `motion.css` / `motion.js` para o site TDX já aprovado visualmente. Linguagem: plotter/blueprint (malha que deriva, varredura amber, traço de croqui), não partículas nem gradiente em loop. IntersectionObserver pausa o fundo fora da tela. `prefers-reduced-motion: reduce` desliga tudo o que é decorativo. H1, subtítulo, CTAs e painel do hero permanecem opacos no primeiro paint — só o croqui desenha; fade de copy escondia a mensagem aprovada. Reveals abaixo da dobra usam `is-pending` só depois do observer, para âncoras e primeiro paint não ficarem em branco.

**Alternativas rejeitadas:** canvas/rAF contínuo, GSAP, parallax ligado a `scroll`, pulse infinito no WhatsApp, fade do H1/CTAs no hero, stagger de cards em opacity 0 (escondia células no primeiro paint), misturar o experimento no PR `cursor/tdx-engenharia-website-daa5`.
