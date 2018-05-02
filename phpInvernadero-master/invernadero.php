<?php
require_once("Frutal.php");
require_once("Hortaliza.php");
require_once("Aromatica.php");
require_once("Propietario.php");

class Invernadero {
    var $superficie;
    var $propietario;
    var $plantas;

    function __construct ($superficie, $propietario) {
        $this->superficie = $superficie;
        $this->propietario = $propietario;
        $this->plantas = array();
    }

    //ANOTACION
    // Frutal --> dias, fecha
    // Hortal --> dias, raiz
    // Aromat --> dias, color

    function sembrar ($cantidad, $tipo, $dias, $opcion) { //Recibo 20, Frutal::class
        for ($i=0; $i < $cantidad; $i++) {
            $a = new $tipo($dias, $opcion);
            $this->plantas[] = $a;
        }
    }
    
    function mostrarPoda () {
        for ($i=0; $i < count($this->plantas); $i++) { 
            if ($this->plantas[$i] instanceof Frutal) {
                $this->plantas[$i]->mostrar();
                echo "<br><br>";
            }
        }
    }

    function mostrarFechasSiembra () {
        for ($i=0; $i < count($this->plantas); $i++) { 
            $this->plantas[$i]->mostrar();
            echo "<br><br>";
        }
    }

}