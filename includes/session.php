<?php
session_start();

if (!isset($_SESSION['verificacao']))
{
	session_destroy();
	header("Location: rotinas/logout.php");
}

?>