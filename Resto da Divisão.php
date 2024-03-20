<?php
function imprimirValores($num_um, $num_dois) {
    $menor = min($num_um, $num_dois);
    $maior = max($num_um, $num_dois);
    for ($i = $menor + 1; $i < $maior; $i++) {
        if ($i % 5 == 2 || $i % 5 == 3) {
            echo $i . "\n";
        }
    }
}
$num_um = intval(fgets(STDIN));
$num_dois = intval(fgets(STDIN));
imprimirValores($num_um, $num_dois);

?>
