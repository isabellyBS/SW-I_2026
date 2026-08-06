<?php
    require_once 'biblioteca_local/autoload.php';
    $texto= new Texto();
    $calc = new Calcular();
    $fatorial = new Fatorial();

    $retirar = new RetirarNumero();
    $contar = new Contador(); 
    echo $calc->somar(10,20);
    echo "<br><br>";
    echo $texto->maiusculo("etec mcm");
    echo "<br><br>";
    echo $calc->multiplicar(10,20) . "<br><br>";
    echo $fatorial->fatoracao(4) . "<br><br>";


    echo $retirar->retirar_numero("Escola 141") . "<br><br>";
    echo $contar->contar("Aqui tem 22 caracteres");
?>
