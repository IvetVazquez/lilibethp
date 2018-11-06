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
                <a class="nav-link" href="./cursos.php" data-translate="menu_cursos_top"></a>
              </li>
            <?php endif ?>
            <li class="nav-item">
              <a class="nav-link" href="#">RECURSOS GRATUITOS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./contacto.php" data-translate="menu_contacto_top"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" data-translate="menu_libros_top"></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-12 containerAulaVirtual">
        <h2 class="aulaVirtual" data-translate="titulo_libros"></h2>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-12 containerClubMiembros">
        <h3 class="text-center" data-translate="subtitulo_libros"></h3>

        <div class="containerCopyMiembros">

          <div class="libro1 <?php echo substr($_SERVER['REQUEST_URI'], 1, 2) == 'en' ? 'libro1-english': '' ?>">
            <div class="containerBienvenidaClub">
            </div>
          </div>
          <div class="clubInfluencia">
            <h4 data-translate="titulo_libro_1"></h4>
            <p class="textInfluencia" data-translate="contenido_libro_1"></p>
            <?php if (substr($_SERVER['REQUEST_URI'], 1, 2) == 'en'): ?>
              <a href="https://www.amazon.com.au/HURTS-LOSE-CONFRONT-WITHOUT-EMOTIONAL-ebook/dp/B07D2B5Y6B" class="btnClub" data-translate="boton_libro"></a>
            <?php else: ?>
              <a href="https://www.amazon.com.au/Me-duele-perder-superar-sufrimiento-ebook/dp/B07CYTK29R" class="btnClub" data-translate="boton_libro"></a>
            <?php endif ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-12 containerClubMiembros">
        <div class="containerCopyMiembros">
          <div class="libro2">
            <div class="containerBienvenidaClub">
            </div>
          </div>
          <div class="clubInfluencia">
            <h4 data-translate="titulo_libro_2"></h4>
            <p class="textInfluencia" data-translate="contenido_libro_2"></p>
            <?php if (substr($_SERVER['REQUEST_URI'], 1, 2) == 'en'): ?>
              <a href="https://www.amazon.com/FORTUNA-SER-MADRE-Transforma-emocionalmente-ebook/dp/B07HJVSKHK" class="btnClub" data-translate="boton_libro"></a>
            <?php else: ?>
              <a href="https://www.amazon.com/FORTUNA-SER-MADRE-Transforma-emocionalmente-ebook/dp/B07HJVSKHK" class="btnClub" data-translate="boton_libro"></a>
            <?php endif ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php if (substr($_SERVER['REQUEST_URI'], 1, 2) == 'es'): ?>
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 containerClubMiembros">
          <div class="containerCopyMiembros">
            <div class="libro3">
              <div class="containerBienvenidaClub">
              </div>
            </div>
            <div class="clubInfluencia">
              <h4 data-translate="titulo_libro_3"></h4>
              <p class="textInfluencia" data-translate="contenido_libro_3"></p>
              <a href="https://www.amazon.com/CANCER-SIN-MIEDO-visión-Spanish-ebook/dp/B06WD67JSY" class="btnClub" data-translate="boton_libro"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php endif ?>

  <?php if (substr($_SERVER['REQUEST_URI'], 1, 2) == 'es'): ?>
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 containerClubMiembros">
          <div class="containerCopyMiembros">
            <div class="libro4">
              <div class="containerBienvenidaClub">
              </div>
            </div>
            <div class="clubInfluencia">
              <h4 data-translate="titulo_libro_4"></h4>
              <p class="textInfluencia" data-translate="contenido_libro_4"></p>
              <a href="https://www.amazon.com/Nuevo-Despertar-AUTOCURACIÓN-Aprende-Spanish-ebook/dp/B01FYYG3D4" class="btnClub" data-translate="boton_libro"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php endif ?>

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
                                <a href="./cursos.php" data-translate="menu_cursos_footer"></a>
                            <?php endif ?>
                          <a href="#">&nbsp; Recursos Gratuitos &nbsp;/&nbsp;</a>
                          <a href="./contacto.php" data-translate="menu_contacto_footer"></a>
                          <a href="#" data-translate="menu_libros_footer"></a>
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