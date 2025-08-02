<?php
session_start();
session_destroy();
header("Location: ../paginainicial.php"); // volta para o início
exit();
?>