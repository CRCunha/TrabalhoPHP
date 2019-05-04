<?php

include("conecta.php");

if(isset($_REQUEST['enviar'])){

	$titulo = $_REQUEST['titulo'];
	$resumo = $_REQUEST['resumo'];
	$texto = $_REQUEST['texto'];

	$sql = "insert into posts (titulo,resumo, texto) values ('$titulo','$resumo', '$texto')";
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