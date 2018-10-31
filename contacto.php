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
                            <a class="nav-link" href="#" data-translate="menu_contacto_top"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./libros.php" data-translate="menu_libros_top"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="container-fluid containerContacto">
        <div class="row">
            <div class="col-12 col-lg-6">
                <form class="formContacto">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="nombre" data-translate="home_lead_nombre"></label>
                            <input type="text" class="form-control" id="nombre" required="required">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" required="required">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="phone">Whatsapp</label>
                            <input type="text" class="form-control" id="whatsapp" required="required">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="servicio" data-translate="contacto_enteraste"></label>
                            <select class="form-control" id="findme" required="required">
                                <option value="PAGINA DE FACEBOOK" data-translate="contacto_by_facebook_page"></option>
                                <option value="LIBRO" data-translate="contacto_by_book"></option>
                                <option selected value="INSTAGRAM">Instagram</option>
                                <option value="GRUPO DE FACEBOOK" data-translate="contacto_by_facebook_group"></option>
                                <option value="CONFERENCIA" data-translate="contacto_by_conference"></option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="mensaje" data-translate="contacto_message"></label>
                            <textarea class="form-control" id="mensaje" rows="4" required="required"></textarea>
                        </div>
                        <div class="col-12 containerbtnContacto">
                            <button type="submit" class="btn btn-primary" data-translate="contacto_boton"></button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-12 col-lg-6 containerMap">
                <div id="map"></div>
                <script>
                    var map;

                    function initMap() {
                        map = new google.maps.Map(document.getElementById('map'), {
                            center: { lat: -16.9005427, lng: 145.7355348 },
                            zoom: 13
                        });
                    }

                </script>
                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-A6yYy1v0eeU1rxkxCytaQ-cFS1uNww4&callback=initMap" async
                    defer></script>
                <h6 class="text-center">
                    <strong data-translate="contacto_1"></strong> Edge Hill, Cairns, Australia</h6>
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
                            <a href="./coaching.php" data-translate="menu_coaching_footer"></a>
                            <a href="./conferencias.php" data-translate="menu_conferencias_footer"></a>
                            <?php if (substr($_SERVER['REQUEST_URI'], 1, 2) == 'es'): ?>
                                <a href="./cursos.php" data-translate="menu_cursos_footer"></a>
                            <?php endif ?>
                            <a href="#">&nbsp; Recursos Gratuitos &nbsp;/&nbsp;</a>
                            <a href="#" data-translate="menu_contacto_footer"></a>
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

        $(document).ready(function () {

            $('.formContacto').on('submit', function (e) {
                e.preventDefault();

                var name = $.trim($("#nombre").val());
                var email = $.trim($("#email").val());
                var whatsapp = $.trim($("#whatsapp").val());
                var findme = $("#findme").val();
                var message = $.trim($("#mensaje").val());

                swal({
                    title: "<?php echo substr($_SERVER['REQUEST_URI'], 1, 2) == 'en' ? 'Your message is being sent': 'Estamos enviado tu mensaje' ?>",
                    text: "<?php echo substr($_SERVER['REQUEST_URI'], 1, 2) == 'en' ? "It's just a moment": 'Solo será un momento' ?>",
                        onOpen: function() {
                        swal.showLoading();
                    }
                });

                $.post("./signup/alta_contact_form.php",
                    {
                        name: name,
                        email: email,
                        whatsapp: whatsapp,
                        findme: findme,
                        message: message
                    })
                    .done(function () {
                        // display success message
                        swal({
                            type: 'success',
                            title: "<?php echo substr($_SERVER['REQUEST_URI'], 1, 2) == 'en' ? 'Success! Your message has been sent': '¡Éxito! Mensaje enviado' ?>",
                            text: "<?php echo substr($_SERVER['REQUEST_URI'], 1, 2) == 'en' ? 'You will be contacted soon': 'Serás contactada en breve' ?>",
                            showConfirmButton: false,
                            timer: 5000
                        });
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
                                errorMsg = "<?php echo substr($_SERVER['REQUEST_URI'], 1, 2) == 'en' ? 'Invalid name! Try another': '¡Nombre inválido! Revisa que tu nombre sea correcto.' ?>";
                                break;
                            case whatsapp + " is not a valid whatsapp value":
                                errorMsg = "<?php echo substr($_SERVER['REQUEST_URI'], 1, 2) == 'en' ? 'Invalid Whatsapp number! Try another': '¡Whatsapp inválido! Revisa que tu whatsap sea correcto.' ?>";
                                break;
                            case message + " is not a valid message value":
                                errorMsg = "<?php echo substr($_SERVER['REQUEST_URI'], 1, 2) == 'en' ? 'Invalid message! Try another': 'Mensaje inválido! Revisa que tu mensaje sea correcto.' ?>";
                                break;
                            default:
                                errorMsg = "<?php echo substr($_SERVER['REQUEST_URI'], 1, 2) == 'en' ? 'Something went wrong! Please try again': '¡Algo salió mal al intentar registrarte! Inténtalo otra vez.' ?>";
                        }

                        swal({
                            type: 'error',
                            title: 'Uups...',
                            text: errorMsg
                        });

                    })
                    .always(function () {
                        $('.formContacto').trigger("reset");
                    });
            });
        });

    </script>
</body>

</html>