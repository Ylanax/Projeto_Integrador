<?php
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$descricao = $_POST['descricao'];
$Instituicao = $_POST['Instituicao'];
$Ano = $_POST['Ano'];
$Edicao = $_POST['Edicao'];
$Paginas = $_POST['Paginas'];
$Tipo = $_POST['Tipo'];
$Formato = $_POST['Formato'];
$Licenca = $_POST['Licenca'];
$foto = $_POST['foto'];

$sql = "insert into livros(titulo, autor, descricao, Instituicao, Ano, Edicao, Paginas, Tipo, Formato, Licenca, foto) values ('$titulo', '$autor', '$descricao', '$Instituicao', '$Ano', '$Edicao', '$Paginas', '$Tipo', '$Formato', '$Licenca', '$foto')";

include 'conexao.php';

$resultado = mysqli_query($conexao, $sql);

mysqli_close($conexao);

header('Location:LivroListar.php');

?>