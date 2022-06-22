<?php
    session_start();
    // unset_session('tipo_usuario');
    // unset_session('id');
    session_unset();

    // unset_session('nome');
    // unset_session('apelido');
    // unset_session('email');
    // unset_session('img_perfil');
    // unset_session('sexo');
    // unset_session('telefone');
    // unset_session('bairro');

    // unset_session('ultimo_acesso');

    session_destroy();

    // Redirecionar para a página inicial
    header("Location: ../");
?>