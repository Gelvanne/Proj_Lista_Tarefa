<?php session_start();?>


<!DOCTYPE html>
<html lang="">
<head>
<meta charset="UTF-8">
<title>App.Tarefas:Login</title>
<link rel="stylesheet" href="/Proj_Lista_Tarefas/css/styles.css">
</head>
<body>
<div id="corpo-form">
<h1>Entrar</h1>
	<form action="/proj_lista_Tarefas/action/ValidateLogin.php" method="POST">
		<input type="email" placeholder="e_mail" name="fL_email"> 
		<input type="password" placeholder="Senha" name="fL_senha"> 
		<input type="submit" value="Acessar">
		<a href="cadastro.php">Ainda não é inscrito? <strong>Cadastre-se!</strong></a>
		<a href="/proj_lista_Tarefas/index.html">Inicial</a>
	</form>
</div>
</body>
	
