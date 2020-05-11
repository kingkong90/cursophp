<?php
    //crear clase para conexion con la base de datos
class Conexion{


    //crear metodo metodo estatico 

    static public function conectar(){

        //instancioar la clase PDO
        //PDO::("nombre del servidor", "nombre de la base de datos", "nombre de usuario", "password") 
        $pdo= new PDO("mysql:host=localhost;dbname=curso-php;", "root","");

        //para trabajar con caractares latinos 
        $pdo->exec("set names utf8");

        return $pdo;

        
        
    }



}


?>