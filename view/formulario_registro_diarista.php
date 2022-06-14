<p>O formulário abaixo se destina para diaristas, para entrar como visitante </p>
<p class="text-secondary">Preencha os campos abaixo para se registrar</p>
<form action="controller/registerController.php" method="POST">
    <div class="row">

        <div class="form-group col">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" placeholder="Introduza seu nome" pattern="[^0-9]+"
                required>
        </div>

        <div class="form-group col">
            <label for="apelido">Apelido</label>
            <input type="text" class="form-control" id="apelido" placeholder="Introduza seu apelido" pattern="[^0-9]+"
                required>
        </div>
    </div>

    <div class=" form-group">
        <label for="emailLogin">Email</label>
        <input type="email" class="form-control" id="emailLogin" name="emailLogin" placeholder="Introduza seu email"
            required>
    </div>

    <!-- A confirmacao da senha é controlado por uma script javascript -->
    <div class="row">
        <div class="form-group col">
            <label for="password">Senha</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password"
                onchange="validarSenha();" required>
        </div>

        <div class="form-group col">
            <label for="confirm_password">Confirmar senha</label>
            <input type="password" class="form-control" id="confirm_password" placeholder="Confirme a senha"
                onkeyup="validarSenha();" required>
        </div>
    </div>


    <div class="form-group">
        <label for="nif">Contacto</label>
        <input type="digit" class="form-control" id="contacto" name="contacto" placeholder="84 0000 000" required>
    </div>

    <div class="form-group">
        <label for="morada">Morada</label>
        <input type="text" class="form-control" id="morada" name="morada" placeholder="Introduza o seu bairro">
    </div>

    <!-- <label for="especialidade">Escolha sua especialidade(s)</label> -->
    <div class="form-group">
        <fieldset>
            <legend class="text-secondary">Especialidade</legend>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="especialidade1">
                <label class="form-check-label" for="especialidade1">
                    Limpeza
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="especialidade2">
                <label class="form-check-label" for="especialidade2">
                    Cozinheira
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="especialidade3">
                <label class="form-check-label" for="especialidade3">
                    Babá
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="especialidade4">
                <label class="form-check-label" for="especialidade4">
                    Outros
                </label>
            </div>
        </fieldset>
    </div>

    <!-- add user-type=diarista to send to php code -->
    <br>
    <div class="form-check">
        <label for="publicar">Publicar seu perfil na pagina?</label>
        </br>
        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="publicar" id="publicar" value="sim" checked>
            Sim
        </label>
        </br>
        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="publicar" id="publicar" value="nao">
            Não
        </label>
    </div>
    <hr>
    <div class="d-grid gap-2 col-6 mx-auto">
        <button type="submit" class="btn btn-primary btn-block">Registrar nova conta</button>
    </div>
</form>