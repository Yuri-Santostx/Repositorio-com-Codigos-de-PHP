<?php
function calcularMinutosParaDormir($hora_atual, $minuto_atual, $hora_alarme, $minuto_alarme) {
    $total_minutos_atual = $hora_atual * 60 + $minuto_atual;
    $total_minutos_alarme = $hora_alarme * 60 + $minuto_alarme;

    if ($total_minutos_alarme > $total_minutos_atual) {
        return $total_minutos_alarme - $total_minutos_atual;
    } else {
        return 24 * 60 - ($total_minutos_atual - $total_minutos_alarme);
    }
}
while (true) {
    fscanf(STDIN, "%d %d %d %d", $hora_atual, $minuto_atual, $hora_alarme, $minuto_alarme);
    if ($hora_atual == 0 && $minuto_atual == 0 && $hora_alarme == 0 && $minuto_alarme == 0) {
        break;
    }
    echo calcularMinutosParaDormir($hora_atual, $minuto_atual, $hora_alarme, $minuto_alarme) . "\n";
}
?>