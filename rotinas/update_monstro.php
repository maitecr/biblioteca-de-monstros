<?php 
require '../includes/config.php';
require '../includes/monstro.php';

$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$url = strstr($url, 'id=');
$id = substr($url, 3);

$nome = filter_var(trim($_POST['nome']), FILTER_SANITIZE_STRING);
$descricao = filter_var(trim($_POST['descricao']), FILTER_SANITIZE_STRING);

foreach ($_FILES["imagem"]["error"] as $key => $error) {
    if ($error == UPLOAD_ERR_OK) {
        $tmp_name = $_FILES["imagem"]["tmp_name"][$key];
        $name = basename($_FILES["imagem"]["name"][$key]);
        $path = $diretorio."/".$name;
        move_uploaded_file($tmp_name, $path);
    }
}

$tipo = filter_var(trim($_POST['tipo']), FILTER_SANITIZE_STRING);
$pais = filter_var(trim($_POST['pais']), FILTER_SANITIZE_STRING);

bd_update_monstro($id, $nome, $descricao, $tmp_name, $path, $tipo, $pais);

header("Location: ./../interna/editar.php");

?>  