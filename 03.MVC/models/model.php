<?php

class EnlacesPaginas{
    public function enlacesPaginasModel($enlacesModel){

        if($enlacesModel== "nosotros"||
           $enlacesModel== "servicios"||
           $enlacesModel== "contactanos"){

            $module= "views/modulos/".$enlacesModel.".php";
           }
        else if($enlacesModel=="index"){
            $module= "views/modulos/incio.php";
        }
        else{
            $module= "views/modulos/incio.php";

        }

        return $module;

    }

}
?>