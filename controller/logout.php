<?php
    session_start();
    unset_session('is_logged');
    unset_session('tipo_usuario');

    unset_session('id_usuario');
    unset_session('nome');
    unset_session('apelido');
    unset_session('email');
    unset_session('img_perfil');
    unset_session('sexo');
    unset_session('telefone');
    unset_session('localizacao_diarista');

    session_destroy();

    // Redirecionar para a página inicial
    header("Location: /SGD/index.php");
?>