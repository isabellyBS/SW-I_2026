
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="home.html">Voltar</a>
    <br><br>
    <?php
        $split = $_POST['ProSplit'];
        $replace = $_POST['ProReplace'];
        $length = $_POST['ProLength'];

        if ($split != "") {
            $result = str_split($split);
            echo "Split, que divide cada caracter juntando em um array: <br>";
            foreach ($result as $part) {
                echo $part . "<br>";
            }
            echo"<br>";
        }

        if ($replace != "") {
            $result = preg_replace('/[^0-9]/', '', $replace);
            echo "Replace, que substitui/reestrutura um valor por outro, no caso, tira o que não é número: <br>" . $result;
            echo"<br><br>";

//         <p>Search the string "Hello World!", find the value "world" and replace it with "Peter":</p>

//           <?php
//      echo str_replace("world","Peter","Hello world!"); # Outputs: Hello Peter!
        }

        if ($length != "") {
            $result = strlen($length);
            echo "Length, que conta a quantidade de caracteres, diz que (" . $length . ") tem: <br>" . $result;
        }
    ?>
</body>
</html>