<?php
/*1. Se declaren dos variables con valores numéricos superiores a 10 y seguidamente: */
$num1 = 11;
$num2 = 33;

/*2. Muestra la progresión numérica de los números pares desde 0 hasta el valor de la
primera con un bucle for. */
echo "Números pares desde 0 hasta $num1:<br>";
for ($i = 0; $i <= $num1; $i += 2) {
    echo "$i ";
}
echo "<br><br>";

/*3. Muestra la progresión numérica desde la segunda variable hasta 0 con un bucle
while. */
echo "Progresión numérica desde $num2 hasta 0:<br>";
while ($num2 >= 0) {
    echo "$num2 ";
    $num2--;
}
echo "<br><br>";

/*4. Muestra la progresión numérica desde la primera variable a la segunda con un bucle
do/while. */
$num2 = 33;
echo "Progresión numérica desde $num1 hasta $num2:<br>";

/*Si la segunda variable es más pequeña, sólo queremos que imprima una vez
el valor de la primera variable. */
if ($num1 > $num2) {
    echo "$num1";
} else {
    do {
        echo "$num1 ";
        $num1++;
    } while ($num1 <= $num2);
}
