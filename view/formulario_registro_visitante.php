<div class="text-muted">
    Registando como um visitante, você poderá requisitar algum serviço à diaristas e poderá publicar seus serviços.
    Preencha os campos abaixo para se registrar.
</div>

<form action="controller/registerController.php" method="POST">
    <div class="row">
        <div class="form-group col">
            <div class="form-floating">
                <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" required>
                <label for="nome" class="form-label">Nome</label>
            </div>
            <!-- <input type="text" class="form-control" id="nome" placeholder="Introduza seu nome" pattern="[^0-9]+" required> -->
        </div>

        <div class="form-group col">
            <div class="form-floating">
                <input type="text" class="form-control" id="apelido" name="apelido" placeholder="Apelido" required>
                <label for="apelido" class="form-label">Apelido</label>
            </div>
            <!-- <input type="text" class="form-control" id="apelido" placeholder="Introduza seu apelido" pattern="[^0-9]+" required> -->
        </div>
    </div>

    <br>

    <div class=" form-floating">
        <input type="email" class="form-control" id="email" name="email" placeholder="Introduza seu email" required>
        <label for="email" class="form-label">Email</label>
    </div>

    <!-- A confirmacao da senha é controlado por uma script javascript -->
    <div class="row">
        <div class="form-group col">
            <label for="password">Senha</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Senha"
                onchange="validarSenha();" required>
        </div>

        <div class="form-group col">
            <label for="confirm_password">Confirmar senha</label>
            <input type="password" class="form-control" id="confirm_password" placeholder="Confirme a senha"
                onkeyup="validarSenha();" required>
        </div>
    </div>

    <br>


    <div class="form-group">
        <label for="nif">Contacto</label>
        <input type="digit" class="form-control" id="contacto" name="contacto" placeholder="84 0000 000" required>
    </div>

    <div class="form-group">
        <label for="morada">Morada</label>
        <input type="text" class="form-control" id="morada" name="morada" placeholder="Introduza o seu bairro">
    </div>

    <hr>
    <div class="d-grid gap-2 col-6 mx-auto">
        <button type="submit" value="registar_visitante" class="btn btn-primary btn-block">Registrar nova
            conta</button>
    </div>
</form>