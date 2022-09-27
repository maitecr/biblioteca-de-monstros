<?php
require '../includes/config.php';
require '../includes/monstro.php';

$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$url = strstr($url, 'id=');
$id = substr($url, 3);

bd_delete_monstro($id);

header("Location: ./../interna/editar.php");

?>