<?php
date_default_timezone_set('America/Sao_Paulo');
include("conecta.php");

$today = date("Y/m/d");;

if(isset($_REQUEST['enviar'])){

	$titulo = utf8_encode($_REQUEST['titulo']);
	$resumo = utf8_encode($_REQUEST['resumo']);
	$texto = utf8_encode($_REQUEST['texto']);
	$imagem = $_REQUEST['imagem'];
	$data = $today;

	$sql = "insert into posts (titulo,resumo, texto, data, imagem) values ('$titulo','$resumo', '$texto', '$data', '$imagem')";
	try {

		$consulta = $link->prepare($sql);
	
		$consulta->execute();
		echo ("Incluido com sucesso!");
		header("Location:dash.php");
	}
	catch(PDOException $ex){
		echo($ex->getMessage());
	}
}
?>