<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios retroalimentados</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Formulários retroalimentados</h1>
    </header>
    <main>
        <?php 
         $numero1 = $_GET["num1"] ?? 0 ;
         $numero2 = $_GET["num2"] ?? 0 ;
        ?>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="num1">Número 1</label>
            <input type="number" name="num1" id="id-num1" placeholder="<?=$numero1?>">

            <label for="num2">Número 2</label>
            <input type="number" name="num2" id="id-num2" placeholder="<?=$numero2?>">

            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Soma dos números</h2>
        <?php 
            $soma = $numero1 + $numero2;
            echo "<p>$numero1 + $numero2 é = <strong>$soma</strong></p>"
        ?>
    </section>
</body>
</html>