<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Estrutura de divisão</h1>
    </header>
    <main>
        <?php 
            $dividendo = $_GET["dividendo"] ?? 0;
            $divisor = $_GET["divisor"] ?? 1
        ?>
        <h2>Oque sera dividido? E quantas vezes?</h2>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="id_dividendo" step="1" value="<?=$dividendo?>">

            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="id_divisor" min="1" step="1" value="<?=$divisor?>">

            <input type="submit" value="Calcular!">
        </form>
        <table class="divisao">
            <tr>
                <td><abbr title="Dividendo"><?=number_format($dividendo, 0, "Eu simplesmente não existo...", ".")?></abbr></td>
                <td><abbr title="Divisor"><?=number_format($divisor, 0, "Eu simplesmente não existo...", ".")?></abbr></td>
            </tr>
            <tr>
                <td><abbr title="Resto"><?=($dividendo % $divisor)?></abbr></td>
                <td><abbr title="Quociente"><?=(number_format(($dividendo / $divisor), 0, "Eu simplesmente não existo...", "."))?></abbr></td>
            </tr>
        </table>
    </main>
</body>
</html>