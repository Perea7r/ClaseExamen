<?php
namespace ITEC\PRESENCIAL\DAW\FECHA;

use DateTime;

class fecha {
    private int $dias;
    private int $meses;
    private int $años;
    private \DateTime $dateTimeObj;

    public function __construct(int $dias, int $meses, int $años){
        $this->dateTimeObj = new \DateTime();
        $this->dateTimeObj ->setTime($dias, $meses, $años);
        $this->dias = $dias;
        $this->minutos = $meses;
        $this->segundos = $años;
    }

    public function createFecha(int $dias, int $meses, int $años){
        return new fecha($dias, $meses, $años);
    }

    public function obtenerFecha(){
        return $this->dateTimeObj->format("j/n/Y");
    }

    public function __toString(){
        return $this->dateTimeObj->format("j/n/Y");
    }

    public function DameFecha(){
        return $this;
    }
    /**
     * Tiempo restante hasta la fecha del examen
     * @return \DateTime
     */

    public function getDaysLeft(){
        $now = new \DateTime();
        return $now->diff($this->dateTimeObj)->format("j/n/Y");
    }
}
?>