<?php
    echo "teste pra ver se aparece <br>";
    $a =4;
    $b =0;

    if ($b != 0){
        $r= $a / $b; #aqui aparece uma erro fatal, entao não carrega daqui pra baixo, se b = 0, pra não falhar, colocamos esse if.
        echo $r;  
    } 
        else {
        $r= "<hr>Essa divisão não é possível <hr>";
        echo $r;  
    };
    // pegadinha de prova

    #try catch, é tipo um if próprio pra erro, mas vamos ver mais pra frente.

    echo "<br>";
    echo "Aqui continua o seu programa";
?>