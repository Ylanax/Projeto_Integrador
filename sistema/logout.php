<?php
session_start();
session_destroy();
header("Location: ../paginasemlogin.php"); // volta para o início
exit();
?>