<?php
include '../model/connection.php';


$pdo = conectar();
// Validar as credenciais


if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $acerto = 0;
    $id = 0;

    $result = $pdo->prepare("SELECT id, email, password, tipo_usuario FROM visitante UNION SELECT id, email, password, tipo_usuario FROM diarista WHERE email = :email AND password = :password");
    $result->bindValue(":email", $email);
    $result->bindValue(":password", $password);

    try {
        $result->execute();
    } catch (Exception $e){
        echo $e;
    }


    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $d_email = $row['email'];
        $d_senha = $row['password'];
        $d_tipo = $row['tipo_usuario'];
        $d_id = $row['id'];

        if ($email == $d_email and $password == $d_senha) {
            $acerto = 1;
            $id = $d_id;
            $tipo_usuario = $d_tipo;
        }
    }
    
    if ($acerto == 1) {
        $_SESSION['logado'] = 1;
        $_SESSION['id'] = $id;
        $_SESSION['email'] = $email;
        $_SESSION['tipo_usuario'] = $tipo_usuario;

        header('Location: ../');
        // $message  = $_SESSION['erro'] = "SUCESSO ao efectuar o login";
        // echo "<script type='text/javascript'>alert('$message');</script>";
        
    } else {
        $message  = $_SESSION['erro'] = "Erro ao efectuar o login";
        echo "<script type='text/javascript'>alert('$message');</script>";
        // header("location: ../");
    }
}