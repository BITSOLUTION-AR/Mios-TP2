
// En un hospital se ha hecho un estudio sobre los pacientes registrados durante los últimos 10 años, con el objeto de hacer una aproximación de los costos de internación por paciente. Se obtuvo un costo promedio diario según el tipo de enfermedad que aqueja al paciente. La siguiente tabla expresa los costos diarios, según el tipo de enfermedad. Construya un algoritmo que calcule e imprima el costo total que representa un paciente.

                        // Tipo de Enfermedad  Costo/Paciente/Día
                        //         1                   125
                        //         2                   116
                        //         3                   120
                        //         4                   132
                        //         5                   138


<?php

$tipoEnfermedad = readline("Ingrese el tipo de enfermedad: ");
$dias = readline("Ingrese la cantidad de dias: ");

switch($tipoEnfermedad) {
    case 1:
        echo "El costo total del paciente es: $" . 125 * $dias;
        break;
    case 2:
        echo "El costo total del paciente es: $" . 116 * $dias;
        break;
    case 3:
        echo "El costo total del paciente es: $" . 120 * $dias;
        break;
    case 4:
        echo "El costo total del paciente es: $" . 132 * $dias;
        break;
    case 5:
        echo "El costo total del paciente es: $" . 138 * $dias;
        break;
    default:
        echo ($tipoEnfermedad) ? "El tipo de enfermedad ingresado no es válido" : "No se ingresó ningún tipo de enfermedad";
        break;
}

?>