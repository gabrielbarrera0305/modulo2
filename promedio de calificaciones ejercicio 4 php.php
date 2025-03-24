<?php
$suma = 0;
$contador = 0;

echo "Ingresa las calificaciones (escribe 'fin' para terminar):\n";

while (true) {
    echo "Calificación " . ($contador + 1) . ": ";
    $input = trim(fgets(STDIN));

    if (strtolower($input) == 'fin') {
        break;
    }

    $calificacion = (float)$input;
    if ($calificacion >= 0 && $calificacion <= 100) {
        $suma += $calificacion; 
        $contador++;
    } else {
        echo "Error: Ingresa una calificación válida entre 0 y 100.\n";
    }
}

if ($contador > 0) {
    $promedio = $suma / $contador;
    echo "\nEl promedio de las calificaciones es: " . number_format($promedio, 2) . "\n";
} else {
    echo "\nNo se ingresaron calificaciones válidas.\n";
}
?>