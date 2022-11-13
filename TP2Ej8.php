
// En una tienda de descuento se efectúa una promoción en la cual se hace un descuento sobre el valor de la compra total según el color de la bolita que el cliente saque al pagar en caja. Si la bolita es de color blanco no se le hará descuento alguno, si es verde se le hará un 10% de descuento, si es amarilla un 25%, si es azul un 50% y si es anaranjada un 100%. Determinar la cantidad final que el cliente deberá pagar por su compra si se sabe que solo hay bolitas de los colores mencionados.


<?php

$colorBolita = readline("El color de la bolita en su compra es: ");
$valorCompra = readline("El valor de la compra es: ");

switch ($colorBolita) {
    case "blanco":
        echo "No tiene descuento" . PHP_EOL;
        $valorCompra = $valorCompra;
        echo "El costo total de su compra es de: $ $valorCompra";
        break;
    case "verde":
        echo "Tiene un descuento del 10%" . PHP_EOL;
        $valorCompra = $valorCompra * 0.9;
        echo "El costo total de su compra es de: $ $valorCompra";
        break;
    case "amarilla":
        echo "Tiene un descuento del 25%" . PHP_EOL;
        $valorCompra = $valorCompra * 0.75;
        echo "El costo total de su compra es de: $ $valorCompra";
        break;
    case "azul":
        echo "Tiene un descuento del 50%" . PHP_EOL;
        $valorCompra = $valorCompra * 0.5;
        echo "El costo total de su compra es de: $ $valorCompra";
        break;
    case "anaranjada":
        echo "Tiene un descuento del 100%" . PHP_EOL;
        $valorCompra = $valorCompra * 0;
        echo "El costo total de su compra es de: $ $valorCompra";
        break;
    default:
        echo "Usted debe sacar una bolita";
        break;

}

?>