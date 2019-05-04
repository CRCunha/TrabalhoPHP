function adicionar() {
    var el;

    el = document.getElementById("conteudo");

    el.innerHTML = "    include('../conecta.php');error_reporting(0);if($_REQUEST['login'] == 'Sair'){ header('Location: ../index.php');}"
}