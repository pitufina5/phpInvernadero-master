<?php
require_once("Planta.php");


class Hortaliza extends Planta {
    var $raiz; //booleano

    function __construct ($dias,$raiz) {
        parent::__construct ($dias);
        $this->raiz = $raiz;
    }
    function setRaiz ($raiz) {
        $this->raiz = $raiz;
    }
    function getRaiz () {
        return $this->raiz;
    }
    function mostrar () {
        parent::mostrar();
        
        echo $this->getRaiz() ? "Raiz comestible" : "Raiz NO comestible";
/*
        if ($this->getRaiz() == true) {
            echo "Raiz comestible";
        } else {
            echo "Raiz NO comestible";
        }
*/        
    }
}