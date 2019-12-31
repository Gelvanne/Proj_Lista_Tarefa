<?php
$SQL = mysqli_connect("localhost","db_tarefas","admin123");
$SQLError = mysqli_connect_errno();
class usuario
{
    
    public $id;
    
    public $nome;
    
    public $email;
    
    public $senha;
}

session_start();
$usuarioLogado = $_SESSION["usuarioLogado"];

$titulo = $_POST["fH_titulo"];

$resultadoTarefa = mysqli_query($SQL, "INSERT INTO db_tarefas.tb_tarefas (tarefas_titulo, tarefas_finalizada, usuario_id) VALUES ('$titulo',false,{$usuarioLogado->usuario_id})");

if($resultadoTarefa) {
    $linhasAfetadas = mysqli_affected_rows($SQL);
    if ($linhasAfetadas > 0) {
        unset($_SESSION["erroAdicionarTarefa"]);
        $_SESSION["sucessoAdicionarTarefa"] = "Tarefa Adicionada com Sucesso.";
        header("Location: /Proj_Lista_Tarefas/page/Login.php");
        exit();
                
    }
} else {
    echo mysqli_errno($SQL);
    exit();
}
unset($_SESSION["sucessoAdicionarTarefa"]);
$_SESSION["erroAdicionarTarefa"] = "Erro ao adicioner tarefa. Tente novamente";
header("Location: Proj_Lista_Tarefas/page/Login.php");



