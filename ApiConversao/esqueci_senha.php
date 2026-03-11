<?php 
require 'conexao.php';



if($_SERVER["REQUEST_METHOD"] == "POST"){

    $email =  trim($_POST["email"]);
    $novaSenha = $_POST["senha"];

    $senhaHash = password_hash($novaSenha, PASSWORD_DEFAULT);

    $sql = "UPDATE usuarios SET senha = ? WHERE email = ?";
    $stmt = $pdo->prepare($sql);

    $stmt->execute([$senhaHash, $email]);

    if($stmt->rowCount() > 0){
        echo "<script>alert('Senha alterada com sucesso!');
        window.location.href='index.php';</script>";
        
    } else {
        echo "<script>alert('Email não encontrado.')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="UTF-8">
<title>Recuperar senha</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
    <main class="container">

    <h1>Recuperar Senha</h1>

    

    <form method="post">

    <div class="input-box">
    <input type="email" name="email" placeholder="Digite seu email" required>
    </div>

    <div class="input-box">
    <input type="password" name="senha" placeholder="Nova senha" required>
    </div>

    <button type="submit" class="login">Alterar senha</button>

    <div class="register-link">
        <a href="logout.php">Sair</a>
        </div>

    </form>

    </main>
    
</body>

