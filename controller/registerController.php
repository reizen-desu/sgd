<?php
include '../model/connection.php';

$pdo = conectar();

// Para registar a diarista
if (isset($_POST['registar_diarista'])) {
    $tipo_usuario = "diarista";
    $nome = $_POST['nome'];
    $apelido = $_POST['apelido'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    // $password_confirm = $_POST['password_confirm'];
    $data_nascimento = $_POST['data_nascimento'];
    $contacto = $_POST['contacto'];
    $sexo = $_POST['sexo'];
    $morada = $_POST['morada'];
    $descricao = $_POST['descricao'];
    $is_public = $_POST['is_public'];

    $sql = "INSERT INTO diarista (nome, apelido, email, password, data_nascimento, contacto, sexo, morada, descricao, is_public, data_criacao) VALUES (:nome, :apelido, :email, :password, :data_nascimento, :contacto, :sexo, :morada, :descricao, :is_public, NOW())";
    $result = $pdo->prepare($sql);
    $result->bindParam(':nome', $nome);
    $result->bindParam(':apelido', $apelido);
    $result->bindParam(':email', $email);
    $result->bindParam(':password', $password);
    $result->bindParam(':data_nascimento', $data_nascimento);
    $result->bindParam(':contacto', $contacto);
    $result->bindParam(':sexo', $sexo);
    $result->bindParam(':morada', $morada);
    $result->bindParam(':descricao', $descricao);
    $result->bindParam(':is_public', $is_public);
    
    if ($result->execute()) {
        echo "<script>alert('Registo efetuado com sucesso!')</script>";
        header("Location: ../");
    } else {
        echo "<script>alert('Erro ao registar!')</script>";
    }
}

// Para registar o visitante
if (isset($_POST['registar_visitante'])) {
    // $tipo_usuario = "visitante";
    $nome = $_POST['nome'];
    $apelido = $_POST['apelido'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    // $password_confirm = $_POST['password_confirm'];
    $contacto = $_POST['contacto'];
    $morada = $_POST['morada'];

    $result = $pdo->prepare("INSERT INTO visitante (nome, apelido, email, password, contacto, morada)
    VALUES (:nome, :apelido, :email, :password, :contacto, :morada)");
    
    $result->bindParam(':nome', $nome);
    $result->bindParam(':apelido', $apelido);
    $result->bindParam(':email', $email);
    $result->bindParam(':password', $password);
    $result->bindParam(':contacto', $contacto);
    $result->bindParam(':morada', $morada);

    if ($result->execute()) {
        echo "<script>alert('Registo efetuado com sucesso!')</script>";
        header("Location: ../");
    } else {
        echo "<script>alert('Erro ao registar!')</script>";
    }

}