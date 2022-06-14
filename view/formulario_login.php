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
                <form>
                    <div class="form-group">
                        <label for="emailLogin">Email</label>
                        <input type="email" class="form-control" id="emailLogin" placeholder="Introduza seu email"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="passwordLogin">Password</label>
                        <input type="password" class="form-control" id="passwordLogin" placeholder="Password" required>
                    </div>
                    <!-- <br> -->
                    <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                </form>

            </div> <!-- modal body -->
            <div class="modal-footer">
                <button class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button class="btn btn-primary">Entrar</button>
            </div>

        </div> <!-- modal content -->
    </div> <!-- modal dialog -->
</section>