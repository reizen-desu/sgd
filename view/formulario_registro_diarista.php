<div class="text-muted">
    Registando como uma diarista, você poderá publicar seus serviços e receber pedidos de visitantes. <br>
</div>

<p class="text-secondary">Preencha os campos abaixo para se registrar</p>
<form action="../controller/registerController.php" method="POST">
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
        <input type="email" class="form-control" id="emailLogin" name="emailLogin" placeholder="Introduza seu email"
            required>
        <label for="emailLogin" class="form-label">Email</label>
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

    <div class="form-check">
        <div class="col-1 col-form-label">Sexo</div>
        <!-- <label for="publicar">Sexo: </label> -->

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="sexo" value="M" id="sexo1">
            <label class="form-check-label" for="sexo1">
                Masculino
            </label>
        </div>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="sexo" value="F" id="sexo2">
            <label class="form-check-label" for="sexo2">
                Feminimo
            </label>
        </div>
    </div>

    <div class="row">
        <label for="data_nascimento" class="col-3 col-form-label">Data de nascimento</label>
        <div class="col-5">
            <div class="input-group date">
                <input type="date" class="form-control" name="data_nascimento" id="data_nascimento">

            </div>
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
        <fieldset class="border p-2">
            <legend class="float-none w-auto p-0 text-sm-center small" data-bs-toggle="tooltip"
                title="Obs: a diarista pode ter mais de uma especialidade, desde que tenha experiência suficiente.">
                Especialidade</legend>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="" id="especialidade1">
                <label class="form-check-label" data-bs-toggle="tooltip" data-bs-placement="right"
                    title="Limpeza consiste em varrer os ambientes, tirar o pó e sujeiras dos imóveis, fazer limpeza de vidros, pisos, paredes e dentre outras várias."
                    for="especialidade1">
                    Limpeza
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="" id="especialidade2">
                <label class="form-check-label" for="especialidade2" data-bs-toggle="tooltip"
                    title="Para quem precisa de sua roupa lavada, seja por via manual ou por meio de máquina de lavar.">
                    Lavar e secar
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="" id="especialidade3">
                <label class="form-check-label" for="especialidade3" data-bs-toggle="tooltip"
                    title="A babá é quem fica resposável por tomar conta do bebé. É necessário um nível de responsabilidade devido.">
                    Babá
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="" id="especialidade4">
                <label class="form-check-label" for="especialidade4" data-bs-toggle="tooltip"
                    title="O indivíduo colector de lixo é aquele responsável por remover o lixo acumulado de um determinado local.">
                    Colecta de lixo
                </label>
            </div>
        </fieldset>
    </div>

    <br><br>

    <div class="form-floating">
        <textarea name="descricao" id="descricao" cols="30" rows="10" class="form-control"></textarea>
        <label for="descricao">Breve descrição sobre você (experiência de trabalho)</label>
    </div>

    <!-- add user-type=diarista to send to php code -->
    <br>
    <div class="form-check">
        <label for="is_public" data-bs-toggle="tooltip"
            title="Você pode tornar o seu perfil público logo após o registro, assim os outros usuários terão como encontrá-lo.">Pretende
            is_public seu perfil na página?</label>
        </br>

        <div class="form-check form-check-inline">

            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="is_public" id="is_public1" value="sim" checked>
                Sim
            </label>
        </div>
        <div class="form-check form-check-inline">
            <label class="form-check-label form-check-inline">
                <input type="radio" class="form-check-input" name="is_public" id="is_public2" value="nao">
                Não
            </label>
        </div>
    </div>
    <hr>
    <div class="d-grid gap-2 col-6 mx-auto">
        <button type="submit" value="registar_diarista" class="btn btn-primary btn-block">Registrar nova conta</button>
    </div>
</form>