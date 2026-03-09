<?php
include 'auth.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="dashboard.css">
</head>

<body>
    <main class="container">

        <h1>Converta Real para Dólar</h1>
        <form action="conversao.php" method="get" class="form-dashboard">
            <label for="din">Quantos R$ você possui?</label>
            <input type="number" name="din" id="din" step="0.01">
            <input class="btn-converter" type="submit" value="Converter">
        </form>
        <div class="register-link">
        <a href="logout.php">Sair</a>
        </div>
    </main>

</body>

</html>