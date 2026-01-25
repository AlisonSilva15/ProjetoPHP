<?php
session_start();

/*
|--------------------------------------------------------------------------
| — LOGIN (recebe POST)
|--------------------------------------------------------------------------
*/
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (
        isset($_POST['usuario'], $_POST['senha']) &&
        $_POST['usuario'] === 'Alison@email' &&
        $_POST['senha'] === '123'
    ) {
        $_SESSION['usuario'] = $_POST['usuario'];
        header('Location: dashboard.php');
        exit;
    }

    // Login errado
    header('Location: index.php?erro=true');
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
