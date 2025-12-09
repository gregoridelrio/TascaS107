<?php
$num1 = 5;
$num2 = 0;

try {
    $resultat = $num1 / $num2;
    echo "El resultat es : " . $resultat;

} catch (DivisionByZeroError $e) {
    echo "Error: No es pot dividir entre zero.";
}

