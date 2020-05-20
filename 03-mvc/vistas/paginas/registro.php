
<div class="d-flex justify-content-center" >
  <form class="p-5 bg-light" method="post">
    <h1 class="display-5 text-success">Registro</h1>

    <div class="form-group">
      <label for="nombre">Nombre</label>
      <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="far fa-user"></i></span>
        </div>
          <input type="text" class="form-control" id="nombre" placeholder="nombre" name="registroNombre">
      </div>
    </div>

    <div class="form-group">
      <label for="email">Correo Electronico:</label>
      <div class="input-group ">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fas fa-envelope"></i> </span>
        </div>
        <input type="email" class="form-control" id="email" placeholder="Email" name="registroEmail">
      </div>
    </div>

    <div class="form-group">
      <label for="pwd">Password:</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fas fa-lock"></i> </span>
        </div>
        <input type="password" class="form-control" id="pwd" placeholder="password" name="registroPassword">
      </div>
    </div>

    <?php 
        #manera de instancion un metodo no estatico
        //$registro= new ControladorFormularios();
        //$registro->ctrRegistro();

        #manera de Instanciar un metodo Estatico

        $registro = ControladorFormularios::ctrRegistro(); 

        if($registro=="ok"){
          echo '<script> 

          if(window.history.replaceState){
            window.history.replaceState(null,null,window.location.href);
          }
          </script>';
          echo '<div class="alert alert-success"> El usuario asido registrado</div>';
        }

        if($registro=="error"){
          echo '<script> 

          if(window.history.replaceState){
            window.history.replaceState(null,null,window.location.href);
          }
          </script>';
          echo '<div class="alert alert-danger">No es permitido caracteres especiales</div>';
        }
    ?>


    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>