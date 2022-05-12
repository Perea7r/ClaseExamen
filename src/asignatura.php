<?php
namespace ITEC\PRESENCIAL\DAW\EXAMEN;
class asignatura{
    private int $ID;
    private string $nombre;

    public function __construct(int $ID, string $nombre){
        $this->ID = $ID;
        $this->nombre = $nombre;
    }

    public function ID():int {
        return $this ->ID;
    }

    public function nombre():string {
        return $this -> nombre;
    }

    public static function crearAsignatura(int $ID, string $nombre){
        return new asignatura($ID, $nombre);
    }

}