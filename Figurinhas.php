<?php
function mdc($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}
$N = intval(fgets(STDIN));
for ($i = 0; $i < $N; $i++) {
    list($F1, $F2) = explode(" ", fgets(STDIN));
    $tamanho_pilha = mdc($F1, $F2);
    echo $tamanho_pilha . "\n";
}
?>