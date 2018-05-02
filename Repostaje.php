<?php

class Repostaje {
    var $litros;
    var $fecha;

    function __construct ($litros, $fecha) {
        $this->litros = $litros;
        $this->fecha = $fecha;
    }
    function setLitros ($litros) {
        $this->litros = $litros;
    }
    function setFecha ($fecha) {
        $this->fecha = $fecha;
    }
    function getLitros () {
        return $this->litros;
    }
    function getFecha () {
        return $this->fecha;
    }

    function mostrar () {
        echo "Litros: ".$this->getLitros();
        echo "<br>";
        echo "Fecha: ".$this->getFecha();
        echo "<br>";

        $date1 = new DateTime( date('Y-m-d') );  //Tambien vale $date1 = new DateTime('now');    
        $date2 = new DateTime($this->getFecha());
        $diff = $date1->diff($date2); //diferencia entre fechas
  
        /*
        echo "<pre>";
        print_r ($diff);
        echo "</pre>";
        */
        
        echo "Hace ".$diff->y." años, ".$diff->m;      
        echo ($diff->m > 1) ? " meses" : " mes";       
        echo " y ".$diff->d." días que repostaste";

    }
}