<?php
include 'LinkSql.php';
global $SQL, $SQLError; /* Conexão MySQL */

include 'usuario.class.php';
session_start();
$email = $_POST["fL_email"];
$senha = $_POST["fL_senha"];

if ($SQLError == 0) {
    /*
     * var_dump($SQLError);
     * exit();
     */

    $ResultadoEmail = mysqli_query($SQL, "SELECT * FROM db_tarefas.tb_usuarios WHERE usuario_email = '$email' AND usuario_senha = '$senha'");

    if ($ResultadoEmail) {
        /*
         * var_dump($ResultadoEmail);
         * exit();
         */
        if ($ResultadoEmail->num_rows == 1) {

            /* Usuario Logado */
            $usuarioLogado = mysqli_fetch_object($ResultadoEmail, 'usuario');
            unset($_SESSION["erro"]);
            $_SESSION["usuarioLogado"] = $usuarioLogado;
            header("Location: /Proj_lista_tarefas/page/home.php");
            exit();
       
        
        } elseif ($ResultadoEmail->num_rows == 0) {
            $_SESSION["erro"] = " Usuario não encontrado ou não cadastrado.";
            header("Location:/Proj_lista_tarefas/page/Login.php");
            mysqli_close($SQL);
        }
    } /* if $resultadoEmail object(mysqli_result)#2 (5) { ["current_field"]=> int(0) ["field_count"]=> int(4) ["lengths"]=> NULL ["num_rows"]=> int(0) ["type"]=> int(0) } */
} /* if $SQLError resposta 0 ou 1 */

header("Location:/Proj_lista_tarefas/page/Login.php");

?>
