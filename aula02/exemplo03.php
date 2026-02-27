<?php
    $a = 10;
    $b = "5"; 
    echo "Soma: " . ($a + $b);
    # mesmo o valor da variável sendo str, consegue realizar uma operação aritmética
    echo "<br>";

    $a = 3;
    $b = 7; 
    echo "Resultado: " . ($a / $b);// divisão
    echo "<br>";
    echo "Resultado: " . ($a % $b);// resto
    
    echo "<hr>";

    $x = true;
    $y = false;

    $result = $x && $y; #&& função E/AND

    echo "Resultado: $result"; 
?>