<?php

    Class ControladorFormularios{
        #metodo para registro

        static function ctrRegistro(){
            if(isset($_POST['registroNombre'])){
                
                $tabla = "registros";

                $datos = array( "nombre"=>$_POST['registroNombre'],
                                "email"=>$_POST['registroEmail'],
                                "password"=>$_POST['registroPassword']
                               );
                
                $respuesta = ModeloFormularios::mdlRegistro($tabla,$datos);
                return $respuesta;
                
            }
        }

    } 

?>