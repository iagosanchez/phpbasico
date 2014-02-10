<?php
session_start();
/*
 * Estructura campos del formulario
 */
$login = (isset($_REQUEST['login']))?
            $_REQUEST['login']:"";

$email = (isset($_REQUEST['email']))?
            $_REQUEST['email']:"";

// Estructura para errores. Si hay error 
$errLogin = (isset($_REQUEST['errLogin']))?
        $_REQUEST['errLogin']: FALSE;
$errPassword = (isset($_REQUEST['errPassword']))?
        $_REQUEST['errLogin']: FALSE;
$errPassword2 = (isset($_REQUEST['errPassword2']))?
        $_REQUEST['errLogin']: FALSE;
$errEmail = (isset($_REQUEST['errEmail']))?
        $_REQUEST['errLogin']: FALSE;

unset($_SESSION['errLogin']);
unset($_SESSION['errPassword']);
unset($_SESSION['errPassword2']);
unset($_SESSION['errEmail']);

/*Los isset que copiamos aquí, mantendrán el valor de las variables 
 * tras el error. En este caso, obligamos a reescribir siempre la contraseña.
    $password = (isset($_REQUEST['password']))?
            $_REQUEST['password']:"";
    $passwordr = (isset($_REQUEST['password2']))?
            $_REQUEST['passwordr']:"";
 * 
 */
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Registro</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <div>Errores: </br>
     
        </div>
        <div>Registro</div>
        <form action="resultado_registro_2.php" method="GET">
            <div>Login: <input type="text" name="login" value="<?php echo $login ?>"/> </div>     
                    <div>
                        <?php
                            if ($errLogin) echo MSG_ERR_LOGIN;
                        ?>
                    </div>
            <div>Password <input type="password" name="password"/></div>
                    <div>
                        <?php
                            if ($errPassword) echo MSG_ERR_PASSWORD;
                        ?>
                    </div>
            <div>Re-Password <input type="password" name="password2"/></div>
                    <div>
                       <?php
                           if ($errPassword2) echo MSG_ERR_PASSWORD2;
                       ?>
                   </div>
            <div>Email <input type="text" name="email" value="<?php echo $email ?>"/> </div>
                    <div>
                       <?php
                           if ($errEmail) echo MSG_ERR_EMAIL;
                       ?>
                   </div>
            <div><input type="submit" value="Enviar" /></div>
        </form>
    </body>
</html>



