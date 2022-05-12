<?php
namespace ITEC\PRESENCIAL\DAW\EXAMEN;
class examen{
    private asignatura $asignatura;
    private fecha $fecha;
    private hora $hora;
    private profesor $profesor;
    private listadoPreguntas $listadoPreguntas;

    public function __construct(asignatura $asignatura, fecha $fecha, hora $hora, profesor $profesor, listadoPreguntas $listadoPreguntas ){
        
    }
        
}
?>