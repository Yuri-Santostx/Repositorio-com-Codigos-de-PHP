<?php
function somaImpares($X, $Y) {
    $soma = 0;
    $menor = min($X, $Y);
    $maior = max($X, $Y);
    for ($i = $menor + 1; $i < $maior; $i++) {
        if ($i % 2 != 0) {
            $soma += $i;
        }
    }

    return $soma;
}
$X = intval(fgets(STDIN));
$Y = intval(fgets(STDIN));
$soma = somaImpares($X, $Y);
echo $soma . "\n";
?>