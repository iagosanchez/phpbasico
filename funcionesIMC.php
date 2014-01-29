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


//validación


/* VALIDAR PESO
 * Indica si el valor de peso es correcto
 * @param peso debe ser un numero entre 1-500
 */
define('PESO_MIN', 1); // Kg
define('PESO_MAX', 500); // Kg


//Comprobar que es un entero
function validarEntero ($peso){
    if (filter_var($peso, FILTER_VALIDATE_INT)) {
        return true;
    } else {
        return false;
    }
}

//Comprobar que el número está en un rango
// Definir el rango
function compruebaRango ($peso, $inicial, $final){
    return ($peso>=$inicial && $peso<=$final);
}

// Comprobar el rango
function validarPeso ($peso){
    return (validarEntero($peso)&&
    compruebaRango($peso, PESO_MIN, PESO_MAX));
}



 /* VALIDAR ALTURA
 * Indica si el valor de altura es correcto
 * @param altura debe ser un numero entre 1-300
 */
define('ALTURA_MIN', 50); //cm
define('ALTURA_MAX', 300); // cm



//Comprobar que el número está en un rango
// Definir el rango


// Comprobar el rango
function validarAltura ($altura){
    if (is_int ($altura)){
        $resultado = compruebaRango (ALTURA_MIN, ALTURA_MAX, $altura);
    } else{
        $resultado = FALSE;
    }
    return $resultado;
}
