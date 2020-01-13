<?php
$SQL = mysqli_connect("localhost","db_tarefas","admin123");
$SQLError = mysqli_connect_errno();
$Editar = ' ';

class usuario
{
    
    public $id;
    
    public $nome;
    
    public $email;
    
    public $senha;
}

session_start();

$usuario = $_SESSION["usuarioLogado"];
/* var_dump($usuario);
exit();*/

if ($SQLError == 0) {
    $ResultadoTarefas = mysqli_query($SQL, "SELECT * FROM db_tarefas.tb_tarefas WHERE usuario_id = {$usuario->usuario_id}");
    /* $ResultadoTarefas = mysqli_query($SQL, "SELECT * FROM db_tarefas.tb_tarefas as T inner join db_tarefas.tb_usuarios as U where T.usuario_id  = {$usuario->usuario_id}");*/

 /* var_dump($ResultadoTarefas);
  exit();*/
    
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
<html lang="">
<head>
<meta charset="UTF-8">
<title>App.Tarefas:Home</title>
<link rel="stylesheet" href="/Proj_Lista_Tarefas/css/styles.css">
</head>
<body>
	<div id="corpo-form-cad">
		<a href="/Proj_Lista_Tarefas/action/Logout.php"><h2>EXIT</h2></a>
		<h1>HOME</h1>
		<fieldset>
			<legend> Nova Tarefa</legend>
			<form action="/Proj_Lista_Tarefas/action/incluir.php" method="POST">
				<p>
					<input type="text" placeholder="Adicionar uma Tarefa"
						name="fH_titulo" />
				</p>
				<input type="submit" value="Adicionar" />
			</form>
	
	</div>


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
			<?php foreach ($Tarefas as $t){ ?>
								
				<tr>
				<form action="/Proj_Lista_Tarefas/page/editar.php" >
					<td><input type="checkbox" name="IDs[]" value="<?php echo $t->tarefas_id;?>" checked="checked"></td>
					<td><p>[<?php echo $usuario->usuario_nome;?>]</p></td>
					<td><p> <?php echo $t->tarefas_titulo;?></p></td>
					<td><p> (<?php echo $t->tarefas_finalizada ? "Finalizada" : "em Aberto"; ?>) </p> <?php }?> </td>
				</tr>
				</tbody>
		</table>
	</fieldset>
	<br><br>
	 <input type="submit" value="EDITAR" ></form>
</body>

<?php if (isset($_SESSION["erroAdicionarTarefa"])) {?>

<font color="red" size="+2"><?php echo   $_SESSION["erroAdicionarTarefa"];?></font>

<?php } else if (isset($_SESSION["sucessoAdicionarTarefa"])){?>

<font color="green" size="+2"><?php echo   $_SESSION["sucessoAdicionarTarefa"];?></font>

<?php }?>


</html>