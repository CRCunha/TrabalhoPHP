<?php
include("conecta.php");
include("consulta_form.php");

$inicial = "";
$sqlAux = "";
$ordenacao = "ASC";

if(isset($_REQUEST['enviar'])){
	$inicial = $_REQUEST['inicial'];
	$ordenacao = $_REQUEST['ordenacao'];
}

if ($inicial != ""){
	$sqlAux = " where titulo LIKE '$inicial%' ";
}
$sql = "select cdpost,titulo,resumo,texto from posts $sqlAux order by cdpost $ordenacao";

try {
	$consulta = $link->prepare($sql);
	$consulta->execute();

	while ($registro = $consulta->fetch(PDO::FETCH_ASSOC)) {
		$cdpost = $registro['cdpost'];
		
		$titulo = utf8_encode($registro['titulo']);
		$resumo = utf8_encode($registro['resumo']);
		$texto = utf8_encode($registro['texto']);

		echo("<div class='post'><div class='cd-post'>$cdpost</div>  <div class='titulo-post'>$titulo</div>  <div clas='resumo'>$resumo</div>  <div class='texto'>$texto</div></div>");
	}
}
catch(PDOException $ex){
	echo($ex->getMessage());
}

?>