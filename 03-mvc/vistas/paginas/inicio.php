<?php 
$usuarios = ControladorFormularios::ctrSeleccionarRegistros();

$usuarios;


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
                        <button type="button" class="btn btn-warning">Editar</button>
                        <button type="button" class="btn btn-danger">Eliminar</button>
                    </div>
                </td>
            </tr>
    <?php endforeach ?>
       
        
    </tbody>
</table>