<?php
session_start();
$login = (isset($_REQUEST['login']))?
            $_REQUEST['login']:"";
/*Los isset que copiamos aquí, mantendrán el valor de las variables 
 * tras el error. En este caso, obligamos a reescribir siempre la contraseña.
    $password = (isset($_REQUEST['password']))?
            $_REQUEST['password']:"";
    $passwordr = (isset($_REQUEST['passwordr']))?
            $_REQUEST['passwordr']:"";
 * 
 */
$email = (isset($_REQUEST['email']))?
            $_REQUEST['email']:"";


$errores = (isset($_SESSION['errores']))?
        $_SESSION['errores']:array();
unset($_SESSION['errores']);
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
            <?php
            print_r($errores)
            ?>
        </div>
        <div>Registro</div>
        <form action="resultado_registro_1.php" method="GET">
            <div>Login: <input type="text" name="login" value="<?php echo $login ?>"/> </div>     
            <div>Password <input type="password" name="password"/></div>
            <div>Re-Password <input type="password" name="passwordr"/></div>
            <div>Email <input type="text" name="email" value="<?php echo $email ?>"/> </div>
            <div><input type="submit" value="Enviar" /></div>
        </form>
    </body>
</html>



