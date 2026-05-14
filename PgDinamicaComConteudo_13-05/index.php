<?php

$Menu = [
    'Home' => '<h2>As 4 principais vozes da música</h2>  <p>As 4 vozes principais na harmonia vocal clássica, frequentemente usadas em corais e arranjos musicais, são: Soprano (aguda feminina), Contralto (grave feminina), Tenor (aguda masculina) e Baixo (grave masculina). Esse conjunto é conhecido pela sigla SATB, organizando o arranjo em frequências agudas, médias e graves.</p>  <p>As vozes são classificadas de acordo com a extensão vocal, ou seja, a gama de notas que um cantor pode alcançar confortavelmente</p>',
    'Soprano' => '<h2>Soprano</h2><p>O soprano é a voz mais aguda do coro, geralmente interpretada por mulheres.</p>  <p>Conhecida por sua leveza, brilho e capacidade de alcançar notas altas com clareza. É a voz que geralmente canta a melodia principal em corais e óperas.</p>',
    'Contralto' => '<h2>Contralto</h2><p>O contralto é o tipo de voz feminina mais grave, encorpada e rara. Diferente dos sopranos (vozes agudas) e mezzo-sopranos (médias), o contralto se destaca pela profundidade e riqueza de timbres na região média e grave.</p><p>A voz contralto é descrita como profunda, aveludada, escura e encorpada, e é considerada a voz feminina mais rara, sendo muito valorizada na música erudita, operística e corais por seu suporte harmônico.</p>',
    'Tenor' => '<h2>Tenor</h2><p>O tenor é a voz masculina mais aguda no canto lírico convencional, caracterizada por um timbre potente e brilhante, capaz de alcançar notas altas sem o uso de falsete.</p>  <p> Essa classificação é fundamental na música erudita e em musicais, muitas vezes representando o herói ou o protagonista apaixonado.</p>',
    'Baixo' => '<h2>Baixo</h2><p>O baixo é a classificação vocal masculina mais grave, conhecida por sua potência, profundidade e ressonância. É uma voz caracterizada pela sua capacidade de alcançar notas profundas com facilidade</p>  <p>É essencial em corais e na música erudita para sustentar a harmonia.</p>',
]

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>As 4 vozes da música</title>
</head>

<header>
    <?php

    //pega o valor de cada chave da variavel Menu (q é tipo um dicionário)
    foreach($Menu as $key => $value){
        echo'<a href="?page='.$key.'">'.$key.'</a> | ';
    }    
    
    ?>
</header>

<body>
    <?php
    $pagina = isset($_GET['page']) ? $_GET['page'] : 'Home'; //na URL existe o parâmetro "page"? Se sim use ele. Caso contrário, define como "Home" (padrão)

    if (array_key_exists ($pagina, $Menu)) { #if pra caso n existir
        echo $Menu[$pagina]; // exibe o conteúdo
    } else {
        echo '<h1>Página não encontrada</h1>'; // caso n encontre 
    }
    
    ?>
</body>
</html>