<?php
//inclui o arquivo de conexao
include("conecta.php");
//inclui o formulário
include("inclui_form.php");
//testa de o botao enviar do form foi pressionado
//isset diz se uma variável está criada
if(isset($_REQUEST['enviar'])){
	//atribui o valor $_REQUEST['nome'] à variável $nome
	$nome = $_REQUEST['nome'];
	//atribui os campos da data para a variável $nascimento
	$nascimento = $_REQUEST['ano'] . "-" . $_REQUEST['mes'] . "-" . $_REQUEST['dia'];

	//monta a consulta para inserir no banco
	$sql = "insert into pessoa (nome,nascimento) values ('$nome','$nascimento')";
	try {
		//$link foi criado no conecta.php
		//cria $consulta que é o objeto de consulta ao banco
		$consulta = $link->prepare($sql);
		//executa a consulta ao banco
		$consulta->execute();
		echo ("Incluido com sucesso!");
	}
	catch(PDOException $ex){
		echo($ex->getMessage());
	}
}//fim botao enviar
?>