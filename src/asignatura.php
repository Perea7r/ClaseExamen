<?php
namespace ITEC\PRESENCIAL\DAW\EXAMEN;
class asignatura{
    private int $ID;
    private string $titulo;

    public function __construct(int $ID, string $titulo){
        $this->ID = $ID;
        $this->titulo = $titulo;
    }
}

?>