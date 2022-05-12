<?php
Namespace ITEC\PRESENCIAL\DAW\EXAMEN;

class pregunta{
    private int $ID;
    private string $descripcion;
    private int $notaMax;

    public function __construct(int $ID, string $descripcion, int $notaMax = 10){
        $this->descripcion = $descripcion;
        $this->Nota = $notaMax;
        $this->ID = $ID;
    }

    public static function crearPregunta(int $ID, string $descripcion, int $notaMax){
        return new pregunta($ID, $descripcion, $notaMax);
    }

    public function ID():int {
        return $this ->ID;
    }

    public function descripcion():string {
        return $this ->descripcion;
    }

    public function notaMax():int {
        return $this ->notaMax;
    }

    public function puntuacionFinal(int $puntuacion):bool {
        return $puntuacion <= $this->puntuacionFinal && $puntuacion >= 0;
    }

    public function isThisID(int $ID) :bool{
        return $this->ID === $ID;
    }
}
?>