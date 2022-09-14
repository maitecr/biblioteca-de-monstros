<?php

	//Função para cadastrar usuário
	function registrar_usuario($nome, $email, $senha) {
		global $conn;

		$hash_senha = hash("sha256", $senha, false);

		try {
			$sql = "INSERT INTO tb_usuario (nome, email, senha) VALUES (:nome, :email, :senha)";
			$stmt = $conn->prepare($sql);

			$stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
			$stmt->bindParam(':email', $email, PDO::PARAM_STR);
			$stmt->bindParam(':senha', $hash_senha, PDO::PARAM_STR);
			$stmt->execute();

		} catch(PDOException $e) {
			die( 'ERROR: ' . $e->getMessage());
		}
	}

	//Função para verificar se e-mail e senha coincidem para realizar login
	function verificar_email_senha($email, $senha) {
		global $conn;

		$hash_senha = hash("sha256", $senha, false);


		try {
			$sql = "SELECT id_usuario, nome, email FROM tb_usuario WHERE email = :email AND senha = :senha LIMIT 1";
			$stmt = $conn->prepare($sql);

			$stmt->bindParam(':email', $email, PDO::PARAM_STR);
			$stmt->bindParam(':senha', $hash_senha, PDO::PARAM_STR);
			$stmt->execute();
			return $stmt->fetchAll();
			
		} catch(PDOException $e) {
			die( 'ERROR: ' . $e->getMessage());
		}
	}
	

?>