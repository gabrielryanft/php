<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variavais e constantes</title>
</head>
<body>
    <?php
        //variaveis
        $nome = 'Gabriel';
        $idade = "Suficiente \u{1F60E}";
        $idade = 16;
        echo "Olá, eu sou $nome e tenho $idade anos";
        //constantes
        const SOLTEIRO = true; //quando você emrime um valor boleano ele retorna 1 se o valor for verdadeiro e nada se se o valor for falso.
        const PAIS = 'Brasil';
        echo "Você mora no ".PAIS.". E está solteiro? ".SOLTEIRO;
    ?>
</body>
</html>