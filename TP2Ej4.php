<?php

// Escribir un algoritmo que con solo ingresar los lados de un triángulo rectángulo le dice al usuario si es isoceles,
// escaleno o equilatero.

// Equilatero.  A = B = C
// Isosceles    A = B != C
// Escaleno     A != B != C

$A = readline("Ingrese A: ");
$B = readline("Ingrese B: ");
$C = readline("Ingrese C: ");

if ($A == $B && $B == $C) {
    echo "El triangulo es Equilatero";
} elseif ($A == $B || $B == $C || $A == $C) {
    echo "El triangulo es Isosceles";
} else {
    echo "El triangulo es Escaleno";
}

?>