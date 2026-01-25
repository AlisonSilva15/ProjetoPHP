<?php
session_start();

$erro = '';

if (isset($_GET['erro'])) {
    $erro = 'Usuário ou senha inválidos!';
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>

<body>

<?php if ($erro): ?>
    <div class="erro" style="background-color: coral; margin: 10px; padding: 10px;">
        <?php echo $erro; ?>
    </div>
<?php endif; ?>

<main class="container">
    <form method="post" action="auth.php">
        <h1>Login</h1>

        <div class="input-box">
            <input type="email" name="usuario" placeholder="Usuário" required>
            <i class="bx bxs-user"></i>
        </div>

        <div class="input-box">
            <input type="password" name="senha" placeholder="Senha" required>
            <i class="bx bxs-lock-alt"></i>
        </div>

        <div class="remember-forgot">
            <label>
                <input type="checkbox" name="lembrar">
                Lembrar senha
            </label>
            <a href="#">Esqueci senha</a>
        </div>

        <button type="submit" class="login">Login</button>

        <div class="register-link">
            <p>Não tem uma conta? <a href="#">Cadastre-se</a></p>
        </div>
    </form>
</main>

</body>
</html>
