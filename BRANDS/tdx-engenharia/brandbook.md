# Brandbook TDX Engenharia (texto operacional)

**Versão:** 1.0 Oficial  
**PDF canônico:** `assets/brandbook-oficial.pdf`  
**Responsável:** Eng. Mecânico Thiago Duarte  
**Framework:** Brandbooker Protocol

Este arquivo é o companheiro em Markdown do PDF. DESIGN.md governa tokens de UI. Aqui ficam doutrina, naming, logo, voz e restrições de mensagem.

## 1. Doutrina

Na engenharia diagnóstica não há margem para ornamento. O laudo é responsabilidade civil, criminal e operacional. A TDX subtrai ruído até restar a verdade mecânica e normativa. Não vende assinaturas; entrega conformidade real.

### Pilares

1. **Rigor com praticidade** — NR-12, NR-13, NR-11, PMOC com severidade, e instrução clara de correção para manutenção.
2. **Confiança olho no olho** — marca TDX + compromisso pessoal intransferível de Thiago Duarte em campo.
3. **Clareza cirúrgica** — documento que o fiscal respeita e o diretor entende na primeira página.

### Política de recusa

1. Anti-caneteiro: nunca ART ou laudo sem vistoria presencial e ensaios físicos comprovados.
2. Sem complacência de risco grave: inconformidade com risco iminente de acidente fatal não se negocia.
3. Sem ruído publicitário: sem sensacionalismo, sem “combo de laudos”, sem marketing genérico.

## 2. Arquitetura e naming

Modelo: **Branded House** com endosso pessoal.

- Assinatura institucional: TDX ENGENHARIA
- Endosso obrigatório: Por Eng. Mecânico Thiago Duarte - CREA-RS
- T e D: Thiago Duarte. X: vetor técnico (precisão, ponto focal, eixos).

Serviços (taxonomia funcional, nomes fantasiosos proibidos):

- TDX Laudos Técnicos (NR-12, NR-13, NR-11, NR-35)
- TDX Inspeções Mecânicas (plantas, silos, vasos de pressão)
- TDX Engenharia de Frotas (veículos, implementos, basculantes)
- TDX PMOC (climatização e qualidade do ar)
- TDX Perícias (assistência técnica judicial mecânica)

Lockups: Primary (TDX ENGENHARIA + endosso), Secondary (monograma TDX), Product (`TDX` + nome funcional). Divisões não criam marca própria.

## 3. Identidade visual

Símbolo: neo-grotesca geométrica + chanfro 60°/30°. O X é corte técnico, não clipart. Engrenagens genéricas são proibidas.

Clear space: 1X (haste do T). Mínimos: 120px / 30mm com endosso; 40px / 12mm monograma.

Proibido: rotação não-ortogonal; drop shadow; gradiente; separar TD e X em cores desbalanceadas; logo sobre foto com contraste < 4.5:1.

## 4. Cor e tipo

Ver `DESIGN.md`. Amber = sinalização industrial e CTA. Carbon = aço e rigor. Vermilion = alerta de laudo, não decoração.

## 5. Website (estrutura de informação)

1. Hero: “Engenharia Mecânica Diagnóstica & Laudos Técnicos de Conformidade”. Endosso CREA-RS. Badges NR-12 / NR-13 / NR-11 / PMOC / ART Eletrônica no painel técnico (não como faixa de “trusted by”). Cobertura Lagoa Vermelha, Passo Fundo, Norte do RS.
2. Sobre: perfil de chão de fábrica, diagnóstico, rigor pericial. Visual vetorial geométrico, sem banco de imagem genérico.
3. Conversão híbrida:
   - WhatsApp persistente, mensagem: “Olá Eng. Thiago, preciso de uma vistoria/laudo técnico para minha empresa.” Número oficial ainda não publicado no brandbook; o site não inventa telefone.
   - Formulário: Nome, Empresa/Cidade, Telefone, demanda do equipamento.
4. E-mail visível: contato@tdxengenharia.com.br

Elementos vetoriais no lugar de stock: cotas (ex. 100 mm), malha 4%, porcas sextavadas e chanfros 60° em traço 0.75px.

## 6. Laudo como produto

Capa padronizada, sumário semafórico, fotos com setas vermilion, QR da ART CREA-RS, assinatura ICP-Brasil. Fora do escopo do site institucional.

## 7. Campo

Polo chumbo/grafite, logo amber no peito esquerdo. Capacete branco classe B. Veículo com identificação discreta.

## 8. Governança

Arquivos:

- `TDX-LAU-[ANO]-[CLIENTE]-[EQUIPAMENTO]-R00.pdf`
- `TDX-ART-[NUMERO_ART]-[CLIENTE].pdf`
- `TDX-PROP-[ANO]-[NUMERO_SEQUENCIAL]-[CLIENTE].pdf`

Pacotes: `/brand/vectors/`, `/brand/templates/`, `/brand/tokens/`.

Tokens CSS do site vivem em `Projects/site-institucional/assets/css/style.css` (`:root`). Alteração de cor começa neste brandbook/DESIGN.md e só então no CSS.

## 9. HIG (complemento digital)

O PDF cobre o site About/Contact mas não tokeniza foco, skip-link nem reduced-motion. O site institucional aplica o capítulo HIG de `DESIGN.md`. Motion só para estado, gesto ou confirmação.

## 10. Packaging

N/A para caixa de produto. Escopo físico = uniforme, EPI e veículo (cap. 7).
