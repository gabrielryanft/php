<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valor Covertido</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <header>
        <h1>Valor Calculado</h1>
    </header>
    <main>
        <?php 
            $VALOR = $_GET["valor"] ?? 0;
            $cotacao = 4.92;
            $CONVERTIDO = $VALOR / $cotacao;

            echo "<p  style=\"text-align: center;\">Os seus R\$".  number_format($VALOR, 2, ",", ".") ." em dolar, são: </p>";
            echo "<p  style=\"text-align: center;\">O valor convertido é: US\$".  number_format($CONVERTIDO, 2, ",", ".") ."<p>";

            //Ou:

            $formatacao = numfmt_create("pt_BR", NumberFormatter::CURRENCY );
            echo "<p  style=\"text-align: center;\">Os seus". numfmt_format_currency($formatacao, $VALOR, "brl") ."dolar é:". numfmt_format_currency($formatacao, $CONVERTIDO, "USD") .".</p>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>