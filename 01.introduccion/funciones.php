<?php
print  "funciones en php sin parametros <br>";

function mensaje(){

    echo "<h1>Janneth Pedorrita</h1>";
}

mensaje();

print  "funciones en php con parametros <br>";

function despedida($terminamos){
    echo "Una prueba mas: $terminamos".mensaje();
}

despedida("Adios<br>");

function sumaNUmeros($num1,$num2){

    $suma=$num1+$num2;
    echo "resultado :".$suma."<br>";
}

sumaNUmeros(5,6);

print  "<strong>funciones en php con parametros y retorn</strong> ";

function restaNumeros($num1,$num2){

    
    return $num1-$num2;
    

}

echo "resultado".restaNumeros (2, 1);
?>