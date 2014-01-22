<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <div>Validación Formulario</div>
        <?php
        //entrada datos
            if (isset($_REQUEST['nombre'])) {
                $nombre = $_REQUEST['nombre'];
            }
            $edad = $_REQUEST ['edad'];
        //validad datos
            $error = false;
            $mensaje_error = "ERROR:";
            //la edad no es un numero
            if (!is_numeric($edad)) {
                $error = true;
                $mensaje_error .= " La edad debe ser un número";
             }  else {
                 // la edad está entre 0 y 100
                 if ($edad <= 0 || $edad > 100) {
                     $error = true;
                     $mensaje_error .= " La edad debe estar entre 0 y 100";
                 }
             }
            // el nombre esta vacío          
            if ($nombre == "") {
                $error = true;
                $mensaje_error .= " El nombre es obligatorio";
             }
            
             
        //calculo y salida
            if ($error == true) {
                echo $mensaje_error;
                echo "</br>";
                echo "<a href='javascript:history.go(-1);'> Volver al formulario </a>";
            } else {
               //si no hay error
                if ($edad>=18){
                      echo $nombre." es mayor de edad";
                  } else {
                      echo $nombre." es menor de edad";
                  }
            }
                   
               
        ?>
    </body>
</html>