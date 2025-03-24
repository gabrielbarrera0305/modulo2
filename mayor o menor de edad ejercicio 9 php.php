<?php
echo "Ingresa tu edad: ";
$edad = (int)trim(fgets(STDIN)); 

if ($edad >= 18) {
    echo "Eres mayor de edad.\n";
} else {
    echo "Eres menor de edad.\n";
}
?>