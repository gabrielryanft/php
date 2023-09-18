<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número real analisado</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <header>
        <h1>Número real analisado</h1>
    </header>
    <main>
        <?php 
            $NUMERO = $_GET['numero'] ?? 0;

            $INT = (int)$NUMERO;
            $FLOAT = $NUMERO - $INT;

            echo "<p>O número digitado foi: ". number_format($NUMERO, 3, ",", ".") .". Os dados obtidos foram: </p>";
            echo "
        <ul>
            <li>O seu número em sua forma cardinal: ". number_format($INT, 0, "Eu simplesmente não existo...", ".") .";</li>
            <li>O seu número, mas somente a parte decimal: ". number_format($FLOAT, 3, ",", ".") .".</li>
        </ul>
"
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>