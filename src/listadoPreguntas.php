<?php
namespace ITEC\PRESENCIAL\DAW\EXAMEN;

use ITEC\PRESENCIAL\DAW\EXAMEN\pregunta;


class listadoPreguntas{
    private array $preguntas;
    private int $lastID=0;

    /**
     * Undocumented function
     * 
     * @param array $preguntas
     * [
     *  "id"=>[
     *      "descripcion"=>"",
     *      "notaMax"=>0
     *  ]
     * ]
     */

     private function __construct(){
        $this->preguntas = [];
     }

     public function nuevaPregunta(String $descripcion, int $puntuacionMaxima){
         $this->preguntas[] = pregunta::create($descripcion, self::$lastID++, $puntuacionMaxima);
     }

     public function añadirPregunta(pregunta $pregunta){
         $this->preguntas[] = $pregunta;
     }

     public function obtenerPreguntas():int {
        return count($this->$preguntas);
     }

     public function getTotalPuntuacion():int {
         $total = 0;
         foreach($this->preguntas as $pregunta){
             $total += $pregunta->getPuntuacionMaxima;
         }
         return $total;
     }
}
?>