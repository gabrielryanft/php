<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        date_default_timezone_set('America/Sao_Paulo'); //configurendo a deta
        echo "hoje é dia " . date("d/m/Y. "); //dentro do date:  d = dia mês. D = dia semana. M = mês extenso. m = mês número. Y = ano numero inteiro. y = ultomos 2 digitos
        echo "e a hora é : " . date("G:i:s. ");
        echo "a timezone que está sendo usada é: " . date("T, U. ");
        /* 
        letras que da para por dentro de date

        Dia:

        d: Dia do mês com zero à esquerda (01 a 31)
        D: Representação textual abreviada do dia da semana (Dom a Sáb)
        j: Dia do mês sem zero à esquerda (1 a 31)
        l (letra "L" minúscula): Representação textual do dia da semana (Domingo a Sábado)
        N: Representação numérica do dia da semana (1 para Segunda-feira a 7 para Domingo)
        S: Sufixo ordinal inglês do dia do mês (st, nd, rd ou th)

        Mês:

        F: Representação textual completa do mês (Janeiro a Dezembro)
        m: Mês com zero à esquerda (01 a 12)
        M: Representação textual abreviada do mês (Jan a Dez)
        n: Mês sem zero à esquerda (1 a 12)

        Ano:

        Y: Ano com quatro dígitos (por exemplo, 2023)
        y: Ano com dois dígitos (por exemplo, 23)

        Hora:

        H: Hora no formato 24 horas com zero à esquerda (00 a 23)
        h: Hora no formato 12 horas com zero à esquerda (01 a 12)
        i: Minutos com zero à esquerda (00 a 59)
        s: Segundos com zero à esquerda (00 a 59)
        A: AM ou PM em maiúsculo
        a: AM ou PM em minúsculo

        Outros:

        U: Carimbo de data/hora Unix (número de segundos desde a época Unix - 1 de janeiro de 1970 00:00:00 GMT)
        */
    ?>
</body>
</html>