<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de idade</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Calculadora de idade</h1>
    </header>
    <main>
        <?php 
            date_default_timezone_set("America/Sao_Paulo");
            $ano_atual = date("Y");

            $ano_nascimento = $_GET["ano_nascimento"] ?? 2007;
            $ano = $_GET["ano"] ?? $ano_atual
        ?>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="ano_nascimento">Seu ano de nascimento: </label>
            <input type="number" name="ano_nascimento" id="id_ano_nascimento" value="<?=$ano_nascimento?>" required max="<?=$ano_atual?>">

            <label for="ano">Quer saber a sua idade em que ano? (estamos em  <?=$ano_atual?>)</label>
            <input type="number" name="ano" id="id_ano" value="<?=$ano?>" required>

            <input type="submit" value="Calcular">
        </form>
        <?php 
            echo "<p>Quem nasceu em $ano_nascimento vai ter ". $ano - $ano_nascimento ." em $ano.</p>"
        ?>
    </main>
</body>
</html>