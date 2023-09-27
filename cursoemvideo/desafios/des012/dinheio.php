<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dinheiro </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Dinheiro</h1>
    </header>
    <main>
        <?php 
            $dinheiro = $_GET["dinheiro"] ?? 165;
        ?>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="dinheiro">Quanto dinheiro quer sacar?</label>
            <input type="number" name="dinheiro" id="id_dinheiro" min="0" step="5" required value="<?=$dinheiro?>">

            <input type="submit" value="Calcular">
        </form>
        <?php 
            $nota100 = intdiv($dinheiro, 100);
            $resto = $dinheiro % 100;
            $nota50 = intdiv($resto, 50);
            $resto = $resto % 50;
            $nota10 = intdiv($resto, 10);
            $resto = $resto % 10;
            $nota5 = intdiv($resto, 5);

            echo "<p>$dinheiro em notas de 100 50 10 e 5 reais ficaria: </p>";
            echo "
        <ul>
            <li>nota(s) de 100 : $nota100</li>
            <li>nota(s) de 50 : $nota50</li>
            <li>nota(s) de 10 : $nota10</li>
            <li>nota(s) de 5 : $nota5</li>
        </ul>"
        ?>
    </main>
</body>
</html>