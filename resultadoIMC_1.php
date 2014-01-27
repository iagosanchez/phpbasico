<?php require_once 'funcionesIMC.php'; ?>
<?php
//entrada de datos

$peso = $_REQUEST['peso'];
$altura = $_REQUEST['altura'];
$IMC = 0.0;
$clasificacion = "";
//calculo y salida
$altura = $altura / 100;
$IMC =($peso / ($altura * $altura));


echo "Valor IMC= ";
echo $IMC;

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

echo "</br>Clasificacion: ".$clasificacion;



