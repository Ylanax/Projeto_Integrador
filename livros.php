<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Virtual</title>
    <link rel="shortcut icon" href="imagens/icone.png" type="image/icone">
    
    <link rel="stylesheet" href="estilo.css">
</head>
<body id="fundo2">
    <main class="conteudo">
        <header class="cabecalho3">
            <nav class="menu">
                <img class="logo" src="imagens/iconelivro.png" alt="livro" height="60">
                <a class="logo-texto">Biblioteca Virtual</a>
                <a href="paginainicial.php" class="link-menu1 ativo">Página Inicial</a>
                <a href="sistema/login.php" class="link-menu2 ativo">Quem Somos</a>
                <a href="sistema/login.php" class="link-menu3 ativo">Login</a>
            </nav>
        </header>

<?php

$id = $_GET['id'];

include "conexao.php";

$sql = "select * from livros where id = $id";

$resultado = mysqli_query($conexao, $sql);

$titulo = "";
$autor = "";
$Instituicao = "";
$Ano = "";
$Paginas = "";
$Tipo = "";
$Formato = "";
$Licenca = "";
$descricao = "";
$foto = "";

while ($linha = mysqli_fetch_assoc($resultado)) {
    $titulo = $linha["titulo"];
    $autor = $linha["autor"];
    $Instituicao = $linha["Instituicao"];
    $Ano = $linha["Ano"];
    $Paginas = $linha["Paginas"];
    $Tipo = $linha["Tipo"];
    $Formato = $linha["Formato"];
    $Licenca = $linha["Licenca"];
    $descricao = $linha["descricao"];
    $foto = $linha["foto"];
}

mysqli_close($conexao);

?>

<div class="container">
    <div class="row mx-5 mt-5">
        <div class="col-livro">
            <img src="<?= $foto ?>" alt="Capa Livro A Arte Da Guerra" class="livroguerra">
        </div>
    </div>
    <div class="col pt-5">
        <div class="descricaolivro">
            <h1>
                <span class="titulo">Titulo: <?= $titulo ?></span>
            </h1>
            <h1>
                <span class="titulo">Autor: <?= $autor ?></span>
            </h1>
            <h1>
                <span class="titulo">Instituição: <?= $Instituicao ?></span>
            </h1>
            <h1>
                <span class="titulo">Ano: <?= $Ano ?></span>
            </h1>
            <h1>
                <span class="titulo">N° de Páginas: <?= $Paginas ?></span>
            </h1>
            <h1>
                <span class="titulo">Tipo: <?= $Tipo ?></span>
            </h1>
            <h1>
                <span class="titulo">Formato: <?= $Formato ?></span>
            </h1>
            <h1>
                <span class="titulo">Licença: <?= $Licenca ?></span>
            </h1>
            <h1>
                <span class="titulo2">Descrição: <?= $descricao ?></span><br>
            </h1>
        </div>
    </div>
</div>

