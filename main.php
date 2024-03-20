<?php
function encontrarMaior($num1, $num2, $num3) {
    if ($num1 >= $num2 && $num1 >= $num3) {
        return $num1;
    } elseif ($num2 >= $num1 && $num2 >= $num3) {
        return $num2;
    } else {
        return $num3;
    }
}
$valor1 = 10;
$valor2 = 5;
$valor3 = 8;
$maior = encontrarMaior($valor1, $valor2, $valor3);
echo $maior . " eh o maior";
?>