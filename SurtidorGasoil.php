<?php
require_once ("Surtidor.php");

class SurtidorGasoil extends Surtidor {
    var $premium;

    function __construct ($premium) {
        parent::__construct ();
        $this->premium = $premium;
    }

    function setOctanaje ($octanaje) {
        $this->premium = $premium;
    }

    function getOctanaje () {
        return $this->premium;
    }
}