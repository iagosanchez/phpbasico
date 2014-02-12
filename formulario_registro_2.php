<?php
session_start();
/*
 * Estructura campos del formulario
 */
$login = (isset($_SESSION['login']))?
            $_SESSION['login']:"";

$email = (isset($_SESSION['email']))?
            $_SESSION['email']:"";

// Estructura para errores. Si hay error 
$errLogin = (isset($_SESSION['errLogin']))?
        $_SESSION['errLogin']: FALSE;
$errPassword = (isset($_SESSION['errPassword']))?
        $_SESSION['errLogin']: FALSE;
$errPassword2 = (isset($_SESSION['errPassword2']))?
        $_SESSION['errLogin']: FALSE;
$errEmail = (isset($_SESSION['errEmail']))?
       $_SESSION['errLogin']: FALSE;

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



