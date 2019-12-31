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

$usuario = $_SESSION["usuarioLogado"];


if ($SQLError == 0) {
    $ResultadoTarefas = mysqli_query($SQL, "SELECT * FROM db_tarefas.tb_tarefas WHERE usuario_id = {$usuario->usuario_id}");
      
    $Tarefas = array();
        
    if ($ResultadoTarefas) {
                     
        if ($ResultadoTarefas->num_rows > 0) {
                     
            while ($Tarefas = mysqli_fetch_object($ResultadoTarefas)) {
                $Tarefas[] = $Tarefas;
                
            }
        }
    }
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>App.Tarefas:Home</title>
</head>
<body>
	<p>
	
	
	<h3>
		<a href="/Proj_Lista_Tarefas/action/Logout.php">Logout</a>
	</h3>
	<h1>HOME</h1>
	<fieldset>
		<legend> Nova Tarefa</legend>
		<form action="/Proj_Lista_Tarefas/action/incluir.php" method="POST">
			<p>
				<label>Título:</label><input type="text" name="fH_titulo" />
			</p>
			<input type="submit" value="Adicionar" />
		</form>
<?php if (isset($_SESSION["erroAdicionarTarefa"])) {?>
<p>
<?php echo $_SESSION["erroAdicionarTarefa"];?>
<p>
<?php } else if (isset($_SESSION["sucessoAdicionarTarefa"])){?>
<p>
<?php echo $_SESSION["sucessoAdicionarTarefa"];?>
<p>
<?php }?>
	
	</fieldset>

	<h2>Suas tarefas:</h2>
<?php foreach ($Tarefas as $t){?>
<p> <?php echo $t->tarefas_titulo;?> (<?php echo $t->tarefas_finalizada ? "Finalizada" : "em Aberto"; ?>) </p>
<?php }?>

</body>
</html>