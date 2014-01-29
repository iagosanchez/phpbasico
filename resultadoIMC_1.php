<?php 
require_once 'funcionesIMC.php'; 
//entrada de datos

$peso = $_REQUEST['peso'];
$altura = $_REQUEST['altura'];
$IMC = 0.0;
$clasificacion = "";
$errores= array();
//calculo y salida
$IMC = calculoIMC($peso, $altura);
$clasificacion = clasificacionIMC($IMC);

echo "</br>Clasificacion: ".$clasificacion;


if (!validarPeso($peso)){
    $errores[] = MSG_ERR_PESO;
}
if (!validarAltura($altura)){
    $errores[] = MSG_ERR_ALTURA;
}


if (count($errores)>0){
    echo "</br> Errores </br>";
    foreach ($errores as $error) {
        echo $error."</br>";
    }
} else{
    
}
