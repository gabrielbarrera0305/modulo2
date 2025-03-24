<?php
echo "Ingresa un número para calcular su factorial: ";
$numero = (int)trim(fgets(STDIN)); 

function calcularFactorial($n) {
    if ($n < 0) {
        return "No se puede calcular el factorial de un número negativo.";
    } elseif ($n == 0 || $n == 1) {
        return 1; 
    } else {
        $factorial = 1;
        for ($i = 2; $i <= $n; $i++) {
            $factorial *= $i; 
        }
        return $factorial;
    }
}
$resultado = calcularFactorial($numero);

echo "El factorial de $numero es: $resultado\n";
?>