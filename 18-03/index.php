<?php
$MSG = "Sua média é: ";
$nome = "User";
$M1 = 80;
$M2 = 0;
$M3 = 0;
$media = 0;
$media = (($M1 + $M2 + $M3)/3);

echo $MSG;
if ($media >= 9) {
    echo "MB";
}
if ($media < 9 && $media >= 7) {
    echo "B";
}
if ($media < 7 && $media >= 4) {
    echo "R";
}
if ($media < 4) {
    echo "I";
}
?>