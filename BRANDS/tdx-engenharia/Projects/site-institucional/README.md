# site-institucional

Site de marketing da TDX Engenharia: página única em PHP com âncoras (início, sobre, serviços, conduta, contato).

**Público:** gestores de planta, manutenção e diretoria no Norte do RS.  
**Jornada:** entender o método (vistoria presencial) → ver o portfólio normativo → solicitar vistoria.

## Stack

PHP (includes), HTML, CSS e JS. Sem React, sem Tailwind, sem build step.

## Como rodar

A partir desta pasta:

```bash
frankenphp php-server --listen 127.0.0.1:8088
```

Ou, com o PHP CLI do sistema, se disponível:

```bash
php -S 127.0.0.1:8088
```

Abrir `http://127.0.0.1:8088/`.

## DESIGN.md

Este projeto tem `DESIGN.md` próprio (deltas de layout, formulário placeholder, WhatsApp). Precedência: este arquivo > brand DESIGN.md > Vercel.
