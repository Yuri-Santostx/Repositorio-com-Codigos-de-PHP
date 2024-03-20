<?php
function decodificarCifraCesar($texto_codificado, $deslocamento) {
    $texto_decodificado = "";
    for ($i = 0; $i < strlen($texto_codificado); $i++) {
        $caractere = $texto_codificado[$i];
        if (ctype_upper($caractere)) {
            $indice = ord($caractere) - $deslocamento;
            if ($indice < ord('A')) {
                $indice += 26;
            }
            $texto_decodificado .= chr($indice);
        } else {
            $texto_decodificado .= $caractere;
        }
    }

    return $texto_decodificado;
}
$N = intval(fgets(STDIN));
for ($i = 0; $i < $N; $i++) {
    $texto_codificado = rtrim(fgets(STDIN));
    $deslocamento = intval(fgets(STDIN));
    echo decodificarCifraCesar($texto_codificado, $deslocamento) . "\n";
}
?>