<?php
class usuario
{
    
    public $id;
    
    public $nome;
    
    public $email;
    
    public $senha;
    
}
session_start();

$usuario = $_SESSION["usuarioLogado"];

$TarefaSelecionada = $_POST["IDs"];

foreach ($TarefaSelecionada as $ts) {
    $SQL = mysqli_connect("localhost","db_tarefas","admin123")or die("N�o foi possivel conectar ao DB_Tarefas");
    $SQLError = mysqli_connect_errno();
    $BuscaTarefa = "SELECT * FROM db_tarefas.tb_tarefas WHERE tarefas_id = '$ts'";
    $SQL_Resultado = mysqli_query($SQL, $BuscaTarefa);
    while ($SQL_Rows = mysqli_fetch_object($SQL_Resultado)) {
    $usuario = $SQL_Rows;
        
 }
}
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="/Proj_Lista_Tarefas/css/styles.css">
<title>APP.Tarefas:EDITAR</title>
</head>
<body>
<h1>Editar Tarefas</h1>
<form action="#">
<p><label>Id da tarefa:</label><input name="ID" value="<?php echo $usuario->tarefas_id;?>"></p>
<p><label>Título da tarefa:</label><input name="Nome" value="<?php echo $usuario->tarefas_titulo;?>"></p>
<p><label>Email do usuário:</label><input name="Email" value="<?php echo $usuario->tarefas_finalizada;?>"></p>
</form>

</body>
</html>