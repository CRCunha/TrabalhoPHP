<?php
include("conecta.php");
include("consulta_form.php");

//inicializando varáveis
//$inicial vai ser usada para o LIKE do SQL
$inicial = "";
//$sqlAux é uma variável que será usada para modificar 
//a variável $sql original
$sqlAux = "";
//$ordenacao irá conter a forma de ordenação do SQL (ASC ou DESC)
$ordenacao = "";
//se o botao enviar foi pressionado
if(isset($_REQUEST['enviar'])){
	//atribui às variáveis os campos de $_REQUEST
	$inicial = $_REQUEST['inicial'];
	$ordenacao = $_REQUEST['ordenacao'];
}
//se $inicial não estiver vazia
if ($inicial != ""){
		//monta em $sqlAaux o where que será usado no SQL
		$sqlAux = " where titulo LIKE '$inicial%' ";
}
$sql = "select cdpost,titulo,resumo,texto from posts $sqlAux order by data $ordenacao";
// echo("$sql<br>");
//-----------------------------

try {
	//$link foi criado no conecta.php
	$consulta = $link->prepare($sql);
	$consulta->execute();
	//enquanto tem registros disponíveis 
	//na consulta, copia cada um deles 
	//para o vetor associativo $registro 
	while ($registro = $consulta->fetch(PDO::FETCH_ASSOC)) {
		$cdpost = $registro['cdpost'];
		//acerta acentuação para UTF8
		$titulo = utf8_encode($registro['titulo']);
		$resumo = utf8_encode($registro['resumo']);
		$texto = utf8_encode($registro['texto']);
		//%B nome do mes extenso, %m mes com 2 digitos
		//%Y ano com quatro dígitos ,%A dia da semana extenso
		// $data =  strftime("%d/%m/%Y",strtotime($registro['data']));	
		echo("<div class='post'><div class='cd-post'>$cdpost</div>  <div class='titulo-post'>$titulo</div>  <div clas='resumo'>$resumo</div>  <div class='texto'>$texto</div></div>");
	}
}
catch(PDOException $ex){
	echo($ex->getMessage());
}

?>