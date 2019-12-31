<?php
include 'LinkSql.php';
global $SQL, $SQLError; /* Conexão MySQL */

include 'usuario.class.php';
session_start();
$email = $_POST["fL_email"];
$senha = $_POST["fL_senha"];

if ($SQLError == 0) {

    $ResultadoEmail = mysqli_query($SQL, "SELECT * FROM db_tarefas.tb_usuarios WHERE usuario_email = '$email' AND usuario_senha = '$senha'");

    if ($ResultadoEmail) {
        if ($ResultadoEmail->num_rows == 1) {
            /* Usuario Logado */
            $usuarioLogado = mysqli_fetch_object($ResultadoEmail, 'usuario');
            unset($_SESSION["erro"]);
            $_SESSION["usuarioLogado"] = $usuarioLogado;
            header("Location: /Proj_lista_tarefas/page/home.php");
            exit();
        }
    }
    $_SESSION["erro"] = "E-mail/senha inválidos";
    header("Location:/Proj_lista_tarefas/page/Login.php");
    mysqli_close($SQL);
}
?>
