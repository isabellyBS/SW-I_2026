<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado CPF e IMC</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">
        <?php
            require_once 'biblioteca_local/autoload.php';

            $verifica = new VerificaCPF();
            $contar = new calcImc(); 

            echo $verifica->verificar($_POST["CPF"]) ? "Seu CPF é válido" : "Seu CPF é inválido";
            echo "<br><br>";
            echo $contar->calcular($_POST["peso"], $_POST["altura"]);
        ?>
    </div>
    
</body>
</html>