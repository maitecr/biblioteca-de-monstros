<?php
require_once '../includes/config.php';
require_once '../includes/usuario.php';


$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
$senha = filter_var(trim($_POST['senha']), FILTER_SANITIZE_STRING);


if ($email === false || $senha == "") {
	die("E-mail e/ou senha inválidos");
}

$verificacao = verificar_email_senha($email, $senha);

session_start();
//var_dump($email);
//die();
if (count($verificacao) != 0) {
	$_SESSION['verificacao'] = $verificacao;
	header("Location: ../home.html");				
} else {
	session_destroy();
	header("Location: ../index.html");
}
?>