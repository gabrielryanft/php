<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Porcentagem </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Porcentagem</h1>
    </header>
    <main>
        <?php 
            $porcentagem = $_GET["porcentagem"] ?? 0;
            $valor = $_GET["valor"] ?? 0;
        ?>
        <form action="<?=$_SERVER["PHP_SELF"]?>">
            <label for="valor">Valor que vai ser aumentado</label>
            <input type="number" name="valor" id="id_valor" value="<?=$valor?>" step="0.01">

            <label for="porcentagem">Quantos % o valor irá aumentar? (<span id="valorRange" alt=""></span>%)</label>

            <input type="range" name="porcentagem" id="id_porcentagem" min="0" max="100" value="<?=$porcentagem?>" oninput="valorRange()">

            <input type="submit" value="Calcular">
        </form>
        <?php 
            echo "<p>$valor com um aumento de $porcentagem% é igual a: ". number_format((($valor / 100) * $porcentagem + $valor), 2, ",", ".") ."</p>"
        ?>
    </main>
    <script>
        
        function valorRange() {
            var valorRange = document.querySelector("#valorRange")
            var id_porcentagem = document.querySelector("#id_porcentagem")
            valorRange.innerHTML = id_porcentagem.value
        }
        
    </script>
</body>
</html>