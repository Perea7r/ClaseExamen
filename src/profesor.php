<?php
Namespace ITEC\PRESENCIAL\DAW\EXAMEN;
use ITEC\PRESENCIAL\DAW\EXAMEN\fecha;

class profesor{
    private int $ID;
    private string $nombre;
    private fecha $fecha;

    public function __construct(int $ID, string $nombre, fecha $fecha){
        $this->nombre = $nombre;
        $this->fecha = $fecha;
        $this->ID = $ID;
    }

    public function crearProfesor(int $ID, string $nombre, fecha $fecha){
        return new profesor($ID, $nombre, $fecha);
    }

    public function ID():string {
        return $this ->ID;
    }

    public function nombre():string {
        return $this ->nombre;
    }

    public function createFecha(string $nombre, fecha $fecha, int $ID){
        return new profesor($ID, $nombre, $fecha);
    }

    public function isThisID(int $ID) :bool{
        return $this->ID === $ID;
    }
}
?>