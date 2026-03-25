 <!DOCTYPE html>
 <html lang="pt_br">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
     <main>
    <?php
        $MSG = "Sua média é: ";
        $nome = "User";
        //$M1 = ;
       // $M2 = uniqid(MencaoDois);
       // $M3 = uniqid(MencaoTres);
       // $media = 0;
        //$media = (($_POST["MencaoUm"] + $_POST["MencaoDois"] + $_POST["MencaoTres"])/3);

        //function Media{
        
        $_m1 = $_POST["MencaoUm"];
        $_m2 = $_POST["MencaoDois"];
        $_m3 = $_POST["MencaoTres"];
        $_media= (($_m1+$_m2+$_m3)/3);
        echo "<p>$_media</p>"

        // }
        // echo $MSG;
        // if ($media >= 9) {
        // echo "MB";
        // }
        // if ($media < 9 && $media >= 7) {
        //     echo "B";
        // }
        // if ($media < 7 && $media >= 4) {
        //     echo "R";
        // }
        // if ($media < 4) {
        //     echo "I";
        // }
?>
</main>
 </body>
 </html>