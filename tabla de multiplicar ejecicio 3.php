<?php
echo "Ingresa un número: ";
$numero = (int)trim(fgets(STDIN));

echo "\nTabla de multiplicar del $numero:\n";
for ($i = 1; $i <= 10; $i++) {
    $resultado = $numero * $i;
    echo "$numero x $i = $resultado\n";
}
?>