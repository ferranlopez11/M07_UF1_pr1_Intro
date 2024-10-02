<?php
/*1. Genere un número aleatorio entre el 1 y el 6 para simular la tirada de un dado. */
$dado = rand(1, 6);

/*2. Muestra en números y letras el valor obtenido y valor que tendrá el dado en la cara
opuesta. (1:6, 2:5, 3:4) */
function numeroALetras($numero) {
    switch ($numero) {
        case 1: return "uno";
        case 2: return "dos";
        case 3: return "tres";
        case 4: return "cuatro";
        case 5: return "cinco";
        case 6: return "seis";
        default: return "desconocido";
    }
}

switch ($dado) {
    case 1: $opuesto = 6; break;
    case 2: $opuesto = 5; break;
    case 3: $opuesto = 4; break;
    case 4: $opuesto = 3; break;
    case 5: $opuesto = 2; break;
    case 6: $opuesto = 1; break;
}

echo "Valor del dado: $dado (" . numeroALetras($dado) . ")<br>";
echo "Valor en la cara opuesta: $opuesto (" . numeroALetras($opuesto) . ")";
