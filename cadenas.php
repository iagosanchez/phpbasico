<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Cadenas</title>
    </head>
    <body>
        <?php

            /*
             * Mostrar cadenas.
             */

            $saludo = "Hola";
            $destino = "Mundo";

            echo "¡" .$saludo. " " .$destino. "!"; 
            echo "<br>";
            echo "¡$saludo $destino!";
            echo "<br>";
            echo "¡Hola Mundo!";
            echo "<br>";
            $saludo_total = "¡";
            $saludo_total .= $saludo;
            $saludo_total .= " ";
            $saludo_total .= $destino;
            $saludo_total .= "!";
            echo $saludo_total;
            //numeros
            $valor1 = 10;
            $valor2 = 20;
            echo "<br>"
            
        ?>
    </body>
</html>


