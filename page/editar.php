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

$TarefaSelecionada = $_GET;
/*var_dump($TarefaSelecionada);
exit();*/
 foreach ($TarefaSelecionada as $ts){
    
if ($TarefaSelecionada != NULL) {
    $SQL = mysqli_connect("localhost", "db_tarefas", "admin123");
    $SQLError = mysqli_connect_errno();
    if ($SQLError == 0) {
        $BuscaTarefa = "SELECT * FROM db_tarefas.tb_tarefas WHERE tarefas_id = '$TarefaSelecionada'";
        
         var_dump($BuscaUsuario);
         exit();
         
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
}
?>
