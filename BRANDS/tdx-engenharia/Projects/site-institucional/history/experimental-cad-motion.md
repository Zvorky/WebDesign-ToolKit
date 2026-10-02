# Experimento de motion CAD no site institucional

**Data:** 2026-10-01  
**Escopo:** branch `cursor/tdx-animacoes-experimentais-daa5` (não o PR do site estático)

**Decisão:** Isolar animações em `motion.css` / `motion.js` para o site TDX já aprovado visualmente. Linguagem: plotter/blueprint (malha que deriva, varredura amber, traço de croqui), não partículas nem gradiente em loop. IntersectionObserver pausa o fundo fora da tela. `prefers-reduced-motion: reduce` desliga tudo o que é decorativo.

**Alternativas rejeitadas:** canvas/rAF contínuo, GSAP, parallax ligado a `scroll`, pulse infinito no WhatsApp, misturar o experimento no PR `cursor/tdx-engenharia-website-daa5`.
