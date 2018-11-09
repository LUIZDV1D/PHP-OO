<!DOCTYPE html>
<html>
<head>
	<title>PHP-PDO</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

	<div class="container">
		<br>
		<div class="jumbotron">
			<h1 class="text-center">Usuários</h1>
		</div>
		<br>
		<?php

			include_once('usuarioDAO.php');
			include_once('usuario.php');

			$insere = new UsuarioDAO();
			$usuario = new Usuario();

			$usuario->setNome("David");
			$usuario->setEmail("luizdosphp@gmail.com");
			$usuario->setSenha("qwerty");

			$insere->InserirUsuario($usuario);

		?>

	</div>
</body>
</html>