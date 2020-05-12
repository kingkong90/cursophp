<?php

    Class ControladorFormularios{
        #metodo para registro

        static public function ctrRegistro(){
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

        #metodo para seleccionar registros
        static public function ctrSeleccionarRegistros(){

            $tabla= "registros";

            $respuesta = ModeloFormularios::mdlSeleccionarRegistro($tabla, null, null);

            return $respuesta;

        } 


        #metodo para ingresar 

        public function crtIngresar(){

            if(isset($_POST['ingresoEmail'])){
                $tabla= "registros";
                $item="email";
                $valor=$_POST['ingresoEmail'];
    
                $respuesta = ModeloFormularios::mdlSeleccionarRegistro($tabla, $item, $valor);

                if($respuesta["email"]==$_POST["ingresoEmail"] && $respuesta["password"]==$_POST["ingresoPassword"]){

                    $_SESSION["validarIngreso"]= "ok";
                    
                    echo '<script> 

                    if(window.history.replaceState){
                      window.history.replaceState(null,null,window.location.href);
                    }

                    window.location="index.php?pagina=inicio";
                    </script>';

                }else{

                    echo '<script> 

                    if(window.history.replaceState){
                      window.history.replaceState(null,null,window.location.href);
                    }
                    </script>';
                    echo '<div class="alert alert-success"> Error al intentar ingresar al sistema</div>';
                }
                
            }
           
        }

    } 

?>