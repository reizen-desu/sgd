<?php include_once 'model/connection.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Inicio</title>
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>


    <!-- BACKGROUND IMAGE -->
    <div class="bg-image"></div>


    <?php require_once 'view/navbar.php'; ?>

    <!-- CONTEUDO DA PÁGINA -->
    <br>
    <br>
    <br>
    <br>

    <?php require_once 'view/cartas.php'; ?>

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
    <script src="assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>
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