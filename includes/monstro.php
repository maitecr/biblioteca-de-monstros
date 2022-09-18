<?php

    //Função para cadastrar (create) monstros
    function registrar_monstro($nome, $descricao, $imagem, $tipo, $pais) {
        global $conn;
        
        try {
            $sql = "INSERT INTO tb_monstro (nm_monstro, ds_descricao, bn_imagem, nm_tipo, nm_pais)";
            $sql .= "VALUES (:nome, :descricao, :imagem, :tipo, :pais)";
            $stmt = $conn->prepare($sql);
            
            $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
            $stmt->bindParam(':descricao', $descricao, PDO::PARAM_STR);
            $stmt->bindParam(':imagem', $imagem, PDO::PARAM_STR);
            $stmt->bindParam(':tipo', $tipo, PDO::PARAM_STR);
            $stmt->bindParam(':pais', $pais, PDO::PARAM_STR);
           
//            var_dump();
//            die();
           
            $stmt->execute();
//            echo "Monstro registrado com sucesso!";
            return $conn->lastInsertId();
        } catch(PDOException $e) {
            die( 'ERROR: ' . $e->getMessage());
        }
    }


    function select_paises() {
        global $conn;

        $sql = $conn->query("SELECT id_pais, nm_pais FROM tb_pais;");
        $paises = $sql->fetchAll(PDO::FETCH_ASSOC);

        foreach($paises as $pais) {               
            echo "<option value=\"$pais[nm_pais]\">$pais[nm_pais]</option>";
        }
    }

    
    function select_tipo() {
        global $conn;

        $sql = $conn->query("SELECT nm_tipo FROM tb_tipo;");
        $tipos = $sql->fetchAll(PDO::FETCH_ASSOC);

        foreach($tipos as $tipo) {               
            echo "<option value=\"$tipo[nm_tipo]\">$tipo[nm_tipo]</option>";
        }
    }





?>