<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>
<body>
    <?php 
        //se você usar '' o que estived dentro da string não será interpretado: 'emoj: \u{1F30E}'
        // já se forem usadas as aspas duplas "", oque estiver dentro será enterpretado: "emoj: \u{1F30E}"
        // ^^ interpolação não funciona tbm. (com aspas simles '') ^^

        $nomeSimples = 'gabriel'; //não depende do lado da nomeação, mas do lado de mostração
        $nomeDuplo = "gabriel"; //não depende do lado da nomeação, mas do lado de mostração
        $stringzinhaSimples = 'emoj: \u{1F30E}, $nomeSimples, $nomeDuplo'; //sem corzinha na parte do emoj
        $stringzinhaDupla = "emoj: \u{1F30E}, $nomeSimples, $nomeDuplo"; // com corzinha na perte do emoj
        echo 'string: $stringzinhaSimples<br>';  //sem corzinha
        echo "stringzinha: $stringzinhaDupla<br>"; // com corzinha

        echo "$stringzinhaDupla &emsp;&emsp; \"gostosão\" &emsp;&emsp; $stringzinhaSimples<br>"; //sequencia de escape é o nome que se da para oque eu fiz \" \"  sequencia de escape! não se atreva a se esqyecer!! sequencia de escape
        //&emsp; são as tabulações no html( daí quendo o tevxto for transferido para a pagina html ele sera interpretado como um html)
        //sequencoas de escape: 
        /*
        \n = nova liha
        \t = tabulação horizotal
        \\ = barra invertida
        \$ = sinal de cifrão
        \u{} = codepoint(Unicode codepoint)
        \" = mostra as aspas duplas dentro das aspas duplas
        \' = mostra as aspas simples dentro das aspas simples 
        */
        //escreve texto em multiplas linhas e era para deixar o espaçamento correto na hora de imprimir porém, só funciona no 'modo' texto. se você inspeecionar com o google dev tools ele ostra do jeito correto.
        echo <<< FRASE
        eai galera
            nunca nem ví isso daíem
            popopo $stringzinhaSimples
                mamamia $stringzinhaDupla <br>
        FRASE;

        echo <<< 'FRASE'
        eai galera
            nunca nem ví isso daíem
            popopo $stringzinhaSimples
                mamamia $stringzinhaDupla
        FRASE;
    ?>
</body>
</html>