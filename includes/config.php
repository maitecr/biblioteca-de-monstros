<?php

//Pasta de destino para upload de imagens
$diretorio = './../img';

//Conexão com o banco de dados
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "biblioteca_monstros";
$port = 3306;

try {
    $dsn_mysql = "mysql:host=".$host.";port=".$port.";dbname=".$dbname;
    $conn = new PDO($dsn_mysql, $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "Estabelecendo conexão com banco de dados";
} catch (PDOException $e) {
    die('ERROR: ' . $e->getMessage());
}

?>