<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Livros</title>
</head>
<body>
    <h1>Listagem de Livros</h1>
    <a href="LivroFormularioInserir.php">Adicionar Novo Livro</a><br>

    <table border="1">
        <tr>
            <th>Id</th>
            <th>Titulo</th>
            <th>Autor</th>
            <th>Descrição</th>
            <th>Instituição</th>
            <th>Ano</th>
            <th>Edição</th>
            <th>Páginas</th>
            <th>Tipo</th>
            <th>Formato</th>
            <th>Licença</th>
            <th>Foto</th>
            <th>Ações</th>
        </tr>
        <?php
        include "conexao.php";
        $sql = "select * from livros";
        $resultado = mysqli_query($conexao, $sql);

         while($linha = mysqli_fetch_assoc($resultado)){
            echo "<tr>";
            echo "<td>{$linha['id']}</td>";
            echo "<td>{$linha['titulo']}</td>";
            echo "<td>{$linha['autor']}</td>";
            echo "<td>{$linha['descricao']}</td>";
            echo "<td>{$linha['Instituicao']}</td>";
            echo "<td>{$linha['Ano']}</td>";
            echo "<td>{$linha['Edicao']}</td>";
            echo "<td>{$linha['Paginas']}</td>";
            echo "<td>{$linha['Tipo']}</td>";
            echo "<td>{$linha['Formato']}</td>";
            echo "<td>{$linha['Licenca']}</td>";
            echo "<td>{$linha['foto']}</td>";
            echo "<td>";
            echo "<a href='LivroExcluir.php?idexcluir={$linha['id']}'><img src='imagens/delete.png' width=20></a>";
            echo "<a href='LivroFormularioAlterar.php?idalterar={$linha['id']}'><img src='imagens/lapisAlterar.png' width=20></a>";
            echo "</td>";
            echo "</tr>";
        }
        mysqli_close($conexao);
        ?>
    </table>
</body>
</html>