<?php
#require establece que el archivo es requerido
#require_once impide que un archivo se llame mas de una vez;
require_once "controllers/controller.php";
require_once "models/model.php";

#instanciar un nuevo obejto de controlador

$mvc= new McvController();
$mvc->plantilla();
?>