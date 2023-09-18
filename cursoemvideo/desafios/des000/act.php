<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antecessor e sucessor</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <!-- isso é só um teste. na vida real é provável que eu não faça o site todo dentro da super tag php! -->
    <?php 
        $NUMERO = $_GET["numero"];
        echo "<header>
                <h1>
                    O antecessor e o sucessor <br> do número $NUMERO:
                </h1>
            </header>";
        echo "<main>
                <p>O antecessor do número que você digitou é: " . $NUMERO - 1 . ".</p>
                <p>O sucessor do número que você digitou é: " . $NUMERO + 1 . ".</p>
                <button onclick=\"javascript:history.go(-1)\">Voltar</button>

              </main>"
    ?>
</body>
</html>