 <!DOCTYPE html>
 <html lang="pt_br">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do CPF</title>
    <link rel="shortcut icon" href="iconCPF.png" type="image/x-icon">
    <link rel="stylesheet" href="estilo.css">

 </head>
 <body>
     <main>
        <?php
            //o entre [] é para pegar o valor do input, pelo nome (ñ pelo id)
            $nome = $_POST["nome"];
            $cpf = $_POST["CPF"];
            $CPF = preg_replace("/[^0-9]/", "", $cpf); // deixa só os nº
            $Soma=0;
            $Soma2=0;

            $digitosCPF = str_split($CPF); // separa os números do CPF em um array

            for ($i=0; $i < 9; $i++) { 
                $ValorPraSoma = $digitosCPF[$i] * (10 - $i); // pega o número do CPF e * pelo n°
                $Soma += $ValorPraSoma; // soma o resultado
            }

            $Resto = $Soma % 11; // pega o resto da divisão da $Soma por 11

            #O que tem q faze agr peguei do https://www.campuscode.com.br/conteudos/o-calculo-do-digito-verificador-do-cpf-e-do-cnpj (pois não compreendi direito pelo slide)
            $Digito1 = 11 - $Resto; 
            if ($Digito1 >= 10) { 
                $Digito1 = 0;
            }

            $Resultado = true;
            if ($Digito1 != $digitosCPF[9]) {
                $Resultado = false;
            } else {
                for ($i=0; $i < $digitosCPF[10]; $i++) { 
                    $ValorPraSoma = $digitosCPF[$i] * (11 - $i);
                    $Soma2 += $ValorPraSoma;
                }

                $Resto2 = $Soma2 % 11;
                $Digito2 = 11 - $Resto2;
                if ($Digito2 >= 10) {
                    $Digito2 = 0;
                }

                if ($Digito2 != $digitosCPF[10]) {
                    $Resultado = false;
                } else {
                    $Resultado = true;
                }
            }
            

            if ($Resultado === true) {
                $Resultado = "verdadeiro";
            } else {
                $Resultado = "falso";
            }
        
            echo "<div class=\"containerResultado\"><h2>" . $nome . ", o seu CPF é " . $Resultado .".</h2></div>";
            // as \\ para n considerar as "" como do código do php, mas parte do texto.
        echo  "<a href=\"forms.html\" class=\"btn\">Refazer</a>";
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
