<?php
function ordenarValores($valores) {
    $pares = [];
    $impares = [];
    foreach ($valores as $valor) {
        if ($valor % 2 == 0) {
            $pares[] = $valor;
        } else {
            $impares[] = $valor;
        }
    }
    sort($pares);
    rsort($impares);
    foreach ($pares as $par) {
        echo $par . "\n";
    }
    foreach ($impares as $impar) {
        echo $impar . "\n";
    }
}
$N = intval(fgets(STDIN));
$valores = [];
for ($i = 0; $i < $N; $i++) {
    $valores[] = intval(fgets(STDIN));
}
ordenarValores($valores);
?>