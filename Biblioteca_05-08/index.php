<?php
    require_once 'biblioteca_local/autoload.php';

    $verifica = new VerificaCPF();
    $contar = new calcImc(); 
    
    echo $verifica->verificar("321.456.789-09") ? "CPF válido" : "CPF inválido";
    echo "<br><br>";
    echo $contar->calcular(70, 1.75);
