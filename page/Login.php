<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>App.Tarefas:Login</title>
</head>
<body>
	<p>
	
	<h3>
		<a href="/proj_lista_Tarefas/index.html">Inicial</a>
	</h3>
	<fieldset>

		<legend>
			<h2>Login APP.Tarefas</h2>
		</legend>

		<form action="/proj_lista_Tarefas/action/ValidateLogin.php"
			method="POST">
			<p>
				<label>E-mail:</label> <input name="fL_email" type="email">
			</p>
			<p>
				<label>Senha:</label> <input name="fL_senha" type="password">
			</p>
			<p>
				<input type="submit" value="Acessar">
			</p>
		</form>
	</fieldset>
</body>
</html>