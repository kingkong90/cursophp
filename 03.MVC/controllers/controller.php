<?php
#clase

class McvController{

    #llamada a la plantilla 

    public function plantilla(){
        #para incluir el archivo de template
        include "views/template.php";

    }
    #-----------------------------------------------------
    #Interaccion del usuario

    public function enlacesPaginasController(){

        #RECIBE LA VARIABLE QUE EL USUARIO HACE LA PETICION ATRAVES DEL URL
        #"isset" significa que trae contenido en la variable 
        if(isset($_GET ["variable"])){
            $enlaceController = $_GET ["variable"];
        }
        else{
            $enlaceController="index";
        }
        

        #:: se utliza para enlazar la clase "EnlacesPaginas" y su funcion "enlacesPaginasModel"
        $respuesta= EnlacesPaginas:: enlacesPaginasModel($enlaceController);

        include $respuesta;
    }
}
?>