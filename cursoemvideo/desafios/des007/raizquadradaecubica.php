<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raiz quadrada e cúbica</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Raiz quadrada e cúbica:</h1>
    </header>
    <main>
        <?php 
            $numero = $_GET["numero"] ?? 64;
        ?>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="numero">Número: </label>
            <input type="number" name="numero" id="id_numero" value="<?=$numero?>">

            <input type="submit" value="Calcular">
        </form>
        <?php 
            $raiz_quadrada = number_format(sqrt($numero), 2, ",", "."); 
            $raiz_cubica = number_format(($numero ** (1/3)), 2, ",", "."); 

            echo"<p>A raiz quadrada e $numero é $raiz_quadrada e a raiz cúbica é $raiz_cubica</p>"
        ?>
    </main>
</body>
</html>