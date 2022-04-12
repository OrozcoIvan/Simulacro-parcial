<?php
include 'Persona.php'; include 'Cuota.php'; include 'Prestamo.php';
//Objeto de la calse Persona
$objPersona= new Persona('Ivan','Orozco',41092159,'Almafuerte 2', 'ivanorozco1998@gmail.com', 2994522669,100000 );
//echo $objPersona."\n";

//Objeto de la clase Cuota
//número ,monto_cuota , monto_interes y cancelada
$objCuota= new Cuota(5,50000,0.1,0);
echo $objCuota."\n";

//Objeto de la clase Prestamo
//identificación, código del electrodoméstico, fecha otorgamiento,monto, cantidad_de_cuotas, taza de interés
$objPrestamo= new Prestamo(123, 3425092, 20/04/2022,10000,5,0.01, $objCuota, $objPersona);
echo $objPrestamo."\n";

$obj=$objPrestamo->getObjCuotas();
$numCuota= $obj->getNumero()."\n";

$objPrestamo->calcularInteresPrestamo($numCuota);
?>