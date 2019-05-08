<!DOCTYPE html>
<html>

<head>
    <title>Trabalho PHP</title>
    <!--METAS-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="portfolio, web, developer, design, layout, UI, UX">
    <meta name="language" content="PT-BR">
    <meta name="author" content="Nome">
    <meta name="robots" ontent="noindex">
    <meta name="googlebot" content="noindex">
    <!--LINKS-->
    <link rel="stylesheet" href="CSS/GERAL/GERAL.css" ">
    <link rel="stylesheet " href="CSS/NORMALIZE/NORMALIZE.css ">
    <link rel="stylesheet " href="CSS/HEADER/header.css ">
    <link rel="stylesheet " href="CSS/HEADER/nav.css ">
    <link rel="stylesheet " href="CSS/SERVICES/services.css ">
    <link rel="stylesheet " href="CSS/SERVICES/cards.css ">
    <link rel="stylesheet " href="CSS/TRABALHOS/trabalhos.css ">
    <link rel="stylesheet" href="CSS/CONTENT/content.css">
    <!--FONTES-->
    <link href="https://fonts.googleapis.com/css?family=Staatliches " rel="stylesheet ">
    <link href="https://fonts.googleapis.com/css?family=Roboto " rel="stylesheet ">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro " rel="stylesheet ">
    <!--FAV ICON-->
    <link rel="shortcut icon " href="IMG/HEADER/Logo.png " />
</head>
<?php
    error_reporting(0); 
?>
<body>
    <!-- HEADER -->
    <div class="header ">
        <nav>
            <div class="lContent ">
                <div class="logo ">
                    <!-- <img src="IMG/HEADER/Logo.png "> -->
                </div>
            </div>
            <div class="rContent "></div>
        </nav>
        <div class="headerContent ">
            <div class="container ">
                <div class="title ">IFSUL Pelotas </div>
                <div class="sub ">Projeto de PHP</div>
                <div class="btnContainer ">
                    <div class="btn ">
                        <a href="admin/index.php ">DashBoard</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SERVICES -->
    <div class="services ">
        <div class="title ">
            <b>Destaques</b>
            <div class="linha ">
                <div class="linhaColor "></div>
            </div>
        </div>
        <!--CARDS-->
        <div class="cards ">
            <div class="container ">
                <!-- CARD 1-->
                <div class="card " id="card1 ">
                    <div class="cardHeader ">
                        <div class="container ">
                            <img src="IMG/SERVICES/CARDS/pictures.png ">
                            <div class="title " style="margin-left:-32% "> EDITAR</div>
                        </div>
                    </div>
                    <div class="text ">
                        <div class="container ">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum nulla, quod sit.</div>
                    </div>
                </div>
                <!-- CARD 2-->
                <div class="card " id="card2 ">
                    <div class="cardHeader ">
                        <div class="container ">
                            <img src="IMG/SERVICES/CARDS/pictures.png ">
                            <div class="title " style="margin-left:-32% "> EDITAR</div>
                        </div>
                    </div>
                    <div class="text ">
                        <div class="container ">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum nulla, quod sit.</div>
                    </div>
                </div>
                <!-- CARD 3-->
                <div class="card " id="card3 ">
                    <div class="cardHeader ">
                        <div class="container ">
                            <img src="IMG/SERVICES/CARDS/pictures.png ">
                            <div class="title "  style="margin-left:-32% "> EDITAR</div>
                        </div>
                    </div>
                    <div class="text ">
                        <div class="container ">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum nulla, quod sit.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--TRABALHOS-->
    <div class="trabalhos ">
        <div class="title ">
            <b>News</b>
            <div class="linha ">
                <div class="linhaColor "></div>
            </div>
        </div>
        <div class="sub ">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam provident commodi ex magni saepe, culpa distinctio.</div>
    </div>
    <div class="content">
        <div class="container">
            <?php 
                include("conecta.php");
                include("consulta.php");
            ?>
        </div>
    </div>
</body>

</html>