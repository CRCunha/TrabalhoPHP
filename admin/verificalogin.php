<?php
session_start();

if(isset($_SESSION['usuario'])){
	$usuario = $_SESSION['usuario'];
	echo("<p>Usuário: $usuario</p>");
	
	include("logoutform.php");
}
else {

	include("loginform.php");

	exit();
}
?>