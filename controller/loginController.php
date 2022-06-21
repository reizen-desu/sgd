<?php
session_start();
include '../model/connection.php';

$pdo = conectar();

$sql = "SELECT * FROM (SELECT email, password, tipo_usuario FROM visitante UNION
SELECT email, password, tipo_usuario FROM diarista) WHERE email = :email AND password = :password";