<?php

/* calculoIMC
 * Calcula el valor IMC 
 * peso en kilogramos
 * altura en centimetros
 * @return float el resultado del calculo IMC redondeado a 2 decimales
 * FLOAT ES UN NúMERO REAL
 */
function calculoIMC ($peso, $altura){
    $altura = $altura / 100; //cm a metros
    $IMC = ($peso / ($altura * $altura));
    
    return round($IMC, 2);
}

/*
 * ClasificacionIMC
 * Calcula la clasificación IMC 
 * @param imc Valor valido de IMC
 * return string Contiene clasificación según valor
 * @link http://es.wikipedia.org/wiki/%C3%8Dndice_de_masa_corporal
 */

function clasificacionIMC ($IMC) {
    if ($IMC < 18.50){
    $clasificacion = "Bajo peso";
} 
elseif ($IMC < 25){
    $clasificacion = "Normal";
}
elseif ($IMC < 30) {
    $clasificacion = "Sobrepeso";
}
else {
    $clasificacion = "Obesidad";
}
    return $clasificacion;
}
