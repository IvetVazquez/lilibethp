<!doctype html>
<html lang="<?php echo substr($_SERVER['REQUEST_URI'], 1, 2) ?>">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">

  <!-- Touch Icons - iOS and Android 2.1+ 180x180 pixels in size. -->
  <link rel="apple-touch-icon-precomposed" href="./img/fav-180x180.png">

  <!-- Firefox, Chrome, Safari, IE 11+ and Opera. 196x196 pixels in size. -->
  <link rel="icon" href="./img/fav-196x196.png">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="./css/styles.css">
  <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl"
    crossorigin="anonymous"></script>
  <title>Lilibeth Pinto</title>
</head>

<body>
    <div class="container-logo-menu">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
                    <img src="./img/logo.png" class="img-responsive logo" alt="Logo">
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg">
            <div class="container container-hamburguer">
                <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbar10">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse" id="navbar10">
                    <ul class="navbar-nav nav-fill w-100">
                        <li class="nav-item active">
                            <a class="nav-link" href="./index.php">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./about.php" data-translate="menu_acerca_de_top"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./coaching.php" data-translate="menu_coaching_top"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./conferencias.php" data-translate="menu_conferencias_top"></a>
                        </li>
                        <?php if (substr($_SERVER['REQUEST_URI'], 1, 2) == 'es'): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-translate="menu_cursos_top"></a>
                            </li>
                        <?php endif ?>
                        <li class="nav-item">
                            <a class="nav-link" href="#">RECURSOS GRATUITOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./contacto.php" data-translate="menu_contacto_top"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./libros.php" data-translate="menu_libros_top"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 containerAulaVirtual">
                <h1 class="aulaVirtual" data-translate="curso_header"></h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 containerClubMiembros">
                <h3 class="text-center" data-translate="curso_titulo"></h3>
                <div class="containerCopyMiembros">
                    <div class="clubInfluencia">
                        <h4 data-translate="curso_contenido"></h4>
                        <p class="textInfluencia" data-translate="curso_info"></p>
                        <a href="<?php echo substr($_SERVER['REQUEST_URI'], 1, 2) == 'en' ? 'https://www.meetup.com/es-ES/Cairns-single-mums-Meetup/': 'https://madre-soltera-escuela.teachable.com/p/madre-magnetica-y-con-poder' ?>" class="btnClub" data-translate="curso_boton"></a>
                    </div>
                    <div class="curso1">
                        <div class="containerBienvenidaClub">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php if (substr($_SERVER['REQUEST_URI'], 1, 2) == 'es'): ?>
    
    <!-- ONLY IN SPANISH -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 containerVideoCursos">
                <div class="containerVideoTrabajemos">
                    <iframe src="https://www.youtube.com/embed/amyIcctL18k" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 containerClubMiembros">
                <div class="containerCopyMiembros">
                    <div class="clubInfluencia">
                        <h4>audiolibro: GUÍA DE LA MADRE SOLTERA</h4>
                        <p class="textInfluencia">
                            EL PASO A PASO: COMO APRENDER A USAR TUS LECCIONES DE VIDA PARA CONSTRUIR UNA NUEVA VIDA FELIZ
                        </p>
                        <a href="https://soundcloud.com/lilibeth-pinto-125601672/sets/guia-madre-soltera-el-paso-a/s-2P1ak" class="btnClub">ÚNETE AL CURSO</a>
                    </div>
                    <div class="curso2">
                        <div class="containerBienvenidaClub">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 containerVideoCursos">
                <div class="containerVideoTrabajemos">
                    <iframe src="https://www.youtube.com/embed/r3uOnqyYdOo" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 containerClubMiembros">
                <div class="containerCopyMiembros">
                    <div class="clubInfluencia">
                        <h4>EL RENACER DE UNA MADRE</h4>
                        <p class="textInfluencia">
                            En el encuentro con la pérdida de un ser que amamos durante un tiempo, siempre habrá que sentirlo,
                            vivirlo para poder renacer. Cuando hablamos a qué es el duelo, nos referimos a un dolor grande,
                            porque estabamos acostumbrados a ciertas dinamicas con aquella persona.
                            Sentimos que su paso nos ha dejado una huella que no se puede superar facilmente.
                            Creo que después de haber escrito un libro sobre el duelo basado en mi propia experiencia
                            y la de otras personas y haciendo este curso, se que todo se puede superar.
                            Hemos sido enseñados a depender del mundo que nos rodea y por eso sufrimos.
                            Necesitamos que esa persona o situación no ocurra para que yo sea feliz.
                        </p>
                        <a href="https://madre-soltera-escuela.teachable.com/p/renacer-de-una-madre" class="btnClub">ÚNETE AL CURSO</a>
                    </div>
                    <div class="curso3">
                        <div class="containerBienvenidaClub">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 containerVideoCursos">
                <div class="containerVideoTrabajemos">
                    <iframe src="https://www.youtube.com/embed/jJ-_yAznuTc" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- END ONLY IN SPANISH -->

    <?php endif; ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 footerContainer">
                <div class="footer">
                    <div class="footerParte1">
                        <div class="logoFooter">
                            <img src="./img/logo2.png" width="250px" height="100px">
                        </div>
                        <div class="menuFooter">
                            <a href="./index.php">Home &nbsp;/&nbsp;</a>
                            <a href="./about.php" data-translate="menu_acerca_de_footer"></a>
                            <a href="./coaching.php" data-translate="menu_coaching_footer"></a>
                            <a href="./conferencias.php" data-translate="menu_conferencias_footer"></a>
                            <?php if (substr($_SERVER['REQUEST_URI'], 1, 2) == 'es'): ?>
                                <a href="#" data-translate="menu_cursos_footer"></a>
                            <?php endif ?>
                            <a href="#">&nbsp; Recursos Gratuitos &nbsp;/&nbsp;</a>
                            <a href="./contacto.php" data-translate="menu_contacto_footer"></a>
                            <a href="./libros.php" data-translate="menu_libros_footer"></a>
                        </div>
                    </div>
                    <div class="footerParte2">
                        <div class="redesSociales">
                            <a href="https://plus.google.com/u/0/103756068845122250059" target="_blank">
                                <i class="fab fa-google-plus-g"></i>
                            </a>
                            <a href="https://twitter.com/tumagiaytupoder/" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="https://www.instagram.com/madresolteraextraordinaria/" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://www.youtube.com/channel/UC_5uOkeGKBi8pFBOzFJZMHw" target="_blank">
                                <i class="fab fa-youtube"></i>
                            </a>
                            <a href="https://www.facebook.com/tumagiaytupoder" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </div>
                        <div class="derechosReservados">
                            <p>Copyright &copy; 2018 by Lilibeth Pinto</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery first -->
    <script type="text/javascript" src="./js/jquery-3.3.1.min.js"></script>
    <!-- then Multilingual library -->
    <script type="text/javascript" src="./js/translations.js"></script>
    <!-- then Bootstrap JS -->
    <script type="text/javascript" src="./js/bootstrap.min.js"></script>
</body>

</html>