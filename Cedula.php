<?php
function calcularNotas($valor) {
    $notas = [100, 50, 20, 10, 5, 2, 1];
    $quantidades = [];

    foreach ($notas as $nota) {
        $quantidade = (int)($valor / $nota);
        $quantidades[$nota] = $quantidade;
        $valor %= $nota;
    }

    return $quantidades;
}
$valor = intval(fgets(STDIN));
$notas_necessarias = calcularNotas($valor);
echo $valor . "\n";
foreach ($notas_necessarias as $nota => $quantidade) {
    echo $quantidade . " nota(s) de R$ " . $nota . ",00\n";
}
?>