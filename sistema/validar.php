<?php
$email = $_POST['email'];
$senhaBD = $_POST['senha_hash'];

$servidor = 'localhost';
$bd = 'projeto biblioteca';
$usuario = 'root';
$senha = '';

$conexao = mysqli_connect($servidor, $usuario, $senha, $bd);
if (!$conexao) {
    die("deu ruim" . mysqli_connect_error());
}

$resultado = mysqli_query($conexao, $sql);
$sql = "select * from usuarios where email = '$email' and senha_hash='$senhaBD'";

$resultado = mysqli_query($conexao, $sql);

if($resultado->num_rows > 0){
    header("Location:paginainicial.php");
}else{
    header("Location:login.php");
}

?>