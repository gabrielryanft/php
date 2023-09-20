<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C.Q.C.Q.S.M.V.G.</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1><abbr title="Calculadora que calcula quantos salários minimos você ganha">C.Q.C.Q.S.M.V.G.</abbr></h1>
    </header>
    <main>
        <?php 
            $salario = $_GET["salario"] ?? 0;
            $salario_minimo = 1380;
            $formatacao = numfmt_create("pt_br", NumberFormatter::CURRENCY);
        ?>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="salario">Seu salário</label>
            <input type="number" name="salario" id="id_salario" step="0.01" value="<?=$salario?>">

            <input type="submit" value="Calcular">
        </form>
        <p>Considerando o salário mínimo como: <?=numfmt_format_currency($formatacao, $salario_minimo, "brl")?></p> 
        <h2>Resultedo da conta (Quantos salários mínimos tem no seu salário): </h2>
        <?php 
            $quantos_salarios = intdiv($salario, 1380);
            echo "<p>No Seu sálario tem: ". $quantos_salarios ."salários mínimos + ". numfmt_format_currency($formatacao, ($salario - ($quantos_salarios * $salario_minimo)), "brl") .".</p>"
        ?>
    </main>
</body>
</html>