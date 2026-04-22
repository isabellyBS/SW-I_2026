<?php

$Menu = [
    'home' => '<h1>Home</h1><h3>Aba inicial, "casa".</h3>',
    'Contato' => '<h1>Contato</h1> <h3>Para nos contatar, mande mensagem para +55 XX XXXXX-XXXX.</h3>',
    'Sobre' => '<h1>Sobre</h1> <h3>Esse site fala sobre [...].</h3>',
    'Experiências' => '<h1>Experiências</h1>  <h3>Temos experiências nessa área!</h3>',
    'Projetos' => '<h1>Projetos</h1> <h3>Outro projeto é:</h3><a href="https://isabellybs.github.io/TsukiOdyssey/">Tsuki Odyssey</a>',
]

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dinâmico</title>
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
</head>

<header>
    <?php

    //pega o valor de cada chave da variavel Menu
    foreach($Menu as $key => $value){
        echo'<a href="?page='.$key.'">'.$key.'</a> | ';
    }    
    
    ?>
</header>

<body>
    <?php
    $pagina = isset($_GET['page']) ? $_GET['page'] : 'home'; //na URL existe o parâmetro "page"? Se sim use ele. Caso contrário, define como "Home" (padrão)

    if (array_key_exists ($pagina, $Menu)) { #if pra caso n existir (na array $Menu) n der erro, só falar q n achou
        echo $Menu[$pagina]; // exibe o conteúdo correspondente à pg
    } else {
        echo '<h1>Página não encontrada</h1>'; // caso n encontre 
    }
    
    ?>
</body>
</html>