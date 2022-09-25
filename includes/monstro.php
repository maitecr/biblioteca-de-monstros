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
           
            $stmt->execute();
//            echo "Monstro registrado com sucesso!";
            return $conn->lastInsertId();
        } catch(PDOException $e) {
            die( 'ERROR: ' . $e->getMessage());
        }
    }

    //Função para exibir os dados contidos na tabela "tb_pais" no campo "Origem" no html da página de registro de monstros
    function html_select_paises() {
        global $conn;

        $sql = $conn->query("SELECT id_pais, nm_pais FROM tb_pais;");
        $paises = $sql->fetchAll(PDO::FETCH_ASSOC);

        foreach($paises as $pais) {               
            echo "<option value=\"$pais[nm_pais]\">$pais[nm_pais]</option>";
        }
    }

    //Função para exibir os dados contidos na tabela "tb_tipo" no campo "Tipo" no html da página de registro de monstros
    function html_select_tipo() {
        global $conn;

        try {
            $sql = $conn->query("SELECT nm_tipo FROM tb_tipo;");
            $tipos = $sql->fetchAll(PDO::FETCH_ASSOC);
        } catch(PDOException $e) {
            die( 'ERROR: ' . $e->getMessage());
        }
            
        foreach($tipos as $tipo) {               
            echo "<option value=\"$tipo[nm_tipo]\">$tipo[nm_tipo]</option>";
        }
    }


    //Função que retorna dados da tabela "tb_monstro"
    function bd_select_monstro() {
        global $conn;

        try {
            $sql = $conn-> query("SELECT * FROM tb_monstro;");
            
            return $monstros = $sql->fetchAll(PDO::FETCH_ASSOC);
    
        } catch(PDOException $e) {
            die( 'ERROR: ' . $e->getMessage());
        }
    }

    //Exibição dos cards com dados do banco de dados
    function exibir_card_monstro() {
        $html = "<h2>Catálogo</h2>\n";

        if($monstros = bd_select_monstro()) {
            foreach($monstros as $nome => $monstro) {
                $html .= "<div class= \"container-card\" >\n";
                $html .= "<div class= \"container-card-image\">\n";
                $html .= "<img src=\"{$monstro['bn_imagem']}\">\n";               
                $html .= "</div>\n";
                $html .= "<div class=\"container-card-info\">\n";
                $html .= "<h3>{$monstro['nm_monstro']}</h3>\n";
                $html .= "<h4>Origem:{$monstro['nm_pais']}</h4>\n";
                $html .= "<h4>Tipo:{$monstro['nm_tipo']}</h4>";
                $html .= "<h4>Descrição</h4>\n";
                $html .= "<p>{$monstro['ds_descricao']}</p>\n";
                $html .= "</div>\n";
                $html .= "</div>\n";
                $html .= "<br>\n";
            }
        } else {
            var_dump($monstros);
            die();
        }

        return $html;

    }




?>