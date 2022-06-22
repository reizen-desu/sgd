<?php

$pdo = conectar();
$diaristas = $pdo->query("SELECT * FROM diarista WHERE is_public = 1");
// $diaristas = execute();
?>



<section class="pt-5 pb-5 bg-light">

    <div class="container">
        <div class="row mb-md-4">
            <div class="col-12 col-lg-8 text-center text-lg-start">
                <h3 class="text-primary small">Diaristas disponíveis</h3>
                <h2 class=" "></h2>
                <p class="lead">
                    Várias diaristas estão disponíveis para trabalhar com você, de acordo com a sua preferência.
                </p>
            </div>
        </div>

        <div class="row d-flex mb-5">
            <?php foreach ($diaristas as $diarista) : ?>
            <div class="col-10 mx-auto col-md-4">
                <div class="my-3 card card-body shadow p-4 ">
                    <div class="row align-items-center d-flex text-md-center text-lg-start">
                        <div class="col-12 col-md-9 mt-3 mt-lg-0 small">
                            <h3 class=""><?= $diarista['nome'] . " " . $diarista['apelido']?></h3>
                        </div>
                        <p class="small mb-4 text-black-80 text-italic"><?= $diarista['descricao'] ?></p>
                    </div>
                    <div class="table table-borderless">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td class="text-primary text-end">
                                        <i class="fa fa-address-book"></i>
                                        Contacto
                                    </td>
                                    <td class="text-black-80">
                                        <?= $diarista['contacto'] ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-primary text-end"">
                                        <i class=" fa fa-arrow"></i>
                                        Moarada
                                    </td>
                                    <td class="text-black-80">
                                        <?= $diarista['morada'] ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-primary text-end"">
                                        <!-- <i class=" fa fa-money"></i> -->
                                        Idade
                                    </td>
                                    <td class="text-black-80">
                                        <?= $diarista['data_nascimento'] ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-primary text-end"">
                                        <!-- <i class=" fa fa-mars"></i> -->
                                        Sexo
                                    </td>
                                    <td class="text-black-80">
                                        <?= $diarista['sexo']  ?>
                                    </td>
                            </tbody>
                        </table>
                    </div>
                    <p class="card-text"><small class="text-muted">Último visto em
                            <? $diaristas['ultimo_acesso'] ?>
                        </small></p>
                    <div class="btn-group">
                        <a href="diarista.php?id=<?= $diarista['id'] ?>" class="btn btn-primary">Requisitar</a>
                        <a href="diarista.php?id=<?= $diarista['id'] ?>" class="btn">
                            <? $diaristas['likes'] ?>Likes
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>


            <div class="row pt-3 align-items-center justify-content-center">
                <div class="col text-center">
                    <a href="#" class="btn btn-primary  btn-rounded shadow py-3 px-5">Ir para cima</a>
                </div>
            </div>
        </div>
</section>