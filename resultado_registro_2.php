<?php
session_start();
require_once 'funciones_registro.php';
require_once 'errores_registro.php';
/**
 * Verifica que los datos recibidos por $_REQUEST son válidos
 * @return bool True si son válidos, False en caso contrario
 */
function validarDatosRegistro() {
    /**
     * validar login
     * validar password
     * validar passwordr es igual a password
     * validar email
     */
    $resultadoValidacion = ["","","",""];
    
    $login = (isset($_REQUEST['login']))?
            $_REQUEST['login']:"";
    $password = (isset($_REQUEST['password']))?
            $_REQUEST['password']:"";
    $passwordr = (isset($_REQUEST['password2']))?
            $_REQUEST['password2']:"";
    $email = (isset($_REQUEST['email']))?
            $_REQUEST['email']:"";
    
    
    if (!validarLogin($login)) {
        $_SESSION['errLogin'] = TRUE; 
    }
    if (!validarPassword($password)){
        $_SESSION['errPassword'] = TRUE;
    }
    if (!igualdadPassword($password, $passwordr)){
        $_SESSION['errPassword2'] = TRUE;
    }
    if (!validarEmail($email)){
        $_SESSION['errEmail'] = TRUE;;
    }
    
    return $resultadoValidacion;
} 

/**
 * 
 * @param type $errores
 * @return boolean
 */
function hayErrores($errores){
    for ($i=0; $i<4; $i++) {
        if (strlen($errores[$i])>0) {
            return TRUE;
        }
    }
    return FALSE;
}
 
?>
<html>
    <head>
        <title>Resultado Registro</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <div>Resultado Registro</div>
        <?php
        $errores = validarDatosRegistro();
            if (!hayErrores($errores)) {
                echo "Datos correctos. Se puede registrar...";
            } else {
                $_SESSION['errores'] = $errores;
                $url = "formulario_registro_2.php?".
                    $_SERVER['QUERY_STRING'];
                header('Location:'.$url);
               }
            
        ?>    
    </body>
</html>

