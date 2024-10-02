<?php
/*
1) Crea un array asociativo con los siguientes datos y claves.
nombre: Sara, apellido: Marơnez, edad: 23, ciudad: Barcelona.
Muestra los valores del array anterior utilizando foreach.
*/

$persona = [
    'nombre' => 'Sara',
    'apellido'=> 'Martínez',
    'edad'=> '23',
    'ciudad'=> 'Barcelona'
];

$i = 1;
foreach ($persona as $valor) {
    echo "dato " . $i . "º: " .  $valor . "<br>";
    $i++;
}

/*
2) Muestra los valores del array del ejercicio 1 mostrando la clave y el valor utilizando
foreach.
*/

echo"<br><br>";
foreach ($persona as $clave => $valor) {
    echo "$clave: $valor<br>";
}

/*
3) Modifica la edad del primer array a 24. Vuelve a mostrar toda su información.
*/

echo "<br><br>";
$persona['edad'] = 24;

$i = 1;
foreach ($persona as $valor) {
    echo "dato " . $i . "º: " . $valor . "<br>";
    $i++;
}

/*
4) Borra la ciudad del array y vuelve a mostrar toda su información usando la función
var_dump.
*/

echo "<br><br>";
unset($persona['ciudad']);

var_dump($persona);

/*
5) Crear un nuevo array con un valor separado por coma a partir de la cadena de texto
$letters = “a,b,c,d,e,f”. Usando la función explode. Muestra su
información en orden descendente
*/

echo "<br><br>";
$letters = "a,b,c,d,e,f";
$arrayLetters = explode(",", $letters);

$arrayLetters = array_reverse($arrayLetters);

$i = 6;
foreach ($arrayLetters as $letter) {
    echo "letter " . $i . "º: " . $letter . "<br>";
    $i--;
}

/*
6) Un profesor quiere registrar las notas de su clase en un array asociativo. Las notas son
las siguientes:
Miguel: 5, Luís: 7, Marta: 10, Isabel: 8, Aitor: 4, Pepe: 1
Guarda los datos en un array asociaƟvo en el orden previo y muéstralos ordenados de
mayor a menor.
*/

echo "<br><br>";
$notas = [
    'Miguel' => 5,
    'Luís' => 7,
    'Marta' => 10,
    'Isabel' => 8,
    'Aitor' => 4,
    'Pepe' => 1
];

arsort($notas);

foreach ($notas as $nombre => $nota) {
    echo "$nombre: $nota<br>";
}

/*
7) Calcula la media de las notas y muéstrala con solo 2 decimales. Además, muestra los
nombres de los alumnos cuya nota esté por encima de la media. 
*/

echo "<br><br>";
$media = array_sum($notas) / count($notas);
echo "Media de las notas: " . number_format($media, 2) . "<br>";

echo "Alumnos con nota por encima de la media:<br>";
foreach ($notas as $nombre => $nota) {
    if ($nota > $media) {
        echo "$nombre<br>";
    }
}

/*
8) Busca en el array la nota más alta (debe hacerse mediante código). Muestra la nota y
el nombre del mejor alumno de la clase. Deberá funcionar para cualquier valor del
array. 
*/

echo "<br><br>";
$notaMax = max($notas);
$mejorAlumno = array_search($notaMax, $notas);

echo "La nota más alta es $notaMax y el mejor alumno es $mejorAlumno";
