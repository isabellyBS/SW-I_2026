 <!DOCTYPE html>
 <html lang="pt_br">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo Salarial PHP</title>
    <link rel="stylesheet" href="estilo.css">

 </head>
 <body>
     <main>
    <?php
        //o entre [] é para pegar o valor do input, pelo nome (ñ pelo id)
        $nome = $_POST["nome"];
        $_salarioBruto = $_POST["salario"];
        $_faltas = $_POST["Faltas"];
        $_valeTransporte = $_POST["valeTransporte"];

        $_INSS= 8475.55*0.14;

        if ($_salarioBruto <= 1621) {
                $_INSS = $_salarioBruto*0.075;
        } else if ($_salarioBruto <= 2902.84) {
                $_INSS = $_salarioBruto*0.09;
        } else if ($_salarioBruto <= 4354.27) {
                $_INSS = $_salarioBruto*0.12;
        } else if ($_salarioBruto <= 8475.55) {
                $_INSS = $_salarioBruto*0.14;
        }
        
        $salarioLiquido = $_salarioBruto - $_INSS - ($_faltas * ($_salarioBruto/30))- ($_valeTransporte == true ? $_salarioBruto*0.06 : 0);
        // coloquei 6% no vale transporte mesmo

        echo "<div class=\"container php\"><p> $nome, o seu salário líquido é de R$" . number_format($salarioLiquido, 2, ',', '.') . ".</p></div>";
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