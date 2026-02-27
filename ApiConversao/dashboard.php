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

        <h1>Conversor de Moedas</h1>
        <form action="conversao.php" method="get" class="form-dashboard">
            <label for="din">Quantos R$ você possui?</label>
            <input type="number" name="din" id="din" step="0.01">
            <input type="submit" value="Converter">
        </form>
        <a href="logout.php" class="sair-dashboard">Sair</a>
    </main>

</body>

</html>