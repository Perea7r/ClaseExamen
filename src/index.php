<?php

use ITEC\PRESENCIAL\DAW\EXAMEN\asignatura;
use ITEC\PRESENCIAL\DAW\EXAMEN\fecha;
use ITEC\PRESENCIAL\DAW\EXAMEN\profesor;
use ITEC\PRESENCIAL\DAW\EXAMEN\listadoPreguntas;
use ITEC\PRESENCIAL\DAW\EXAMEN\hora;
use ITEC\PRESENCIAL\DAW\EXAMEN\examen;
use ITEC\PRESENCIAL\DAW\EXAMEN\pregunta;

include_once "../vendor/autoload.php";

$asignatura = new asignatura(001, "Programacion");
$profesor = new profesor(016, "Ruben", fecha::createFecha(02,06,1995));
$fecha = new fecha(02, 06, 2022);
$hora = new hora(12, 00, 30);
$listadoPreguntas = new listadoPreguntas();
    pregunta::crearPregunta(001, "¿Que es una variable?",2);
    pregunta::crearPregunta(002, "¿Que es una clase?",2);
    pregunta::crearPregunta(003, "¿Que es una funcion?",2);
    pregunta::crearPregunta(004, "¿Que apareció antes el huevo a la gallina?",2);
    pregunta::crearPregunta(005, "¿Kike es un ser de luz?",2);
$examen = new examen($asignatura,$fecha,$hora,$profesor,$listadoPreguntas);
?>