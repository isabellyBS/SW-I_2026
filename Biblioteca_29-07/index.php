<?php
    require_once 'biblioca_local/autoload.php';
    $texto= new Texto();
    $calc = new Calcular();
    $fatorial = new Fatorial();
    echo $calc->somar(10,20);
    echo "<br><br>";
    echo $texto->maiusculo("etec mcm");
    echo "<br><br>";
    echo $calc->multiplicar(10,20) . "<br><br>";
    echo "<br><br>";
    echo $fatorial->fatoriacao(4);
?>