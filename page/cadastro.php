<?php
$method = $_SERVER["REQUEST_METHOD"];
if ($method == "POST") {
    $SQL = mysqli_connect("localhost", "db_tarefas", "admin123");
    $SQLError = mysqli_connect_errno();

    $nome = $_POST["fC_nome"];
    $email = $_POST["fC_email"];
    $senha = $_POST["fC_senha"];

    if ($SQLError == 0) {

        $ResultadoCadUsuario = mysqli_query($SQL, "INSERT INTO db_tarefas.tb_usuarios (usuario_nome, usuario_email, usuario_senha) VALUES ('$nome','$email','$senha')");
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Modelo|Login</title>
<link rel="stylesheet" href="/Proj_Lista_Tarefas/css/styles.css">

</head>
<body>
	<div id="corpo-form">
		<h1>Cadastrar</h1>
		<form action="http://localhost/Proj_Lista_Tarefas/page/cadastro.php"
			method="POST">
			<input type="text" placeholder="Digite o nome" name="fC_nome"> <input
				type="email" placeholder="Digite o e-mail" name="fC_email"> <input
				type="password" placeholder="Digite a senha" name="fC_senha"> <input
				type="submit" value="Cadastrar"> <a
				href="/proj_lista_Tarefas/page/Login.php"><strong>Voltar</strong></a>
		</form>
	</div>
	<div id="MSG">
		<?php if ( isset($ResultadoCadUsuario) and $ResultadoCadUsuario ) { ?>
		<h3>Cadastro feito com sucesso.</h3>
		
		<?php } else if ( isset($ResultadoCadUsuario) and $ResultadoCadUsuario == false ) {?>
	<div id="MSG_erro">
		<h3>Algum erro aconteceu. Tente novamente.</h3>
	<?php } ?>
	</div>
	</div>
</body>
</html>








