<?php
/*1. Se declara una variable con un valor numérico. Utilizando una estructura switch/case
genera un mensaje que indique a qué día de la semana se corresponde. */
$dia = 2;

switch ($dia) {
    case 1:
        echo "El número $dia corresponde a Lunes.";
        break;
    case 2:
        echo "El número $dia corresponde a Martes.";
        break;
    case 3:
        echo "El número $dia corresponde a Miércoles.";
        break;
    case 4:
        echo "El número $dia corresponde a Jueves.";
        break;
    case 5:
        echo "El número $dia corresponde a Viernes.";
        break;
    case 6:
        echo "El número $dia corresponde a Sábado.";
        break;
    case 7:
        echo "El número $dia corresponde a Domingo.";
        break;
        
    /*En caso de que no sea un valor entre el 1 y el 7 indica que no se corresponde con ningún día. */
    default:
        echo "El número $dia no se corresponde con ningún día de la semana.";
        break;
}
