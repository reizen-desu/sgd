<?php require 'model/connection.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Inicio</title>
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
</head>

<body>


    <!-- BACKGROUND IMAGE -->
    <div class="bg-image"></div>

    <!-- HEADER -->
    <?php require_once 'view/navbar.php'; ?>


    <!-- CONTEUDO DA PÁGINA -->

    <?php

    if (isset($_SESSION['tipo_usuario'])) {
        if (isset($_SESSION['tipo_usuario']) && $_SESSION['tipo_usuario'] == 'diarista') {
            require_once 'view/tela_diarista.php';
        } else {
            require_once 'view/tela_visitante.php';
        }
    } else {
        require_once 'view/tela_principal.php';
    }

    ?>

    <!-- Formulario de login -->
    <?php require_once 'view/formulario_login.php'; ?>
    <!-- Formulario de registro -->
    <?php require_once 'view/formulario_registro.php'; ?>

    <br><br>

    <!-- ANUNCIO PARA SE REGISTRAR -->
    <div id="anuncio" class="text-center text-white" style="background-color: #0a4275;">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <section class="pb-2">
                <p class="d-flex justify-content-center align-items-center">
                    <span class="me-3">É uma diarista ou está procurando por uma?</span>
                    <button type="button" class="btn btn-outline-light btn-rounded" data-bs-toggle="modal"
                        data-bs-target="#register">
                        Então registre-se!
                    </button>
                </p>
            </section>
        </div>
    </div>



    <!-- RODAPÉ -->
    <?php require_once 'view/footer.php'; ?>


    <script src="assets/js/functions.js"></script>
    <!-- Bootstrap JavaScript Libraries -->
    <script type="text/javascript" src="assets/js/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script>
    /* When the user scrolls down, hide the navbar. When the user scrolls up, show the navbar */
    var prevScrollpos = window.pageYOffset;
    window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos) {
            document.getElementById("navbar").style.top = "0";
        } else {
            document.getElementById("navbar").style.top = "-50px";
        }
        prevScrollpos = currentScrollPos;
    }
    </script>
</body>

</html>