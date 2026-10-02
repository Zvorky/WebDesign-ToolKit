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
      <img src="<?php echo htmlspecialchars($asset("assets/img/logo-tdx.svg")); ?>" width="220" height="36" alt="">
      <span class="visually-hidden">TDX Engenharia</span>
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
