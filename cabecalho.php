<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Virtual</title>
    <link rel="shortcut icon" href="imagens/icone.png" type="image/icone">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
</head>

<?php session_start();?>

<body id="inicial">
    <main class="conteudo">
        <header class="cabecalho2">
            <div class="cabecalho-titulo">
            <img src="imagens/logolivro.png" width="30">
            <h2 class="logo-texto01">Biblioteca Virtual</h2>
            </div>
            <?php if (isset($_SESSION['usuario'])): ?>
            <span class="nome-usuario">Olá, <?php echo $_SESSION['usuario']; ?></span>
            <form action="sistema/logout.php" method="post" style="display:inline;">
                <button class="botao-sair" type="submit">Sair</button>
            </form>
            <?php else: ?>
                <a href="sistema/login.php" class="login-page">Login</a>
                <?php endif; ?>
            </div> 
        </header>