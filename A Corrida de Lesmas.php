<?php
function identificarNivelVelocidade($velocidades) {
    $mais_veloz = max($velocidades);

    if ($mais_veloz < 10) {
        return 1;
    } elseif ($mais_veloz < 20) {
        return 2;
    } else {
        return 3;
    }
}
while (true) {
    $L = intval(fgets(STDIN));
    if ($L === false) {
        break;
    }
    $velocidades = explode(' ', trim(fgets(STDIN)));
    $nivel_velocidade = identificarNivelVelocidade($velocidades);
    echo $nivel_velocidade . "\n";
}
?>