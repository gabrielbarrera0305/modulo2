<?php
echo "Ingresa una cadena de texto: ";
$cadena = trim(fgets(STDIN));

$cadena = strtolower($cadena);

$contadorVocales = 0;

$vocales = ['a', 'e', 'i', 'o', 'u'];

for ($i = 0; $i < strlen($cadena); $i++) {
    if (in_array($cadena[$i], $vocales)) {
        $contadorVocales++;
    }
}

echo "El número de vocales en la cadena es: $contadorVocales\n";
?>