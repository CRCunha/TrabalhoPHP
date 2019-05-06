<?php
include("conecta.php");

if(isset($_REQUEST['deletar'])){
	$titulo = $_REQUEST['titulo'];
	$cdpost = $_REQUEST['cdpost'];

	if ($_REQUEST['deletar'] == 'deletar'){

		try {
			$sql = "delete from posts where (cdpost = $cdpost)";
			$consulta = $link->prepare($sql);
			$consulta->execute();

			header("Location:dash.php#excluir");
		}
		catch(PDOException $ex){
			echo($ex->getMessage());
		}	
	}
}
?>