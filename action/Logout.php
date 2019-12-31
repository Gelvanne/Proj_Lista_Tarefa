<?php
session_start();
unset($_SESSION["usuarioLogado"]);
session_destroy();
header("Location:/Proj_lista_Tarefas/page/Login.php");

?>