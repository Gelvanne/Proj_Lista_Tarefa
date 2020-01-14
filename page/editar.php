<?php
class tarefas
{

    public $id;

    public $titulo;

    public $finalizada;

    public $id_usuario;
}

session_start();
$usuario = $_SESSION["usuarioLogado"];

$TarefaSelecionada = $_POST["IDs"];
if($TarefaSelecionada != null){
foreach ($TarefaSelecionada as $ts) {
        $SQL = mysqli_connect("localhost","db_tarefas","admin123") or die("Não foi possivel conectar ao DB_Tarefas");
        $SQLError = mysqli_connect_errno(); 
        $AlteraTarefa = "UPDATE `db_tarefas`.`tb_tarefas` SET `tarefas_finalizada` = '1' WHERE `tb_tarefas`.`tarefas_id` = '$ts'";
        $SQL_Enviado = mysqli_query($SQL, $AlteraTarefa);
       header("Location: home.php");
	   exit();

 }

} else {  
    $SQL = mysqli_connect("localhost","db_tarefas","admin123") or die("Não foi possivel conectar ao DB_Tarefas");
    $SQLError = mysqli_connect_errno(); 
    $AlteraTarefa = "UPDATE `db_tarefas`.`tb_tarefas` SET `tarefas_finalizada` = '0' WHERE `tb_tarefas`.`tarefas_id` = '$ts'";
    $SQL_Enviado = mysqli_query($SQL, $AlteraTarefa);
   header("Location: home.php");
   exit();
} 
?>