<?php

/* Una institución de educación, con carreras tanto diurnas como vespertinas, considera lo siguiente en su proceso académico:
si un estudiante de carrera vespertina tiene una nota de presentación mayor o igual a 6, se exime, y si no alcanza el 6 pero
tiene una nota de presentación igual o mayor a 3.5, rinde examen. Si el estudiante es de carrera diurna y si su nota de
presentación es mayor o igual a 3.5, rinde examen (no hay posibilidad de eximirse). En ambos regímenes, si la nota de
presentación es menor que 3.5, reprueba. Hacer la tabla de decisión y escriba el algoritmo correspondiente. */

$nota = readline("Ingrese una nota: ");
$carrera = readline("Ingrese una carrera: ");

if ($carrera == "vespertina") {
    if ($nota >= 6 && $nota <= 10) {
        echo "Eximido";
    } elseif ($nota >= 3.5 &&  $nota < 6) {
        echo "Rinde examen";
    } else {
        echo "Reprueba";
    }
} elseif ($carrera == "diurna") {
    if ($nota >= 3.5 && $nota <= 10) {
        echo "Rinde examen";
    } else {
        echo "Reprueba";
    }
}

?>