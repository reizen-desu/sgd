<!-- CABECALHO -->

<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container-xxl">
        <a href="#intro" class="navbar-brand">
            <img id="nav-logo" src="assets/img/logo3.jpg" class="fw-bold text-secondary">
        </a>

        <!-- Botao de activação para dispositivos móveis -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- links de navegação -->
        <div id="main-nav" class="collapse navbar-collapse justify-content-end align-center">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#intro" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="/SGD/about.php" class="nav-link">Sobre</a>
                </li>
                <li class="nav-item">
                    <!-- <a href="SGD/servicos.html" class="nav-link">
                        NOTIFICACOES
                        </a> -->
                </li>

                <!-- Mostar os items de registro/login caso ainda não tenha entrado no sistema -->
                <?php if (!isset($_SESSION['tipo_usuario'])) { ?>
                <li class="nav-item">
                    <button class="mx-2 btn btn-outline-secondary" data-bs-toggle="modal"
                        data-bs-target="#register">Registar</button>
                </li>
                <li class="nav-item">
                    <!-- <a href="/login.html" class="btn btn-outline-primary">Login</a> -->
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#login">Login</button>
                </li>

                <!-- Caso esteja logado, mostrar o nome e outras opções -->
                <?php } else { ?>
                <li class="nav-item dropdown dropstart">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Perfil
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Meu perfil</a></li>
                        <li><a class="dropdown-item" href="#">Notificações</a></li>
                        <li><a class="dropdown-item btn-danger text-danger" href="#"
                                onclick="function hi(){window.location = 'controller/logout.php'};hi()">Sair</a>
                        </li>
                    </ul>
                </li>
                <!-- <li class="nav-item">
                    <button class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#login">Notifications</button>
                </li> -->
                <?php } ?>

            </ul>
        </div>
    </div>
</nav>
<!-- FIM DO CABEÇALHO -->