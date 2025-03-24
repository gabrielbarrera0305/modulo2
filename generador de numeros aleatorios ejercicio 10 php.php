<?php
$numeroAleatorio = rand(1, 100);

echo "¡Adivina el número entre 1 y 100!\n";

while (true) {
    echo "Ingresa tu adivinanza: ";
    $adivinanza = (int)trim(fgets(STDIN)); 

    if ($adivinanza < $numeroAleatorio) {
        echo "El número es mayor. ¡Intenta de nuevo!\n";
    } elseif ($adivinanza > $numeroAleatorio) {
        echo "El número es menor. ¡Intenta de nuevo!\n";
    } else {
        echo "¡Felicidades! Adivinaste el número.\n";
        break; 
    }
}
?>