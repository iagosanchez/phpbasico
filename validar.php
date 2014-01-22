<?php

/* 
Funciones para validar formularios
 */
/**
 * Definición de constantes
 */
define('EDAD_MINIMA', 1);
define('EDAD_MAXIMA', 100);
/**
 * Indica si un valor es un número entero.
 * @param type $valor
 * @return boolean 
 */
function validarEntero($valor) {
if (filter_var($valor, FILTER_VALIDATE_INT)) {
        return true;
}else {
    return FALSE;
      }
}


function comprobarRango($valor, $inicio, $final) {
    return ($valor>=$inicio && $valor<=$final);
}

function validarEdad($valor) {
   return (validarEntero($valor)&& 
           comprobarRango($valor, EDAD_MINIMA, EDAD_MAXIMA));
}
