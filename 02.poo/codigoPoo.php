<?php

class Automovil{
    #Declaro las propiedades
    public $marca;
    public $año;
    
    #Declaro los metódos 
    function mostrar(){
        echo "soy el auto $this->marca, año $this->año";
    }
}

#Instancio al objeto de la clase
$a = new Automovil();
$a -> marca = "Toyota";
$a -> año = "2019";
$a -> mostrar();

?>