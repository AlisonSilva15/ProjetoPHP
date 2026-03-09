<?php
    $host = "localhost";
    $db = "projeto_php";
    $user = "root";
    $pass = "";

try{
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8",$user,$pass);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $erro){

    die("Erro na conexão: " . $erro->getMessage());
}