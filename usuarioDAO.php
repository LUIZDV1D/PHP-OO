<?php

	include_once('conexao.php');
	include_once('usuario.php');

	class UsuarioDAO {


		public function InserirUsuario(Usuario $usuario)
		{

			$con = new Conexao();
			$stmt = $con->Con();


			$sql = $stmt->prepare("INSERT INTO usuarios(email,senha,nome) VALUES(?,?,?)");

			$nome = $usuario->getNome();
			$email = $usuario->getEmail();
			$senha = $usuario->getSenha();

			$sql->bindParam(1, $email);
			$sql->bindParam(2, $senha);
			$sql->bindParam(3, $nome);

			$sql->execute();
		}

	}

?>