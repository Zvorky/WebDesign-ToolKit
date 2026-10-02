<?php
$base = rtrim(dirname($_SERVER["SCRIPT_NAME"] ?? ""), "/");
if ($base === "/" || $base === "\\") {
    $base = "";
}
$asset = function ($path) use ($base) {
    return $base . "/" . ltrim($path, "/");
};
$waMsg = "Olá Eng. Thiago, preciso de uma vistoria/laudo técnico para minha empresa.";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#121316">
  <title>TDX Engenharia | Laudos técnicos e engenharia mecânica diagnóstica</title>
  <meta name="description" content="TDX Engenharia. Laudos NR-12, NR-13, NR-11, PMOC e perícias. Eng. Thiago Duarte, CREA-RS. Lagoa Vermelha, Passo Fundo e Região Norte do RS.">
  <link rel="icon" href="<?php echo htmlspecialchars($asset("assets/img/favicon.svg")); ?>" type="image/svg+xml">
  <link rel="preload" href="<?php echo htmlspecialchars($asset("assets/fonts/inter-latin-variable.woff2")); ?>" as="font" type="font/woff2" crossorigin>
  <link rel="stylesheet" href="<?php echo htmlspecialchars($asset("assets/css/style.css")); ?>">
</head>
<body>
<a class="skip-link" href="#conteudo">Ir para o conteúdo</a>
<header class="site-header">
  <div class="container header-inner">
    <a class="logo" href="#inicio" aria-label="TDX Engenharia, início">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 220 36" width="196" height="32" fill="none" aria-hidden="true" focusable="false">
        <g fill="#F4F5F6">
          <rect x="0" y="4" width="22" height="3.2"/>
          <rect x="9.4" y="4" width="3.2" height="28"/>
          <path d="M34 4h12.5c7.4 0 12.2 4.6 12.2 14S53.9 32 46.5 32H34V4zm3.4 3.2v21.6h8.8c5.3 0 8.6-3.2 8.6-10.8S51.5 7.2 46.2 7.2H37.4z"/>
          <path d="M72.2 4.2 84.6 18 72.1 32h4.6l10.3-11.6h.4L97.8 32h4.6L90 18.1 102.6 4.2h-4.6L87.5 16h-.4L76.8 4.2h-4.6z"/>
        </g>
        <text x="112" y="22" fill="#F4F5F6" font-family="Inter, Helvetica, sans-serif" font-size="9" font-weight="600" letter-spacing="3.2">ENGENHARIA</text>
      </svg>
    </a>
    <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="nav" aria-label="Abrir menu">
      <span class="nav-toggle-bars" aria-hidden="true"></span>
    </button>
    <nav class="nav" id="nav" aria-label="Navegação principal">
      <a href="#inicio">Início</a>
      <a href="#sobre">Sobre</a>
      <a href="#servicos">Serviços</a>
      <a href="#contato">Contato</a>
    </nav>
    <a class="btn btn-primary header-cta" href="#contato">Solicitar vistoria</a>
  </div>
</header>
