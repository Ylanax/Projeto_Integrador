<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Conta</title>
    <link rel="shortcut icon" href="../imagens/icone.png" type="image/icone">
    <link rel="stylesheet" href="../estilo.css">
</head>

<body id="fundo">
    <main class="conteudo">
        <div id="col2">
            <h2 class="login">Criar Conta</h2>
            <p class="dados">Preencha seus dados</p>
            <form class="clientes" method="POST" action="cadastrar.php">
                <label class="rotulo01">Nome Completo</label>
                <input type="text" name="nome" class="campo-texto1" placeholder="Digite seu nome" required maxlength="100">
                <label class="rotulo02">CPF</label>
                <input type="text" name="cpf" class="campo-texto1" placeholder="Digite seu CPF" required maxlength="14">
                <label class="rotulo03">Telefone</label>
                <input type="tel" name="telefone" class="campo-texto1" placeholder="(11) 91234-5678" required maxlength="15">
                <label class="rotulo04">Email</label>
                <input type="text" name="email" class="campo-texto1" placeholder="Digite seu email" required maxlength="100">
                <label class="rotulo06">Senha</label>
                <input type="password" name="senha_hash" class="campo-texto1" placeholder="Digite sua senha" required>
                <button type="submit" class="botao-criar">Criar Conta</button><br>
            </form>

            <form>
                <a href="login.php">
                    <button type="button" class="botao-voltar">Voltar</button><br>
                </a>
            </form>
        </div>
    </main>
</body>

</html>