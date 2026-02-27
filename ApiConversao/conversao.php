<?php
include 'auth.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DesafioPHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main class="container">

        <h1>Conversor de moedas</h1>

        <?php

        $início = date("m-d-Y", strtotime("-7 days"));
        $fim = date("m-d-Y");
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $início . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        $conteudo = @file_get_contents($url);

        if ($conteudo === false) {
            die("Erro ao acessar a API do Banco Central. Tente novamente mais tarde.");
        }

        $dados = json_decode($conteudo, true);

        if (!isset($dados["value"][0]["cotacaoCompra"])) {
            die("Erro ao obter cotação.");
        }

        $cotação = $dados["value"][0]["cotacaoCompra"];




        $real = $_REQUEST["din"] ?? 0;


        $dólar = $real / $cotação;

        $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        ?>

        <div class="resultado-container">

    <p class="resultado-texto">
        <?php
        echo "Seus " .
            numfmt_format_currency($padrão, $real, "BRL") .
            " equivalem a " .
            numfmt_format_currency($padrão, $dólar, "USD");
        ?>
    </p>

    <button class="btn-voltar" onclick="history.back()">
        Voltar
    </button>

</div>

    </main>

</body>

</html>