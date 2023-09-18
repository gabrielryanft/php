<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dinheiros em dolar.</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <header>
        <h1>Valor inserido em dolar: </h1>
    </header>
    <main>
        <?php 

        //pegando a cotação do dolar.

            $dataHoje = date("d-m-Y", strtotime("-7 days"));
            $dataPassado = date("d-m-Y");
            $link = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'09-07-2023\'&@dataFinalCotacao=\'09-14-2023\'&$top=1&$skip=0&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($link), true);

            //var_dump($dados);

            $cotacao = $dados["value"][0]["cotacaoCompra"];
            $VALOR = $_GET['valor'] ?? 0;

        //fazendo a formatação dos números.
            $formatacao = numfmt_create("pt_BR", NumberFormatter::CURRENCY );

            echo "<p>Valor inserido: ". numfmt_format_currency($formatacao, $VALOR, "brl") .". <br>Valor convertido: ". numfmt_format_currency($formatacao, ($VALOR / $cotacao), "usd") .".</p>"
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>