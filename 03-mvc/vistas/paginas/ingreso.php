
<div class="d-flex justify-content-center" >
  <form class="p-5 bg-light" method="post">
    <h1 class="display-5 text-success">Registro</h1>

       <div class="form-group">
      <label for="email">Correo Electronico:</label>
      <div class="input-group ">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fas fa-envelope"></i> </span>
        </div>
        <input type="email" class="form-control" id="email" placeholder="Email" name="ingresoEmail">
      </div>
    </div>

    <div class="form-group">
      <label for="pwd">Password:</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fas fa-lock"></i> </span>
        </div>
        <input type="password" class="form-control" id="pwd" placeholder="password" name="ingresoPassword">
      </div>
    </div>

    <?php 
        #manera de instancion un metodo no estatico
        
        $ingreso = new ControladorFormularios(); 
        $ingreso->crtIngresar();

    ?>


    <button type="submit" class="btn btn-primary">Ingreso</button>
  </form>
</div>