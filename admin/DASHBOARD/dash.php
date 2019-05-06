<!DOCTYPE html>
<html>

<head>
    <title>DashBoard</title>
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
    <link rel="stylesheet" href="CSS/MAIN/inclui.css">
    <link rel="stylesheet" href="CSS/EXCLUIR/excluir.css">
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
                    <div class="text"><a href="#incluir">Incluir</a></div>
                </div>
            </div>
            <!-- BTN 2-->
            <div class="btn" onclick="deletar()">
                <div class="container">
                    <div class="icon">
                        <img src="IMG/BTNS/del.png">
                    </div>
                    <div class="text"><a href="#excluir">Deletar</a></div>
                </div>
            </div>
            <!-- BTN 3-->
            <div class="btn" onclick="editar()">
                <div class="container">
                    <div class="icon">
                        <img src="IMG/BTNS/edit.png">
                    </div>
                    <div class="text"><a href="#editar">Editar</a></div>
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
            error_reporting(0);
            if($_REQUEST['login'] == 'Sair'){
                session_destroy();
                header("Location: ../index.php");
            }
        ?>
            <!--INCLUI -->
            <div class="inclui" id="incluir">
                <div class="titulo">INCLUIR</div>
                <form method="post" action="inclui.php">
                    <input type="text" name="titulo" placeholder="Título" autocomplete="off">
                    <input type="text" name="resumo" placeholder="resumo" autocomplete="off">
                    <input type="text" name="texto" placeholder="texto" autocomplete="off">
                    <input type="submit" name="enviar" value="enviar">
                </form>
            </div>
            <!--EXCLUIR -->
            <div class="inclui" id="excluir">
                <div class="titulo">DELETAR</div>
                <div class="containerDeletar">
                    <?php
                    include("consulta.php");
                    ?>
                </div>
                <form style="height: 250px;" method="post" action="exclui.php">
                    <input type="number" name="cdpost" placeholder="Digite o Numero do Post" autocomplete="off">
                    <input style="margin-top: -40px" type="submit" name="deletar" value="deletar">
                </form>
            </div>
            <!--EDITAR -->
            <div class="inclui" id="editar">
                <div class="titulo">EDITAR</div>
                <form method="post" action="inclui.php">
                    <input type="text" name="titulo" placeholder="Título" autocomplete="off">
                    <input type="text" name="resumo" placeholder="resumo" autocomplete="off">
                    <input type="text" name="texto" placeholder="texto" autocomplete="off">
                    <input type="submit" name="enviar" value="enviar">
                </form>
            </div>
    </main>
</body>

</html>