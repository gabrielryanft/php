<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média aritimética simples e ponderada</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Média aritimética simples e ponderada</h1>
    </header>
    <main>
        <?php 
            $valor_1 = $_GET["valor_1"] ?? 0;
            $peso_1 = $_GET["peso_1"] ?? 1;
            $valor_2 = $_GET["valor_2"] ?? 10;
            $peso_2 = $_GET["peso_2"] ?? 1
        ?>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="valor_1">1º valor</label>
            <input type="number" name="valor_1" id="id_valor_1" value="<?=$valor_1?>" required step="">

            <label for="peso_1">1º peso</label>
            <input type="number" name="peso_1" id="id_peso_1" value="<?=$peso_1?>" required step="">

            <label for="valor_2">2º valor</label>
            <input type="number" name="valor_2" id="id_valor_2" value="<?=$valor_2?>" required step="">

            <label for="peso_2">2º peso</label>
            <input type="number" name="peso_2" id="id_peso_2" value="<?=$peso_2?>" required step="">

            <input type="submit" value="Calcular">
        </form>
        <?php 
            $media_simples = ($valor_1 + $valor_2) / 2;
            $media_ponderada = ($valor_1 * $peso_1 + $valor_2 * $peso_2) / ($peso_2 + $peso_1);

            echo "<p>A média simples (Sem levar em consideração os pesos.)é: ". number_format($media_simples, 2, ",", ".") ."</p>";
            echo "<p>A média ponderada (Levando em consideração os pesos: $peso_1 e $peso_2.) é: ". number_format($media_ponderada, 2, ",", ".") ."</p>";
        ?>
    </main>
</body>
</html>