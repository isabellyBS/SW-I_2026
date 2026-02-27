<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula 2(3), dia 27/02</title>
</head>
<body>
    <h1>AULA 02- PHP E HTML</h1>
    <?php
        $nome = "Isa";
        $a = 10;
        $b = 5;
        $soma = $a + $b;
        echo "<p>Bem vindo $nome!</p>";
        echo "<p>Bem vindo " . $nome . "!</p>";
        echo "<p style='color:#ff0000;' >A soma é: $soma </p>"
        # $_ é o começo de uma pseudo variavel, então de preferência, n usar
    ?>
</body>
</html>