<?php
require 'conexao.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)";
    
    $stmt = $pdo->prepare($sql);

    try{
    $stmt->execute([$nome, $email, $senhaHash]);
     print"<script>alert('Cadastro realizado com sucesso')</script>";

    }catch (PDOException $e){
        print"<script>alert('Este email já está cadatrado.')</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastro de Usuário</title>
    <link rel="stylesheet" href="style.css">
    
</head>

<body>
    <main class="container">

        <h1>Cadastro de Usuários</h1>
        <form  method="post">
           <div class="input-box">
                <input type="text" name="nome" placeholder="Nome" required>
                
            </div>
            <div class="input-box">
                <input type="email" name="email" placeholder="Email" required>
                <i class="bx bxs-user"></i>
            </div>

            <div class="input-box">
                <input type="password" name="senha" placeholder="Senha" required>
                <i class="bx bxs-lock-alt"></i>
            </div>
        

            <div>
            <button type="submit" class="login">Cadastrar usuário</button>
            </div>
        </form>
        <div class="register-link">
        <a href="logout.php">Sair</a>
        </div>
    </main>

</body>

</html>