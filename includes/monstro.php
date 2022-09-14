<?php

    //Função para cadastrar (create) monstros
    function registrar_monstro($nome, $descricao, $imagem) {
        global $conn;
        
        try {
            $sql = "INSERT INTO tb_monstro (nome, descricao, imagem)";
            $sql .= "VALUES (:nome, :descricao, :imagem)";
            $stmt = $conn->prepare($sql);
            
            $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
            $stmt->bindParam(':descricao', $descricao, PDO::PARAM_STR);
            $stmt->bindParam(':imagem', $imagem, PDO::PARAM_STR);
            $stmt->execute();
//            echo "Monstro registrado com sucesso!";
            return $conn->lastInsertId();
        } catch(PDOException $e) {
            die( 'ERROR: ' . $e->getMessage());
        }
    }

?>