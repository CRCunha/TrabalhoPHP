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
$sql = "select cdpost,titulo,resumo,texto,imagem, data from posts $sqlAux order by data $ordenacao";

try {
	$consulta = $link->prepare($sql);
	$consulta->execute();

	while ($registro = $consulta->fetch(PDO::FETCH_ASSOC)) {
		$cdpost = $registro['cdpost'];
		$data = strftime('%d/%m/%Y', strtotime($registro['data']));
		$titulo = utf8_decode($registro['titulo']);
		$resumo = utf8_decode($registro['resumo']);
		$texto = utf8_decode($registro['texto']);
		$imagem = utf8_decode($registro['imagem']);

		echo("<div class='post'>
			<div class='header-post'>
				<div class='cd-post'>$cdpost</div>
				<div class='imagem'><img src='IMG/POST/$imagem' /></div>
			</div> 
			<div class='titulo-post'>$titulo</div>  
			<div clas='resumo'>$resumo</div>  
			<div class='texto'>$texto</div> 
			$data
		</div>");
	}
}
catch(PDOException $ex){
	echo($ex->getMessage());
}

?>