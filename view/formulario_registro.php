<!-- FORMULARIO DE REGISTO (Modal) -->
<section class="bg-light modal fade" id="register" aria-labelledby="modal-title">

    <!-- Definições do modal vão ao lado do "modal-dialog"
    Os tamanho do modal é pelo "modal-sm|lg|xl"-->
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-title">Registrar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <p>O formulário abaixo se destina para diaristas, para entrar como visitante </p>
                <p class="text-secondary">Preencha os campos abaixo para se registrar</p>
                <form action="controller/registerController.php" method="POST">
                    <div class="row">

                        <div class="form-group col">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" id="nome" placeholder="Introduza seu nome">
                        </div>

                        <div class="form-group col">
                            <label for="apelido">Apelido</label>
                            <input type="text" class="form-control" id="apelido" placeholder="Introduza seu apelido">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="emailLogin">Email</label>
                        <input type="email" class="form-control" id="emailLogin" placeholder="Introduza seu email">
                    </div>
                    <div class="form-group">
                        <label for="passwordLogin">Password</label>
                        <input type="password" class="form-control" id="passwordLogin" placeholder="Password">
                    </div>


                    <div class="form-group">
                        <label for="nif">Contacto</label>
                        <input type="digit" class="form-control" id="contacto" placeholder="84 0000 000">
                    </div>

                    <div class="form-group">
                        <label for="morada">Morada</label>
                        <input type="text" class="form-control" id="morada" placeholder="Introduza o seu bairro">
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
                            <input type="radio" class="form-check-input" name="publicar" id="publicar" value="sim"
                                checked>
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
            </div> <!-- modal body -->

            <div class="modal-footer">
                <button class="btn btn-outline-secondary" data-bs-dismiss="modal">Fechar</button>
            </div>

        </div> <!-- modal content -->
    </div> <!-- modal dialog -->
</section>