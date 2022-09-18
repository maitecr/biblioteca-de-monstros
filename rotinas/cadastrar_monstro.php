<?php

require '../includes/config.php';
require '../includes/monstro.php';


$nome = filter_var(trim($_POST['nome']), FILTER_SANITIZE_STRING);
$descricao = filter_var(trim($_POST['descricao']), FILTER_SANITIZE_STRING);
$imagem = filter_var(trim($_POST['imagem']), FILTER_SANITIZE_STRING);
$tipo = filter_var(trim($_POST['tipo']), FILTER_SANITIZE_STRING);
$pais = filter_var(trim($_POST['pais']), FILTER_SANITIZE_STRING);

echo registrar_monstro($nome, $descricao, $imagem, $tipo, $pais);

header("Location: ../registro.php");


?>s