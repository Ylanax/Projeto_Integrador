<?php 
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$cpf = $_POST['cpf'];
$senha_hash = password_hash($_POST['senha_hash'], PASSWORD_DEFAULT);

$sql = "insert into usuarios(nome, email, telefone, cpf, senha_hash) values ('$nome', '$email', '$telefone', '$cpf', '$senha_hash')";

 
$servidor = '10.125.46.31';
$bd = 'projeto biblioteca';
$usuario = 'root';
$senha = '';

$conexao = mysqli_connect($servidor, $usuario, $senha, $bd);
if (!$conexao) {
    die("deu ruim" . mysqli_connect_error());
}


$resultado = mysqli_query($conexao, $sql);

if ($resultado) {
    echo "<script>
            alert('Usuário cadastrado com sucesso!');
            window.location.href = 'login.php';
          </script>";
} else {
    echo "<script>
            alert('Erro ao cadastrar o usuário: " . mysqli_error($conexao) . "');
            window.history.back();
          </script>";
}


mysqli_close($conexao);


?>
