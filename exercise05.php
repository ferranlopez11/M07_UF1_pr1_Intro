<?php
$total = 0;
$pares = 0;
$impares = 0;
$numeros = [];

/*1. Se genere un número aleatorio entre 0 y 20 y se muestre por pantalla. */
/*2. Se repita la operación hasta que el total de valores sumados sea superior a 100. */
while ($total <= 100) {
    $num = rand(0, 20);
    $numeros[] = $num;
    $total += $num;
    
    if ($num % 2 == 0) {
        $pares++;
    } else {
        $impares++;
    }
}

/*3. Muestra la suma de los valores generados. */
echo "Números generados: " . implode(", ", $numeros) . "<br>";
echo "Total: $total<br>";

/*4. Muestra el total de números pares e impares generados. */
echo "Pares: $pares<br>";
echo "Impares: $impares<br>";
