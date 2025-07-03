<?php

$id = $_GET['id'];

include "conexao.php";

$sql = "select * from livros where id = $id";

$resultado = mysqli_query($conexao, $sql);

$titulo = "";
$autor = "";
$Instituicao = "";
$ano = "";
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
    $ano = $linha["ano"];
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
        <div class="col">
            <img src="<?= $foto ?>" alt="Capa Livro A Arte Da Guerra" class="livroguerra">
        </div>
    </div>
    <div class="col pt-5">
        <div class="descricaolivro">
            <h1>
                <span class="titulo">Titulo:<?= $titulo ?></span>
            </h1>
            <h1>
                <span class="titulo">Autor:<?= $autor ?></span>
            </h1>
            <h1>
                <span class="titulo">Instituição:<?= $Instituicao ?></span>
            </h1>
            <h1>
                <span class="titulo">Ano:<?= $ano ?></span>
            </h1>
            <h1>
                <span class="titulo">N° de Páginas:<?= $Paginas ?></span>
            </h1>
            <h1>
                <span class="titulo">Tipo:<?= $Tipo ?></span>
            </h1>
            <h1>
                <span class="titulo">Formato:<?= $Formato ?></span>
            </h1>
            <h1>
                <span class="titulo">Licença:<?= $Licenca ?></span>
            </h1>
            <h1>
                <span class="titulo2">Descrição<?= $descricao ?></span><br>
            </h1>
        </div>
    </div>
</div>