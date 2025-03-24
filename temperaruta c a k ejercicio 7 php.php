<?php
echo "Ingresa la temperatura en grados Celsius: ";
$celsius = (float)trim(fgets(STDIN)); 

$fahrenheit = ($celsius * 9/5) + 32;

echo "$celsius °C equivale a $fahrenheit °F\n";
?>