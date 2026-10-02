<?php require __DIR__ . "/includes/header.php"; ?>
<main id="conteudo">
  <section class="hero" id="inicio" aria-labelledby="hero-title">
    <div class="container hero-grid">
      <div class="hero-copy">
        <h1 id="hero-title">Engenharia mecânica diagnóstica e laudos de conformidade.</h1>
        <p class="sub">Vistoria presencial, ensaios comprovados e documentos que o fiscal respeita.</p>
        <div class="hero-ctas">
          <a class="btn btn-primary" href="#contato">Solicitar vistoria</a>
          <a class="btn btn-ghost" href="#servicos">Ver serviços</a>
        </div>
      </div>
      <aside class="hero-panel" aria-label="Resumo técnico">
        <img class="hero-drawing" src="<?php echo htmlspecialchars($asset("assets/img/hero-drawing.svg")); ?>" width="520" height="520" alt="Desenho técnico de vaso de pressão com cotas em milímetros e chanfro de 60 graus.">
        <dl>
          <dt>Resp.</dt>
          <dd>Eng. Mecânico Thiago Duarte, CREA-RS</dd>
          <dt>Método</dt>
          <dd>Vistoria presencial com ensaios físicos comprovados</dd>
          <dt>Entrega</dt>
          <dd>Laudo com ART, fotos anotadas e plano de correção</dd>
          <dt>Normas</dt>
          <dd>
            <ul class="badges">
              <li>NR-12</li>
              <li>NR-13</li>
              <li>NR-11</li>
              <li>PMOC</li>
              <li>ART eletrônica</li>
            </ul>
          </dd>
        </dl>
        <p class="coverage">Atuação em Lagoa Vermelha, Passo Fundo e Região Norte do RS.</p>
      </aside>
    </div>
  </section>

  <section class="section" id="sobre" aria-labelledby="sobre-title">
    <div class="container">
      <h2 id="sobre-title">Sobre o engenheiro</h2>
      <p class="lead">Chão de fábrica, diagnóstico e rigor pericial. A TDX carrega o peso de uma marca institucional com o compromisso pessoal de Thiago Duarte em cada vistoria.</p>
      <figure class="about-figure">
        <img src="<?php echo htmlspecialchars($asset("assets/img/about-drawing.svg")); ?>" width="640" height="280" alt="Croqui ortogonal de galpão industrial e figura geométrica do engenheiro em campo, com cotas.">
      </figure>
      <ul class="pillars">
        <li>
          <strong>Rigor com praticidade</strong>
          <p>NR-12, NR-13, NR-11 e PMOC aplicados à risca, com instrução clara do que a manutenção deve corrigir.</p>
        </li>
        <li>
          <strong>Confiança olho no olho</strong>
          <p>Marca TDX e responsabilidade civil intransferível do engenheiro presente na planta.</p>
        </li>
        <li>
          <strong>Clareza cirúrgica</strong>
          <p>Documento que o fiscal respeita e o diretor compreende na primeira página.</p>
        </li>
      </ul>
    </div>
  </section>

  <section class="section section-alt" id="servicos" aria-labelledby="servicos-title">
    <div class="container">
      <p class="eyebrow">Portfólio normativo</p>
      <h2 id="servicos-title">Cinco frentes, nomes funcionais</h2>
      <p class="lead">A marca proíbe nomes fantasiosos. O portfólio segue a taxonomia do brandbook.</p>
      <div class="services">
        <article class="service service-featured">
          <p class="mono">TDX Laudos Técnicos</p>
          <h3>Laudos NR-12, NR-13, NR-11 e NR-35</h3>
          <p>Máquinas, vasos de pressão e trabalho em altura. ART eletrônica e evidência rastreável, nunca laudo de gabinete.</p>
        </article>
        <article class="service">
          <p class="mono">TDX Inspeções Mecânicas</p>
          <h3>Plantas, silos e vasos</h3>
          <p>Inspeção em chão de fábrica com ensaio físico comprovado.</p>
        </article>
        <article class="service service-mesh">
          <p class="mono">TDX Engenharia de Frotas</p>
          <h3>Veículos, implementos e basculantes</h3>
          <p>Laudo veicular para operação pesada no Norte do RS.</p>
        </article>
        <article class="service">
          <p class="mono">TDX PMOC</p>
          <h3>Climatização e ar interno</h3>
          <p>Plano de manutenção conforme a legislação vigente.</p>
        </article>
        <article class="service">
          <p class="mono">TDX Perícias</p>
          <h3>Assistência técnica judicial</h3>
          <p>Parecer mecânico com densidade pericial e rastreabilidade.</p>
        </article>
      </div>
    </div>
  </section>

  <section class="section" id="conduta" aria-labelledby="conduta-title">
    <div class="container">
      <h2 id="conduta-title">O que a TDX recusa</h2>
      <p class="lead">Três proibições éticas. Sem elas o laudo não vale o papel.</p>
      <ol class="refusals">
        <li>
          <span class="mono">Anti-caneteiro</span>
          <p>A TDX nunca emite ART ou laudo sem vistoria técnica presencial e ensaios físicos comprovados.</p>
        </li>
        <li>
          <span class="mono">Risco grave</span>
          <p>Inconformidade com risco iminente de acidente fatal não é negociada nem mascarada.</p>
        </li>
        <li>
          <span class="mono">Sem ruído</span>
          <p>A marca não usa sensacionalismo, promoção de combo de laudos ou linguagem de marketing genérico.</p>
        </li>
      </ol>
    </div>
  </section>

  <section class="section contact" id="contato" aria-labelledby="contato-title">
    <div class="container contact-grid">
      <div>
        <h2 id="contato-title">Solicitar vistoria</h2>
        <p class="lead">Canal formal: descreva o equipamento e a cidade. O envio eletrônico ainda não está ligado. E-mail institucional já recebe demanda.</p>
        <p>
          <a class="mail" href="mailto:contato@tdxengenharia.com.br">contato@tdxengenharia.com.br</a>
        </p>
        <p class="wa-pending">WhatsApp profissional do Eng. Thiago Duarte será publicado com o número oficial. A mensagem pronta permanece: “Olá Eng. Thiago, preciso de uma vistoria/laudo técnico para minha empresa.”</p>
      </div>
      <form
        id="contact-form"
        class="contact-form"
        action="#contato"
        method="post"
        novalidate
        data-placeholder="true"
        aria-label="Formulário de contato em demonstração"
      >
        <p class="form-banner" role="status">
          Formulário em demonstração. O envio será conectado depois. Nenhum dado sai deste navegador.
        </p>
        <label for="nome">Nome</label>
        <input id="nome" name="nome" type="text" autocomplete="name" placeholder="Ana Souza…" maxlength="120">
        <p class="field-hint">Nome de quem solicita a vistoria.</p>

        <label for="empresa">Empresa / Cidade</label>
        <input id="empresa" name="empresa" type="text" autocomplete="organization" placeholder="Indústria em Lagoa Vermelha…">
        <p class="field-hint">Razão social ou nome fantasia e município.</p>

        <label for="telefone">Telefone</label>
        <input id="telefone" name="telefone" type="tel" inputmode="tel" autocomplete="tel" spellcheck="false" placeholder="(54) 9 0000-0000…">
        <p class="field-hint">DDD da região de atendimento, quando já existir.</p>

        <label for="mensagem">Equipamento e demanda</label>
        <textarea id="mensagem" name="mensagem" rows="5" placeholder="Compressor na planta, preciso de laudo NR-13…"></textarea>
        <p class="field-hint">Equipamento, norma e prazo desejado.</p>

        <button class="btn btn-primary" type="submit" disabled aria-disabled="true">Solicitar vistoria</button>
        <p class="form-note">Botão inativo de propósito. Quando o backend existir, o mesmo rótulo segue valendo.</p>
      </form>
    </div>
  </section>
</main>
<?php require __DIR__ . "/includes/footer.php"; ?>
