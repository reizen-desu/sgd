<?php

session_start();

$host = "localhost";
$user = "root";
$pass = "";
$db = "sgd";

function conectar() {
    global $host, $user, $pass, $db;
    try {
        $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }

    return $pdo;
}

?>