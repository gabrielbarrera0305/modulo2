<?php
echo "Ingresa el primer número: ";
$num1 = (float)trim(fgets(STDIN));

echo "Ingresa el segundo número: ";
$num2 = (float)trim(fgets(STDIN));

echo "Ingresa la operación (+, -, *, /): ";
$operacion = trim(fgets(STDIN));

switch ($operacion) {
    case '+':
        $resultado = $num1 + $num2;
        break;
    case '-':
        $resultado = $num1 - $num2;
        break;
    case '*':
        $resultado = $num1 * $num2;
        break;
    case '/':
        if ($num2 != 0) {
            $resultado = $num1 / $num2;
        } else {
            echo "Error: No se puede dividir entre cero.\n";
            exit; 
        }
        break;
    default:
        echo "Error: Operación no válida.\n";
        exit; 
}

echo "El resultado de $num1 $operacion $num2 es: $resultado\n";
?>