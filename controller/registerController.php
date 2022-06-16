<?php
require '../model/connection.php';

$pdo = conectar();

// Para registar a diarista
if (isset($_POST['registar_diarista'])) {
    $nome = $_POST['nome'];
    $apelido = $_POST['apelido'];
    $email = $_POST['emailLogin'];
    $password = $_POST['password'];
    // $password_confirm = $_POST['password_confirm'];
    $data_nascimento = $_POST['data_nascimento'];
    $telemovel = $_POST['contacto'];
    $sexo = $_POST['sexo'];
    $morada = $_POST['morada'];
    $descricao = $_POST['descricao'];
    $is_public = $_POST['is_public'];
}

// Para registar o visitante
if (isset($_POST['registar_visitante'])) {
    
}