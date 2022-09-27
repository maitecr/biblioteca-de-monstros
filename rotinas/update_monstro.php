<?php 
require '../includes/config.php';
require '../includes/monstro.php';

$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$url = strstr($url, 'id=');
$id = substr($url, 3);

$nome = filter_var(trim($_POST['nome']), FILTER_SANITIZE_STRING);
$descricao = filter_var(trim($_POST['descricao']), FILTER_SANITIZE_STRING);

bd_update_monstro($id, $nome, $descricao);

header("Location: ./../interna/editar.php");

?>  