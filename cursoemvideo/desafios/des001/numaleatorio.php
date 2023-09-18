<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número aleatório</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <header>
        <h1>Gerando números aleatórios</h1>
    </header>
    <main>
        <p>numero aleatório de 0 a 100:</p>
        <?php 
            $maximo = 1000;
            $minimo = 0;
            $random = mt_rand($minimo, $maximo); // mt_rand() - inspirado em : algoritimo mersenne twister (criado em 1997)
            echo "<p>O número sorteado foi: <strong>$random</strong></p>"
        ?>
        <button onclick="javascript:document.location.reload()">Novo número</button>
    </main>
</body>
</html>