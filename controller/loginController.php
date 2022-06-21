<?php
session_start();
include '../model/connection.php';

$_SESSION['is_logged'] = false;
$_SESSION['tipo_usuario'] = '';




$pdo = conectar();
// Validar as credenciais

$sql = "SELECT id, email, password, tipo_usuario FROM visitante UNION
SELECT id, email, password, tipo_usuario FROM diarista WHERE email = :email AND password = :password";

if($stmt = $pdo->prepare($sql)) {
    $stmt->bindParam(':email', $_POST['email']);
    $stmt->bindParam(':password', $_POST['password']);

    if($stmt->rowCount() == 1) {
        $row = $stmt->fetch();
        $_SESSION['id'] = $row['id'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['tipo_usuario'] = $row['tipo_usuario'];
        $_SESSION['is_logged'] = true;
        header("Location: ../");
    } else {
        echo "<script>alert('Email ou password incorretos!')</script>";
        header("Location: ../");
    }

}