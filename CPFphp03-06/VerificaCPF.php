 <!DOCTYPE html>
 <html lang="pt_br">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do CPF</title>
    <link rel="stylesheet" href="estilo.css">

 </head>
 <body>
     <main>
    <?php
        //o entre [] é para pegar o valor do input, pelo nome (ñ pelo id)
        $CPF = $_POST["CPF"];

        $Resultado = true

        if ($Resultado === true) {
            $Resultado = "verdadeiro"
        } else {
            $Resultado = "falso"
        }
        
        echo "<div class=\"container\"><p> o seu CPF é" . $Resultado .".</p></div>";
        // as \\ para n considerar as "" como do código do php, mas parte do texto.
?>
</main>
 </body>
 </html>


 <!-- 
        $item = "Café";
        $valor = 12.50;
        printf("O %s custa R$ %.2f", $item, $valor);
        // Saída: O Café custa R$ 12.50

// \n enter 
// % fala q vai ser uma variável, o s fala q é string, o f fala q é float (número decimal), e o número entre % e f fala quantas casas decimais mostrar.


        $numero = 1234.5678;


        echo number_format($numero, 2, ',', '.'); 
        //Saída:
                1.234,57 (Arredonda e usa vírgula decimal)

        // Formato: number_format(valor, casas decimais, separador decimal, separador milhar)


        O operador ?: verifica se o valor é "verdadeiro". Se for falso (vazio ou 0), ele assume o valor à direita. 
        $valor = $_POST['campo'] ?: 0;

-->