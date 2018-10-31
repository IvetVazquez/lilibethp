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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.transitions.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg"
        crossorigin="anonymous">
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
                            <a class="nav-link" href="#" data-translate="menu_coaching_top"></a>
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
                            <a class="nav-link" href="./libros.php" data-translate="menu_libros_top"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 containerCoaching">
                <div class="copyCoaching">
                    <h3 data-translate="Coaching_1"></h3>
                    <h1 class="mujeresExtraordinarias" data-translate="Coaching_2"></h1>
                    <h3 data-translate="Coaching_3"></h3>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 titleTepasa">
                <h4 data-translate="Coaching_4"></h4>
            </div>
            <div class="col-12 col-md-6 col-lg-3 tePasa">
                <img src="./img/coaching1.jpg" class="tePasaimg">
                <p data-translate="Coaching_5"></p>
            </div>
            <div class="col-12 col-md-6 col-lg-3 tePasa">
                <img src="./img/coaching2.jpg" class="tePasaimg">
                <p data-translate="Coaching_6"></p>
            </div>
            <div class="col-12 col-md-6 col-lg-3 tePasa">
                <img src="./img/coaching3.jpg" class="tePasaimg">
                <p data-translate="Coaching_7"></p>
            </div>
            <div class="col-12 col-md-6 col-lg-3 tePasa">
                <img src="./img/coaching4.jpg" class="tePasaimg">
                <p data-translate="Coaching_8"></p>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 identificada">
                <h4 data-translate="Coaching_9"></h4>
                <h6 data-translate="Coaching_10"></h6>
                <h4 class="parrafoLastIdentificada" data-translate="Coaching_11"></h4>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 containerTrabajemosJuntas">
                <div class="containerVideoTrabajemos">
                    <iframe src="<?php echo substr($_SERVER['REQUEST_URI'], 1, 2) == 'en' ? 'https://jwp.io/s/jvyXTkKW': 'https://www.youtube.com/embed/JlVshNREzuQ' ?>" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 conoceteBien">
                <h4 data-translate="Coaching_12"></h4>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 titleBeneficios">
                <h2 data-translate="Coaching_13">
                    </h3>
                    <h5 data-translate="Coaching_14"></h5>
            </div>
            <div class="containerBeneficios">
                <div class="beneficios">
                    <h3 data-translate="Coaching_15"></h3>
                    <p data-translate="Coaching_16"></p>
                </div>
                <div class="beneficios">
                    <h3 data-translate="Coaching_17">
                        </h2>
                        <p data-translate="Coaching_18"></p>
                </div>
                <div class="beneficios">
                    <h3 data-translate="Coaching_19"></h3>
                    <p data-translate="Coaching_20"></p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 titleProgramaCoaching">
                <h2 data-translate="Coaching_21"></h2>
            </div>
            <div class="containerProgramaCoaching">
                <div class="programaCoaching">
                    <i class="fas fa-heart heartCoaching"></i>
                    <h5 data-translate="Coaching_22"></h5>
                    <p data-translate="Coaching_23"></p>
                </div>
                <div class="programaCoaching">
                    <i class="fas fa-heart heartCoaching"></i>
                    <h5 data-translate="Coaching_24"></h5>
                    <p data-translate="Coaching_25"></p>
                </div>
                <div class="programaCoaching">
                    <i class="fas fa-heart heartCoaching"></i>
                    <h5 data-translate="Coaching_26"></h5>
                    <p data-translate="Coaching_27"></p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 titleProgramaCoaching">
                <h2 data-translate="Coaching_28"></h2>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="testimonial-slider" class="owl-carousel testimonial-slider">
                    <div class="testimonial">
                        <div class="pic">
                            <img src="./img/testimonio1.jpg" alt="">
                        </div>
                        <h3 class="testimonial-title">
                            Tania
                        </h3>
                        <p class="description" data-translate="Coaching_29"></p>
                    </div>
                    <div class="testimonial">
                        <div class="pic">
                            <img src="./img/testimonio2.jpg" alt="">
                        </div>
                        <h3 class="testimonial-title">
                            Lili
                        </h3>
                        <p class="description" data-translate="Coaching_30"></p>
                    </div>
                    <div class="testimonial">
                        <div class="pic">
                            <img src="./img/testimonio3.jpg" alt="">
                        </div>
                        <h3 class="testimonial-title">
                            Edith
                        </h3>
                        <p class="description" data-translate="Coaching_31"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 containerCoachingDescripcion">
                <div class="containerCopyDescripcion">
                    <h3 data-translate="Coaching_32"></h3>
                    <p data-translate="Coaching_33"></p>
                    <p data-translate="Coaching_34"></p>
                    <p data-translate="Coaching_35"></p>
                </div>
            </div>
        </div>
    </div>
    <section class="pricing-table">
        <div class="container">
            <div class="block-heading">
                <h2></h2>
            </div>
            <div class="row justify-content-md-center">
                <div class="col-md-5 col-lg-4">
                    <div class="item">
                        <div class="heading">
                            <h3 data-translate="Coaching_36"></h3>
                        </div>
                        <p data-translate="Coaching_38"></p>

                        <div class="price">
                            <h4>$25</h4>
                        </div>
                        <button data-translate="Coaching_39_boton" onclick="location.href='https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=lilibethpinto%40hotmail%2ecom&lc=AU&item_name=PAQUETE%20DE%20COACHING%201&amount=25%2e00&currency_code=AUD&button_subtype=services&bn=PP%2dBuyNowBF%3abtn_buynowCC_LG%2egif%3aNonHosted'"
                            class="btn btn-block btn-outline-primary btnTablaPrecios" type="submit">
                        </button>
                    </div>
                </div>
                <div class="col-md-5 col-lg-4">
                    <div class="item">
                        <div class="ribbon" data-translate="Coaching_37"></div>
                        <div class="heading">
                            <h3>PRO</h3>
                        </div>
                        <p data-translate="Coaching_40"></p>
                        <div class="price">
                            <h4>$50</h4>
                        </div>
                        <button data-translate="Coaching_39_boton" onclick="location.href='https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=lilibethpinto%40hotmail%2ecom&lc=AU&item_name=PAQUETE%20DE%20COACHING%202&amount=50%2e00&currency_code=AUD&button_subtype=services&no_note=0&bn=PP%2dBuyNowBF%3abtn_buynowCC_LG%2egif%3aNonHostedGuest'"
                            class="btn btn-block btn-primary btnTablaPreciosActivo" type="submit">
                        </button>
                    </div>
                </div>
                <div class="col-md-5 col-lg-4">
                    <div class="item item-last">
                        <div class="heading">
                            <h3>PREMIUM</h3>
                        </div>
                        <p data-translate="Coaching_41"></p>
                        <div class="price">
                            <h4>$150</h4>
                        </div>
                        <button data-translate="Coaching_39_boton" onclick="location.href='https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=lilibethpinto%40hotmail%2ecom&lc=AU&item_name=PAQUETE%20DE%20COACHING%203&amount=150%2e00&currency_code=AUD&button_subtype=services&no_note=0&bn=PP%2dBuyNowBF%3abtn_buynowCC_LG%2egif%3aNonHostedGuest'"
                            class="btn btn-block btn-outline-primary btnTablaPrecios" type="submit">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 containerDudas">
                <div class="containerCopyDudas">
                    <h5 data-translate="Coaching_42"></h5>
                    <a href="./contacto.php" data-translate="Coaching_43"></a>
                </div>
            </div>
        </div>
    </div>
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
                            <a href="#" data-translate="menu_coaching_footer"></a>
                            <a href="./conferencias.php" data-translate="menu_conferencias_footer"></a>
                            <?php if (substr($_SERVER['REQUEST_URI'], 1, 2) == 'es'): ?>
                                <a href="./cursos.php" data-translate="menu_cursos_footer"></a>
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

    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
    <script type="text/javascript">

        $(document).ready(function () {
            $("#testimonial-slider").owlCarousel({
                items: 1,
                itemsDesktop: [1000, 1],
                itemsDesktopSmall: [979, 1],
                itemsTablet: [768, 1],
                pagination: true,
                navigation: false,
                navigationText: ["", ""],
                slideSpeed: 1000,
                singleItem: true,
                transitionStyle: "fade",
                autoPlay: true
            });
        });

    </script>
</body>

</html>