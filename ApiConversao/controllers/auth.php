<?php
session_start();

require '../config/conexao.php';
/*
|--------------------------------------------------------------------------
| — LOGIN (recebe POST)
|--------------------------------------------------------------------------
*/

if( $_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = $_POST['usuario'];
    $senha = $_POST['senha'];

    //Buscar o usuário no banco
    $sql = "SELECT *FROM usuarios WHERE email =?";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([$email]);

    $usuario = $stmt->fetch();

    //Verificar a senha
    if($usuario && password_verify($senha, $usuario['senha'])){
        $_SESSION['usuario']= $usuario['email'];

        header('Location: ../pages/dashboard.php');
        exit;
}
    // Login errado
    header('Location: ../pages/index.php?erro=true');
    exit;
}

/*
|--------------------------------------------------------------------------
|  PROTEÇÃO (include)
|--------------------------------------------------------------------------
*/
if (!isset($_SESSION['usuario'])) {
    header('Location: index.php?erro=true');
    exit;
}
