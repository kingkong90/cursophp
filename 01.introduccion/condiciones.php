<?php 
# ejercicio de ciclos y condiciones 

print "<h1>ejercicio de ciclos y Condicines </h1><br>";

$iniciador=1;
do{
switch($iniciador){

    case 1:
            echo "Aqui vamos a sumar numeros <br>";
            $suma= 5+9; 
            echo "caso 1: resultado suma".$suma;

    break;

    case 2:
            echo "<br> Aqui vamos hacer ciclo for<br>";
            for($i=0;$i<4;$i++){
                echo "<br> mensaje: for";
            }
    break;
    
    case 3:
            echo "<br>Aqui vamos hacer ciclo while<br>";
            $j = 1;
            while($j < 3){
                echo "lo logramos ".$j."<br>";
                $j++;

            }
    break;


    default: echo "si llego aqui se jodio";


}
    $iniciador++;
}while($iniciador<5
);


print "<h1>Numeros pares  </h1>";

$contador=1;

while($contador<=100){

    if($contador%2==0){
        print "$contador      ";
    }
    $contador++;
}

?>