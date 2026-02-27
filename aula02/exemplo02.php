<?php
    $nome = 'Ciclano';
    $idade = -7;
    $altura = -1.80;
    $status = true;

    // exibir valores na tela
    echo "O nome é: $nome"; // 1° forma
    echo "<br>";
    echo "O nome é: " . $nome; // 2° forma, o "." é tipo a "," no phyton, concatenação
    echo "<br>";
    echo 'O nome é: ' . $nome; // 3° forma 
    echo "<br>";
    echo "O nome é: ";
    echo $nome;

    #echo 'O nome é: $nome';    assim não funciona, na tela aparece "$nome"
    //pois aspas simples força para string

    echo "<hr>";#faz uma linha/divisão na tela

    // VERIFICAR TIPO E VALOR DE UMA VARIÁVEL
    var_dump($altura); //tipo e valor
    echo "<br>";
    print_r($altura);// valor
    echo "<hr>";

    // Laço de repetição
    for ($i=1; $i < 6; $i++) { 
        echo $i; echo "<br>";}
    echo "<hr>";

    // CURIOSIDADE DO PHP A RESPEITO DOS VALORES BOOLEANOS
    echo "O status é: $status";
    # status true - exibe 1
    # status false - exibe vazio
?>