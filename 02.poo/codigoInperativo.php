<?php
#codigo imperactivo o espagueti


$carro1=(object)["marca"=>"Toyota","anio"=>"2010"];
$carro2=(object)["marca"=>"mazda","anio"=>"2019"];

function mostrar($automovil){
echo "soy el auto:  $automovil->marca , $automovil->anio";
}


mostrar($carro1);
echo "<br>";
mostrar($carro2);
?>