<!-- FORMULARIO DE LOGIN (Modal) -->
<section class="bg-light modal fade" id="login" aria-labelledby="modal-title">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-title">Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <p class="text-secondary">Preencha os campos abaixo para entrar</p>

                <form id="loginForm" action="controller/loginController.php" method="POST">

                    <div class="form-floating mb-2">
                        <input type="email" name="email" class="form-control" id="emailLogin"
                            placeholder="nome@exemplo.com" required>
                        <label for="emailLogin">Email</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="passwordLogin" name="passwordLogin"
                            placeholder="Password" required>
                        <label for="passwordLogin">Senha</label>
                    </div>
                    <!-- <button type="submit" class="btn btn-primary">Entrar</button> -->
                </form>

            </div> <!-- modal body -->
            <div class="modal-footer">
                <button class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" form="loginForm" class="btn btn-primary">Entrar</button>
            </div>

        </div> <!-- modal content -->
    </div> <!-- modal dialog -->
</section>