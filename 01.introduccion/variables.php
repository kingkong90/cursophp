<?php 

#variblae de texto
$texto= "Janneth Pedorrita";
echo "varible tipo texto:$texto <br>";
var_dump($texto);//metodo muestra el tipo de variable
echo "<br>";

$boleana= true;
print "variable tipo boolean:$boleana";
var_dump($boleana);
echo "<br>";

#varible tipo object
$objecto= (Object)["nombre"=>"Janneth", "defecto"=>"Pedorra"];
echo "<h1>variable tipo objeto: $objecto->nombre, $objecto->defecto<h1>";
echo "<br>";

$arregloColores= array('rojo','amarillo' ,'verde' );
echo "lista de colores: $arregloColores[0],$arregloColores[1]";

?>