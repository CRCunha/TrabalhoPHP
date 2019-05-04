<!DOCTYPE html>
<html>

<head>
    <title>Cristian</title>
    <!--METAS-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="portfolio, web, developer, design, layout, UI, UX">
    <meta name="language" content="PT-BR">
    <meta name="author" content="Nome">
    <meta name="robots" ontent="noindex">
    <meta name="googlebot" content="noindex">
    <!--LINKS-->
    <link rel="stylesheet" href="CSS/GERAL/GERAL.css">
    <link rel="stylesheet" href="CSS/NORMALIZE/NORMALIZE.css">
    <link rel="stylesheet" href="CSS/LEFT/left-content.css">
    <link rel="stylesheet" href="CSS/MAIN/main.css">
    <script src="JS/logout.js" type="text/JavaScript"></script>
    <!--FONTES-->

    <!--FAV ICON-->
    <link rel="shortcut icon" type="" href="" />
</head>

<body>
    <div class="left-content">
        <div class="left-header">
            <div class="avatar"></div>
            <div class="nome">ADMIN</div>
        </div>
        <div class="btns">
            <!-- BTN 1-->
            <div class="btn" onclick="adicionar()">
                <div class="container">
                    <div class="icon">
                        <img src="IMG/BTNS/add.png">
                    </div>
                    <div class="text">Adicionar</div>
                </div>
            </div>
            <!-- BTN 2-->
            <div class="btn">
                <div class="container">
                    <div class="icon">
                        <img src="IMG/BTNS/del.png">
                    </div>
                    <div class="text">Deletar</div>
                </div>
            </div>
            <!-- BTN 3-->
            <div class="btn">
                <div class="container">
                    <div class="icon">
                        <img src="IMG/BTNS/edit.png">
                    </div>
                    <div class="text">Editar</div>
                </div>
            </div>
        </div>
        <!-- LOGOUT -->
        <div class="logout">
            <form method="post">
                <div class="icon">
                    <img src="IMG/BTNS/logout.png">
                </div>
                <input id="sair" type="submit" name="login" value="Sair">
            </form>
        </div>
    </div>
    <main id="conteudo">
        <?php
            echo("ingnorar o menu laterial e colocar todas as 'funcs' aqui");
            echo("<br>Ou criar uma pagina de dashboard para cada 'func'");
            echo("<br>Caso criar para cada 'func, colocar auto scroll smooth");
            include('../conecta.php');
            error_reporting(0);
            if($_REQUEST['login'] == 'Sair'){
                session_destroy();
                header("Location: ../index.php");
            }
        ?>
    </main>
</body>
</html>