<?php
echo "Ingresa el primer número: ";
$num1 = (float)trim(fgets(STDIN));

echo "Ingresa el segundo número: ";
$num2 = (float)trim(fgets(STDIN));

echo "Ingresa el tercer número: ";
$num3 = (float)trim(fgets(STDIN));

if ($num1 <= $num2 && $num1 <= $num3) {
    $menor = $num1;
    if ($num2 <= $num3) {
        $medio = $num2;
        $mayor = $num3;
    } else {
        $medio = $num3;
        $mayor = $num2;
    }
} elseif ($num2 <= $num1 && $num2 <= $num3) {
    $menor = $num2;
    if ($num1 <= $num3) {
        $medio = $num1;
        $mayor = $num3;
    } else {
        $medio = $num3;
        $mayor = $num1;
    }
} else {
    $menor = $num3;
    if ($num1 <= $num2) {
        $medio = $num1;
        $mayor = $num2;
    } else {
        $medio = $num2;
        $mayor = $num1;
    }
}

echo "Los números ordenados de menor a mayor son: $menor, $medio, $mayor\n";
?>