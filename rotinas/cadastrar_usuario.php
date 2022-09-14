<?php 

require '../includes/config.php';
require '../includes/usuario.php';

$nome = filter_var(trim($_POST['nome']), FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
$senha = filter_var(trim($_POST['senha']), FILTER_SANITIZE_STRING);
$confSenha = filter_var(trim($_POST['confSenha']), FILTER_SANITIZE_STRING);

$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);

if ($email === false || $senha === false) {
	die("E-mail e senha inválidos");
}

if ($senha !== $confSenha) {
	die("Senhas não coincidem");
}

echo registrar_usuario($nome, $email, $senha);

header("Location: ../index.html");

?>