<?php
session_start();

$email = $_POST['email'];
$senhaBD = $_POST['senha_hash'];

$servidor = '10.125.46.31';
$bd = 'projeto biblioteca';
$usuario = 'root';
$senha = '';

$conexao = mysqli_connect($servidor, $usuario, $senha, $bd);
if (!$conexao) {
    die("deu ruim" . mysqli_connect_error());
}

$sql = "select * from usuarios where email = '$email' and senha_hash='$senhaBD'";
$resultado = mysqli_query($conexao, $sql);

if($resultado->num_rows > 0){
    $usuario = mysqli_fetch_assoc($resultado);
    $_SESSION['usuario'] = $usuario['nome'];
    header("Location:../paginainicial.php");
}else{
    header("Location:login.php");
}

?>