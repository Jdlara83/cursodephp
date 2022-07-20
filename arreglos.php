<?php

//esto ess un arreglo sencillo

$arreglo = array("numero 0","numero uno");
echo '<br>';
echo $arreglo[1];

// arreglo con propiedades
echo '<br>';
echo '<br>';
$colores = array("color1"=>"rojo","color2"=>"azul");
echo '<br>';
echo $colores["color2"];

//arreglo con propiedades

echo '<br>';
echo '<br>';
$muebles = (object) ["mueble1"=>"armario","mueble2"=>"cama"];
echo '<br>';
echo $muebles->mueble1;
echo '<br>';

$numeros[0] = 75;
$numeros[1] = 90;
$numeros[2]	= 45;
//Escribirá: 75<br>90<br>45
print ($numeros[0]."<br>".$numeros[1]."<br>".$numeros[2]);

$dias[1] ="Lunes";
$dias[]="Martes";
$dias[]	= "Miércoles";
$dias[]	="Jueves";
$dias[]	="Viernes";
print ($dias[1]."<br>".$dias[2]."<br>");
print ($dias[3]."<br>".$dias[4]."<br>".$dias[5]);
?>