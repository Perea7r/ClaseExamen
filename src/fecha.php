<?php
namespace ITEC\PRESENCIAL\DAW;

use DateTime;

class fecha {
    private int $dias;
    private int $meses;
    private int $años;
    private \DateTime $dateTimeObj;

    public function __construct(int $horas, int $minutos, int $segundos){
        $this->dateTimeObj = new \DateTime();
        $this->dateTimeObj ->setTime($horas, $minutos, $segundos);
        $this->horas = $horas;
        $this->minutos = $minutos;
        $this->segundos = $segundos;
    }

    public function createFecha(int $dias, int $meses, int $años){
        return new fecha($dias, $meses, $años);
    }

    public function obtenerFecha(){
        $fecha = new DateTime();
        return $fecha->format('j-n-Y');
    }

    public function DameFecha(){
        return $this;
    }

    public static function createHora(int $horas, int $minutos, int $segundos){
        return new hora($horas, $minutos, $segundos);
    }

    public function __toString(){
        return $this->dateTimeObj->format("G:i:s");
    }

    public function getHoraStr():string{
        return $this;
    }
    /**
     * Tiempo restante hasta la hora del examen
     * @return \DateTime
     */

    public function getDaysLeft(){
        $now = new \DateTime();
        return $now->diff($this->dateTimeObj)->format('%G');
    }
}
?>