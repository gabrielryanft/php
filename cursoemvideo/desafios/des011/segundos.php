<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Segundos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Segundos</h1>
    </header>
    <main>
        <?php 
            $segundos = $_GET["segundos"] ?? 0
        ?>
        <form action="<?=$_SERVER["PHP_SELF"]?>">
            <label for="segundos">Quantos segundos vamos converter?</label>
            <input type="number" name="segundos" id="id_segundos" value="<?=$segundos?>" min="0">

            <input type="submit" value="Calcular">
        </form>
        <?php 
            $semanas = intdiv($segundos, 604800);
            $sobra = $segundos % 604800;

            $dias = intdiv($sobra, 86400);
            $sobra = $sobra % 86400;
            
            $horas = intdiv($sobra, 3600);
            $sobra = $sobra % 3600;
            
            $minutos = intdiv($sobra, 60);
            $sobra = $sobra % 60;
            
            $segundos_final = $sobra;

            echo "
        <p>Resultado:</p>
        <ul>
            <li>Semanas: $semanas</li>
            <li>Dias: $dias</li>
            <li>Horas: $horas</li>
            <li>Minutos: $minutos</li>
            <li>Segundos: $segundos_final</li>
        </ul>"
        ?>
    </main>
</body>
</html>