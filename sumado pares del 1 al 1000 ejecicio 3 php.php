<?php
$suma = 0;

for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        $suma += $i; 
    }
}

echo "La suma de todos los números pares del 1 al 100 es: $suma\n";
?>