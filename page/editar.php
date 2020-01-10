<?php
session_start();
$usuario = $_SESSION["usuarioLogado"];

class usuario
{
    
    public $id;
    
    public $nome;
    
    public $email;
    
    public $senha;
}

$LocalizaUsuario = $usuario->usuario_email;  /* $_POST["fB_email"]; */

if ($LocalizaUsuario != NULL) {
    $SQL = mysqli_connect("localhost", "db_tarefas", "admin123");
    $SQLError = mysqli_connect_errno();
    if ($SQLError == 0) {
        $BuscaUsuario = "SELECT * FROM db_tarefas.tb_usuarios WHERE usuario_email = '$LocalizaUsuario'";
        /*
         * var_dump($BuscaUsuario);
         * exit();
         */
        $ResultadoBusca = mysqli_query($SQL, $BuscaUsuario);
        /*
         * var_dump($ResultadoBusca);
         * exit();
         */
        if ($ResultadoBusca->num_rows > 0) {
            $RowsUsuario = mysqli_fetch_assoc($ResultadoBusca);
            var_dump($RowsUsuario);
            exit();
        }
    }
}
?>
