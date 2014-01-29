<?php 
require_once 'funcionesIMC.php'; 
//entrada de datos

$peso = $_REQUEST['peso'];
$altura = $_REQUEST['altura'];
$IMC = 0.0;
$clasificacion = "";
//calculo y salida
$IMC = calculoIMC($peso, $altura);
$clasificacion = clasificacionIMC($IMC);

echo "</br>Clasificacion: ".$clasificacion;





