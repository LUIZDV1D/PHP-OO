<?php

	class Conexao {

		public function Con() {

			try {

				$pdo = new PDO('mysql:host=127.0.0.1;dbname=projeto_loja','root','',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

			} catch(pdoException $e){
				echo $e.getMessage();
			}

			return $pdo;

		}

	}

?>