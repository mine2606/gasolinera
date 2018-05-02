<?php
require_once ("Surtidor.php");

class SurtidorGasolina extends Surtidor {
    var $octanaje;

    function __construct ($octanaje) {
        parent::__construct ();
        $this->octanaje = $octanaje;
    }

    function setOctanaje ($octanaje) {
        $this->octanaje = $octanaje;
    }

    function getOctanaje () {
        return $this->octanaje;
    }
}