<?php
Namespace ITEC\PRESENCIAL\DAW\EXAMEN;

class profesor{
    private int $DNI;
    private string $nombre;
    private \Datetime $fecha;

    public function __construct(int $DNI, string $nombre, int $fecha){
        $this->nombre = $nombre;
        $this->fecha = $fecha;
        $this->DNI = $DNI;
    }

    public function crearProfesor(int $DNI, string $nombre, $fecha){
        return new pregunta($DNI, $nombre, $fecha);
    }

    public function DNI():int {
        return $this ->DNI;
    }

    public function nombre():string {
        return $this ->nombre;
    }

    public function obtenerFecha(){
        return $this->fecha->format("j/n/Y");
    }

    public function isThisDNI(int $DNI) :bool{
        return $this->DNI === $DNI;
    }
}
?>