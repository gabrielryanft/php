<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>action</title>
    <link rel="stylesheet" href="/cursoemvideo/css.css">
</head>
<body>
    <header>
        <h1>Resultado: </h1>
    </header>
    <main>
        <?php 
            $nome = $_GET["nome"] ?? "[Primeiro nome não informado]"; // "??" é o coalescência nula (oque vai acontecer se não existir.)
            $sobrenome = $_GET["sobrenome"] ?? "[Sobrenome não informado]"; // "??" é o coalescência nula (oque vai acontecer se não existir.)
            //ao inves de usar o $_GET, da para usar o $_POST (se você estiver usando post) ou $_REQUEST (so que esse é um pouco mais pesado. exige mais memoria. é melhor usar o $_GET ou o $_POST.)

            echo "<p>Olá, $nome! Tudo suave com você?! (Seu sobrenome é: $sobrenome.)</p>";
            echo "<p>Oque eu recebo quando eu escrevo: \"var_dump(\$_GET)\": </p>";
            var_dump($_GET);
        ?>
        <p><a href="javascript:history.go(-1)">Voltar </a></p>
    </main>
</body>
</html>