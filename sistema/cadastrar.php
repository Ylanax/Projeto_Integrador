<?php 
$servidor = 'localhost';
$bd = 'projeto biblioteca';
$usuario = 'root';
$senha = '';

$conexao = mysqli_connect($servidor, $usuario, $senha, $bd);
if (!$conexao) {
    die("deu ruim" . mysqli_connect_error());
}

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$cpf = $_POST['cpf'];
$senha_hash = $_POST['senha_hash'];

$nome = $conn->real_escape_string($nome);
$email = $conn->real_escape_string($email);
$telefone = $conn->real_escape_string($telefone);
$cpf = $conn->real_escape_string($cpf);
$senha_hash = $conn->real_escape_string($senha_hash);

$sql = "SELECT * FROM usuarios WHERE email='$email' AND senha_hash='$senha_hash'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Login realizado com sucesso!";
    // Redirecionar ou iniciar sessão aqui
} else {
    echo "Email ou senha incorretos.";
}

$conn->close();
?>
