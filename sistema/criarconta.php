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
            <form class="clientes" action="cadastrar.php" method="POST">
                <label class="rotulo01">Nome Completo</label>
                <input type="text" class="campo-texto1" placeholder="Digite seu nome">
                <label class="rotulo02">CPF</label>
                <input type="text" class="campo-texto1" placeholder="Digite seu CPF">
                <label class="rotulo03">Telefone</label>
                <input type="text" class="campo-texto1" placeholder="(11) 91234-5678">
                <label class="rotulo04">Email</label>
                <input type="text" class="campo-texto1" placeholder="Digite seu email">
                <label class="rotulo05">Confirmar Email</label>
                <input type="text" class="campo-texto1" placeholder="Confirme seu email">
                <label class="rotulo06">Senha</label>
                <input type="password" class="campo-texto1" placeholder="Digite sua senha">
                <label class="rotulo07">Confirmar Senha</label>
                <input type="password" class="campo-texto1" placeholder="Confirme sua senha">
                <label class="sexo">Gênero:</label>
                <select class="caixa" id="sexo" name="sexo">
                    <option value="masculino">Masculino</option>
                    <option value="feminino">Feminino</option>
                    <option value="nao_informar">Prefiro não informar</option>
                </select>
            </form>
            <button class="botao-criar">Criar Conta</button><br>
            <form>
                <a href="login.php">
                    <button type="button" class="botao-voltar">Voltar</button><br>
                </a>
            </form>
        </div>
    </main>
</body>
</html>