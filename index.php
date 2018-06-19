<!doctype html>
<html lang="<?php echo substr($_SERVER['REQUEST_URI'], 1, 2) ?>">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- Touch Icons - iOS and Android 2.1+ 180x180 pixels in size. -->
    <link rel="apple-touch-icon-precomposed" href="./img/fav-180x180.png">
    <!-- Firefox, Chrome, Safari, IE 11+ and Opera. 196x196 pixels in size. -->
    <link rel="icon" href="./img/fav-196x196.png">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
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
                            <a class="nav-link" href="#">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./about.php" data-translate="menu_acerca_de_top"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./coaching.php">COACHING</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./conferencias.php" data-translate="menu_conferencias_top"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./cursos.php" data-translate="menu_cursos_top"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./blog/">BLOG</a>
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
    <header>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active item-1">
                    <div class="container-copy copySlider1">
                        <h3 class="text-center" data-translate="home_slider_1_1"></h3>
                        <h3 data-translate="home_slider_1_2"></h3>
                        <h1 data-translate="home_slider_1_3"></h1>
                        <div class="btnCopy">
                            <a href="#descargaGratis" id="btnForm" data-translate="home_slider_1_boton"></a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item item-2">
                    <div class="container-copy">
                        <h3 class="text-center" data-translate="home_slider_2_1"></h3>
                        <h1 data-translate="home_slider_2_2"></h1>
                        <h5 data-translate="home_slider_2_3"></h5>
                        <div class="btnCopy">
                            <a target="_blank" href="https://www.facebook.com/groups/1007559569392241/" data-translate="home_slider_2_boton"></a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item item-3">
                    <div class="container-copy copySlider3">
                        <h3 data-translate="home_slider_3_1"></h3>
                        <h1 data-translate="home_slider_3_2"></h1>
                        <h4 data-translate="home_slider_3_3"></h4>
                        <div class="btnCopy">
                            <a href="./coaching.php" data-translate="home_slider_3_boton"></a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <i class="fas fa-arrow-circle-left"></i>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </header>
    <div class="container-fluid">
        <div class="row">
            <div class="containerMarcasLilibeth">
                <div class="marcaLilibeth">
                    <h2>&nbsp;</h2>
                    <img src="./img/1.png" width="150px" height="150px">
                </div>
                <div class="marcaLilibeth">
                    <h3 data-translate="home_he_aparecido"></h3>
                    <center>
                        <img src="./img/2.png" width="150px" height="150px">
                    </center>
                </div>
                <div class="marcaLilibeth">
                    <h2>&nbsp;</h2>
                    <img src="./img/3.png" width="150px" height="150px">
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 personalImage">
                <div class="copyPersonalImage">
                    <h2 data-translate="home_frase_1"></h2>
                    <h3>LILIBETH PINTO</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row videoCopy">
            <div class="col-12 col-md-6 copy">
                <div class="copyContainer">
                    <h2 data-translate="home_titulo_mision"></h2>
                    <h6 data-translate="home_mision"></h6>
                </div>
            </div>
            <div class="col-12 col-md-6 video">
                <iframe src="https://www.youtube.com/embed/nwwzxwz0UBM" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 personalImageCard">
                <div class="copyPersonalImageCard">
                    <h3 class="text-center" data-translate="home_acerca_1"></h3>
                    <h2 class="text-center">Lilibeth Pinto</h2>
                    <hr class="line">
                    <p class="parrafoCard" data-translate="home_acerca_2"></p>
                    <div class="text-center containerBtnCard">
                        <a href="./about.php" data-translate="home_acerca_boton"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card text-center">
        <div class="card-header" data-translate="home_ayuda_1"></div>
        <div class="card-body">
            <h4 class="card-title" data-translate="home_ayuda_2"></h4>
            <div class="row">
                <div class="col-md-6">
                    <p class="card-text" data-translate="home_ayuda_3"></p>
                </div>
                <div class="col-md-6 segundoParrafo">
                    <p class="card-text" data-translate="home_ayuda_4"></p>
                </div>
            </div>
        </div>
    </div>
    <div class="testimonials">
        <h1 data-translate="home_testimonios"></h1>
        <div class="test-body">
            <div class="item">
                <img src="./img/testimonio1.jpg">
                <div class="name">Tania</div>
                <small class="desig"></small>
                <p data-translate="home_testimonio_1"></p>
            </div>
            <div class="item">
                <img src="./img/testimonio2.jpg">
                <div class="name">Lili</div>
                <small class="desig"></small>
                <p data-translate="home_testimonio_2"></p>
            </div>
            <div class="item">
                <img src="./img/testimonio3.jpg">
                <div class="name">Edith</div>
                <small class="desig"></small>
                <p data-translate="home_testimonio_3"></p>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 descarga">
                <div class="containerDescarga">
                    <h4 id="descargaGratis" data-translate="home_lead_1"></h4>
                    <h2 class="nuevoParrafoForm" data-translate="home_lead_2"></h2>
                    <h6 data-translate="home_lead_3"></h6>
                    <form class="form-inline formDescarga">
                        <div class="containerNombre">
                            <label class="sr-only" for="inlineFormInput" data-translate="home_lead_nombre"></label>
                            <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" required="required" maxlength="50" name="FNAME" id="mce-FNAME"
                                placeholder="<?php echo substr($_SERVER['REQUEST_URI'], 1, 2) == 'en' ? 'NAME': 'NOMBRE' ?>">
                        </div>
                        <div class="containerEmail">
                            <label class="sr-only" for="inlineFormInputGroup">Email</label>
                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                <input type="text" class="form-control" placeholder="<?php echo substr($_SERVER['REQUEST_URI'], 1, 2) == 'en' ? 'YOUR EMAIL': 'TU CORREO' ?>"
                                    maxlength="50" name="EMAIL" id="mce-EMAIL" required="required">
                            </div>
                        </div>
                        <div class="containerBtnDescargar">
                            <button type="submit" class="btn btn-primary btnDescargar" data-translate="home_lead_boton"></button>
                        </div>
                    </form>
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
                            <a href="#">Home &nbsp;/&nbsp;</a>
                            <a href="./about.php" data-translate="menu_acerca_de_footer"></a>
                            <a href="./coaching.php">&nbsp; Coaching &nbsp;/&nbsp;</a>
                            <a href="./conferencias.php" data-translate="menu_conferencias_footer"></a>
                            <a href="./cursos.php" data-translate="menu_cursos_footer"></a>
                            <a href="./blog/">&nbsp; Blog &nbsp;/&nbsp;</a>
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

    <script src="https://unpkg.com/sweetalert2@7.19.3/dist/sweetalert2.all.min.js"></script>
    <!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
    <script src="https://unpkg.com/promise-polyfill@7.1.0/dist/promise.min.js"></script>

    <script>
        $('#btnForm').click(() => {
            $('html, body').animate({
                scrollTop: $('.containerDescarga').offset().top
            }, 500);
        });

        $('#carouselExample').on('slide.bs.carousel', function (e) {

            var $e = $(e.relatedTarget);
            var idx = $e.index();
            var itemsPerSlide = 4;
            var totalItems = $('#carouselExample .carousel-item').length;

            if (idx >= totalItems - (itemsPerSlide - 1)) {
                var it = itemsPerSlide - (totalItems - idx);
                for (var i = 0; i < it; i++) {
                    // append slides to end
                    if (e.direction == "left") {
                        $('#carouselExample .carousel-item').eq(i).appendTo('#carouselExample .carousel-inner');
                    } else {
                        $('#carouselExample .carousel-item').eq(0).appendTo('#carouselExample .carousel-inner');
                    }
                }
            }
        });


        $('#carouselExample').carousel({
            interval: 2000
        });


        $(document).ready(function () {

            /* show lightbox when clicking a thumbnail */
            $('a.thumb').click(function (event) {
                event.preventDefault();
                var content = $('.modal-body');
                content.empty();
                var title = $(this).attr("title");
                $('.modal-title').html(title);
                content.html($(this).html());
                $(".modal-profile").modal({ show: true });
            });

            $('.formDescarga').on('submit', function (e) {
                e.preventDefault();

                var name = $("#mce-FNAME").val();
                var email = $("#mce-EMAIL").val();

                $.post("./signup/alta_pdf.php", { name: name, email: email })
                    .done(function () {
                        // sign up new member success
                        var link = document.createElement('a');
                        document.body.appendChild(link);
                        link.href = "./assets/GUIA-3-PASOS.pdf";
                        link.click();
                    })
                    .fail(function (err) {

                        // handle and display the corresponding error message
                        var errorMsg = '';
                        switch (err.responseText) {
                            case email + " is already a list member":
                                errorMsg = "<?php echo substr($_SERVER['REQUEST_URI'], 1, 2) == 'en' ? 'Your email has already been registered! Try another': '¡Tu email ya ha sido registrado! Prueba con otro.' ?>";
                                break;
                            case email + " is not a valid email address":
                            case "email address is blank":
                                errorMsg = "<?php echo substr($_SERVER['REQUEST_URI'], 1, 2) == 'en' ? 'Your email address is invalid! Try another': '¡Tu dirección de correo es inválida! Prueba con otra.' ?>";
                                break;
                            case name + " is not a valid name value":
                                errorMsg = "<?php echo substr($_SERVER['REQUEST_URI'], 1, 2) == 'en' ? 'Name invalid! Try another': '¡Nombre inválido! Prueba con otro.' ?>";
                                break;
                            default:
                                errorMsg = "<?php echo substr($_SERVER['REQUEST_URI'], 1, 2) == 'en' ? 'Something went wrong when trying to register! Try again': '¡Algo salió mal al intentar registrarte! Inténtalo otra vez.' ?>";
                        }

                        swal({
                            type: 'error',
                            title: 'Uups...',
                            text: errorMsg
                        });

                    })
                    .always(function () {
                        $('.formDescarga').trigger("reset");
                    });
            });
        });

    </script>
</body>

</html>