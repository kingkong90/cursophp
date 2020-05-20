<?php

    Class ControladorFormularios{
        #metodo para registro

        static public function ctrRegistro(){
            if(isset($_POST['registroNombre'])){

                if(preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/', $_POST['registroNombre']) &&
                    preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/",$_POST['registroEmail'])&&
                    preg_match('/^.*(?=.{8,})(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*$/',$_POST['registroPassword'])){
                    $tabla = "registros";

                    $datos = array( "nombre"=>$_POST['registroNombre'],
                                    "email"=>$_POST['registroEmail'],
                                    "password"=>$_POST['registroPassword']
                                   );
                    
                    $respuesta = ModeloFormularios::mdlRegistro($tabla,$datos);
                    return $respuesta;

                }else{
                    $respuesta="error";
                    return $respuesta;
                }
            }
        }

        #metodo para seleccionar registros
        static public function ctrSeleccionarRegistros($item, $valor){

            $tabla= "registros";

            $respuesta = ModeloFormularios::mdlSeleccionarRegistro($tabla, $item, $valor);

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

         #metodo para actualizar

         static public function ctrActualizarRegistro(){
            if(isset($_POST['actualizarNombre'])){
                if(($_POST['actualizarPassword'] != "")){
                    $password = $_POST['actualizarPassword'];
                }else{
                    $password = $_POST['passwordActual'];
                }
                $tabla = "registros";

                $datos = array( "id"=>$_POST['idUsuario'],
                                "nombre"=>$_POST['actualizarNombre'],
                                "email"=>$_POST['actualizarEmail'],
                                "password"=>$password
                               );
                
                $respuesta = ModeloFormularios::mdlActualizarRegistro($tabla,$datos);

                return $respuesta;
                
                
            }
        }

        #metodo para actualizar

        public function ctrEliminarRegistro(){
            if(isset($_POST["eliminarRegistro"])){
                $tabla = "registros";
                $valor = $_POST["eliminarRegistro"];

                $respuesta = ModeloFormularios::mdlEliminarRegistro($tabla, $valor);

                if($respuesta == "ok"){
                    echo '<script> 

                    if(window.history.replaceState){
                      window.history.replaceState(null,null,window.location.href);
                    }

                    window.location="index.php?pagina=inicio";
                    </script>';
                }
            }
        }

    } 

?>