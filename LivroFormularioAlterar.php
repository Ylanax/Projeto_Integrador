<?php
#formulario de alterar
$id = $_GET['idalterar'];
$titulo = "";
$autor = "";
$descricao = "";
$Instituicao = "";
$Ano = "";
$Edicao = "";
$Paginas = "";
$Tipo = "";
$Formato = "";
$Licenca = "";
$foto = "";

include 'conexao.php';
$sql = "select * from livros where id = $id";
$resultado = mysqli_query($conexao, $sql);

while ($linha = mysqli_fetch_assoc($resultado)) {
    $titulo = $linha['titulo'];
    $autor = $linha['autor'];
    $descricao = $linha['descricao'];
    $Instituicao = $linha['Instituicao'];
    $Ano = $linha['Ano'];
    $Edicao = $linha['Edicao'];
    $Paginas = $linha['Paginas'];
    $Tipo = $linha['Tipo'];
    $Formato = $linha['Formato'];
    $Licenca = $linha['Licenca'];
    $foto = $linha['foto'];
}
?>

<form method="post" action="LivroAlterar.php">
    <input type="hidden" name="id" value="<?= $id ?>">
    Título:<input type="text" name="titulo" value="<?= $titulo ?>"><br>
    Autor:<input type="text" name="autor" value="<?= $autor ?>"><br>
    Descrição:<input type="text" name="descricao" value="<?= $descricao ?>"><br>
    Instituição:<input type="text" name="Instituicao" value="<?= $Instituicao ?>"><br>
    Ano:<input type="text" name="Ano" value="<?= $Ano ?>"><br>
    Edição:<input type="text" name="Edicao" value="<?= $Edicao ?>"><br>
    Páginas:<input type="text" name="Paginas" value="<?= $Paginas ?>"><br>
    Tipo:<input type="text" name="Tipo" value="<?= $Tipo ?>"><br>
    Formato:<input type="text" name="Formato" value="<?= $Formato ?>"><br>
    Licença:<input type="text" name="Licenca" value="<?= $Licenca ?>"><br>
    Foto:<input type="text" name="foto" value="<?= $foto ?>"><br>
    <button type="submit">Salvar Alterações</button>
</form>