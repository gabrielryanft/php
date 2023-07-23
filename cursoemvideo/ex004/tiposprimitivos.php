<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos</title>
</head>
<body>
    <?php 
        // 0x = hexadecimal  0b = binario  0 = octal
        $nome = 'Gabriel totosão';
        $idade = 16;
        $floate = 3e2; // 3 x 10²
        $inteiro = (integer) 3e2; // 3 x 10² //também da para usar int ao invez de integer
        var_dump($nome, $idade, $floate, $inteiro);
    ?>
</body>
</html>