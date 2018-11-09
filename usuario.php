<?php

	class Usuario {

		private $nome;
		private $email;
		private $senha;



		//NOME
		public function getNome() 
		{
			return $this->nome;
		}

		public function setNome($nome) 
		{
			$this->nome = $nome;

			return $this;
		}




		//EMAIL
		public function getEmail() 
		{
			return $this->email;
		}

		public function setEmail($email) 
		{
			$this->email = $email;

			return $this;
		}



		//SENHA
		public function getSenha() 
		{
			return $this->senha;
		}

		public function setSenha($senha) 
		{
			$this->senha = $senha;

			return $this;
		}
	}
?>