<?php 
if(!(isset($_SESSION["validarIngreso"])))
{
    echo '<script>
    window.location="index.php?pagina=ingreso";
    </script>';

    return;
    
}else{
    if($_SESSION['validarIngreso']!="ok")
    {
        echo '<script>
        window.location="index.php?pagina=ingreso";
        </script>';

        return;
    }
}

$usuarios = ControladorFormularios::ctrSeleccionarRegistros(null, null);


?>

<h1>Inicio</h1>
<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Fecha</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>

    <?php foreach ($usuarios as $key => $value):  ?>
            <tr>
                <td><?php echo ($key+1) ?></td>
                <td><?php echo $value["nombre"]; ?></td>
                <td><?php echo $value["email"];  ?></td>
                <td><?php echo $value["fecha"];  ?></td>
                <td>
                    <div class="btn-group" role="group" aria-label="button group">
                        <div class="px-1">
                               <a href="index.php?pagina=editar&id=<?php echo $value["id"]; ?>" type="button" class="btn btn-warning">Editar</a>
                        </div>
                        <form action="" method="post">
                            <input type="hidden" name="eliminarRegistro" value="<?php echo $value["id"];?>">
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        
                            <?php
                            
                                $eliminar = new ControladorFormularios();
                                $eliminar ->ctrEliminarRegistro();
                            ?>
                        
                        </form>
                
                    </div>
                </td>
            </tr>
    <?php endforeach ?>
       
        
    </tbody>
</table>