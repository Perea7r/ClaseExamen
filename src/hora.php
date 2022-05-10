<?php
namespace ITEC\PRESENCIAL\DAW\HORA;

class hora {
    private int $horas;
    private int $minutos;
    private int $segundos;
    private \DateTime $dateTimeObj;

    public function __construct(int $horas, int $minutos, int $segundos){
        $this->dateTimeObj = new \DateTime();
        $this->dateTimeObj ->setTime($horas, $minutos, $segundos);
        $this->horas = $horas;
        $this->minutos = $minutos;
        $this->segundos = $segundos;
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