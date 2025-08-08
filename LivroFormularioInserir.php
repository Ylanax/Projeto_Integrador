<h1>Cadastrar Novo Livro</h1>
<form name="cadastro" method="post" action="LivroSalvar.php">
    Título: <input type="text" name="titulo" required maxlength="200"><br>
    Autor: <input type="text" name="autor" required><br>
    Descrição: <input type="text" name="descricao" required><br>
    Instituição: <input type="text" name="Instituicao" required><br>
    Ano: <input type="text" name="Ano" required><br>
    Edição: <input type="text" name="Edicao" required><br>
    Páginas: <input type="text" name="Paginas" required><br>
    Tipo: <input type="text" name="Tipo" required><br>
    Formato: <input type="text" name="Formato" required><br>
    Licença: <input type="text" name="Licenca" required><br>
    Foto: <input type="text" name="foto" required><br>
    <button type="submit">Cadastrar livro</button>
</form>