
// Ingresar el nombre del estudiante y la nota del examen final (Nota de tipo entero). Asignar la calificación de acuerdo a las notas de la tabla, hacer el algoritmo y ejecutar las pruebas como se nota en la figura:

// VER PDF del practico para ver las tablas que se necesitan.


<?php

$nombreEstudiante = readline("Ingrese el nombre del estudiante: ");
$nota = readline("ingrese la nota del estudiante: ");

switch ($nota) {
    case 10:
        echo "$nombreEstudiante, tu nota es: $nota, tu calificación es: Sobresaliente";
        break;
    case 9:
    case 8:
        echo "$nombreEstudiante, tu nota es: $nota, tu calificación es: Distinguido";
        break;
    case 7:
    case 6:
        echo "$nombreEstudiante, tu nota es: $nota, tu calificación es: Bueno";
        break;
    case 5:
    case 4:
        echo "$nombreEstudiante, tu nota es: $nota, tu calificación es: Suficiente";
        break;
    case 3:
    case 2:
    case 1:
        echo "$nombreEstudiante, tu nota es: $nota, tu calificación es: Insuficiente";
        break;
    case 0:
        echo "$nombreEstudiante, tu nota es: $nota, tu calificación es: Reprobado";
        break;
    default:
        echo "Ingrese una nota válida";
        break;
}

?>