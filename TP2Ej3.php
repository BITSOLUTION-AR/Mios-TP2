<?php

 // Ordenar en forma creciente tres valores diferentes A, B, C.

/*  Combinaciones posibles
    A < B < C   $A < $B && $B < $C && $A < $C
    A < C < B   $A < $C && $C < $B && $A < $B
    B < A < C   $B < $A && $A < $C && $B < $C
    B < C < A   $B < $C && $C < $A && $B < $A
    C < A < B   $C < $A && $A < $B && $C < $B
    C < B < A   $C < $B && $B < $A && $C < $A
    */

 $A = readline("Ingrese un numero: ");
 $B = readline("Ingrese un numero: ");
 $C = readline("Ingrese un numero: ");

if ($A < $B && $B < $C && $A < $C) {
    echo $A . " " . $B . " " . $C;
} elseif ($A < $C && $C < $B && $A < $B) {
    echo $A . " " . $C . " " . $B;
} elseif ($B < $A && $A < $C && $B < $C){
    echo $B . " " . $A . " " . $C;
} elseif ($B < $C && $C < $A && $B < $A) {
    echo $B . " " . $C . " " . $A;
} elseif ($C < $A && $A < $B && $C < $B) {
    echo $C . " " . $A . " " . $B;
} elseif ($C < $B && $B < $A && $C < $A) {
    echo $C . " " . $B . " " . $A;
}



?>