<?php

/* 
Funciones para validar formularios
 */
/**
 * Indica si un valor es un número entero.
 * @param type $valor
 */
function validarEntero($valor) {
if (filter_var($valor, FILTER_VALIDATE_INT)) {
        return true;
}else {
    return FALSE;
      }
}

