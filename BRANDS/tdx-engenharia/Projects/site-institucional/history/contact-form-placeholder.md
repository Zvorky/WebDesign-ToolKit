# Formulário de contato placeholder

**Data:** 2026-10-01  
**Escopo:** seção Contato

**Decisão:** UI completa (Nome, Empresa/Cidade, Telefone, demanda) com submit `disabled`, `novalidate`, `preventDefault` e faixa `role="status"` deixando claro que o envio ainda não está ligado. Campos editáveis para inspeção visual. Sem `mail()`, sem API, sem toast de “mensagem enviada”.

**Alternativas rejeitadas:** sucesso local que parece envio real; número de WhatsApp fictício no `wa.me`.
