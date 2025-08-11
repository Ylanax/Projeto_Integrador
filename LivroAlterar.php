<?php 

$id = $_POST['id'];
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

include "conexao.php";
$sql = "update livros set titulo = '$titulo', autor='$autor', descricao='$descricao', Instituicao='$Instituicao', Ano='$Ano', Edicao='$Edicao', Paginas='$Paginas', Tipo='$Tipo', Formato='$Formato', Licenca='$Licenca', foto='$foto' where id = $id";
$resultado = mysqli_query($conexao, $sql);

mysqli_close($conexao);

header("Location:LivroListar.php");
?>