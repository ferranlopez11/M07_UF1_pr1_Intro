<?php
/*1. Declare dos variables numéricas, las sume, reste, divida y muestre los valores de las variables y los resultados de sus operaciones. */
$num1 = 6;
$num2 = 8;

$suma = $num1 + $num2;
$resta = $num1 - $num2;
$division = $num1 / $num2;

echo "Número 1: $num1<br>";
echo "Número 2: $num2<br>";
echo "Suma: $suma<br>";
echo "Resta: $resta<br>";
echo "División: $division<br><br>";

/*2. Muestra cuál es mayor, cuál menor o si son iguales. */
if ($num1 > $num2) {
    echo "$num1 es mayor que $num2<br>";
} elseif ($num1 < $num2) {
    echo "$num1 es menor que $num2<br>";
} else {
    echo "$num1 y $num2 son iguales<br>";
}

/*Si las dos variables son valores superiores a 1, calcula el área del triángulo con base y altura igual a los valores de las
variables. */
if ($num1 > 1 && $num2 > 1) {
    $area = ($num1 * $num2) / 2;
    echo "<br>Área del triángulo con base $num1 y altura $num2: $area";
}
