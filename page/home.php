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
                     
            while ($Tarefa = mysqli_fetch_object($ResultadoTarefas)) {
                $Tarefas[] = $Tarefa;
                
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

	<fieldset>
		<legend>
			<h2>Suas tarefas:</h2>
		</legend>
		<table>
			<thead>
				<tr>
					<td><font color="blue" size="+2"><strong>Select:</strong></font></td>
					<td><font color="blue" size="+2"><strong>Usuario:</strong></font></td>
					<td><font color="blue" size="+2"><strong>Descrição Tarefa:</strong></font></td>
					<td><font color="blue" size="+2"><strong>Status tarefa:</strong></font></td>
					</tr>
			</thead>
			<tbody>
<?php foreach ($Tarefas as $t){?>
<tr>
					<td>	<input type="checkbox" name="IDs[]" value = "<?php echo $t->tarefas_finalizada = ("true");?>"></td>
					<td>	<p>[<?php echo $t->usuario_id;?>]</p></td>
					<td>	<p> <?php echo $t->tarefas_titulo;?></p></td>
					<td>	<p> (<?php echo $t->tarefas_finalizada ? "Finalizada" : "em Aberto"; ?>) </p>
<?php }?></td>
			
			</tbody>
		</table>
	</fieldset>
</body>
</html>