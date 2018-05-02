<?php
require_once("Invernadero.php");

$p1 = new Propietario ("Rosendo");

$inv1 = new Invernadero (2900, $p1);
$inv1->sembrar (2, Frutal::class, 10, "2017-02-20");
$inv1->sembrar (3, Hortaliza::class, 11, true);
$inv1->sembrar (2, Aromatica::class, 12, "Verde");
//$inv1->mostrarPoda();
$inv1->mostrarFechasSiembra();


echo "<pre>";
print_r($inv1);
echo "</pre>";