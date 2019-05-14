<?php
include("conecta.php");

if(isset($_REQUEST['editar'])){
    $cdpost = $_REQUEST['cdpost'];
    $titulo = utf8_encode($_REQUEST['titulo']);
	$resumo = utf8_encode($_REQUEST['resumo']);
	$texto = utf8_encode($_REQUEST['texto']);
    $imagem = utf8_encode($_REQUEST['imagem']);
	if ($_REQUEST['editar'] == 'editar'){

		try {
			$sql = "update posts set titulo='$titulo', resumo='$resumo', texto='$texto', imagem='$imagem' where cdpost=$cdpost";
            $consulta = $link->prepare($sql);
			$consulta->execute();

			header("Location:dash.php#editar");
		}
		catch(PDOException $ex){
			echo($ex->getMessage());
		}	
	}
}
?>

<!-- , resumo='$resumo', texto='$texto', imagem='$imagem' -->