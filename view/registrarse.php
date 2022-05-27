<?php include("../db.php"); ?>

<?php include("../includes/header.php"); ?>

<div class="container p-4">
    <div class="row justify-content-center box animated bounce">
<div class="col-xl-6 col-sm-8 ">
<div class="card">
    <div class="card-block">
            <h2 class="card-header text-center" >REGISTRARSE</h2>
        <div class="card-body">
            <div class="row justify-content-md-center">
                <div class="col-md-7">
            <form name ="FormAdd" action="./services/registrar.php" method="post">
            <div class="form-group">
    <label for="inputAddress">Nombres</label>
    <input type="text" class="form-control" id="inputdoc" name="nombre" placeholder="Ingrese sus nombres" require>
  </div>
  <div class="form-group">
    <label for="inputAddress">Apellidos</label>
    <input type="text" class="form-control" id="inputdoc" name="apellidos" placeholder="Ingrese sus apellidos" require>
  </div>
  <div class="form-group">
    <label for="inputAddress">Documento</label>
    <input type="text" class="form-control" id="inputdoc" name="documento" placeholder="Numero De Documento" require>
  </div>
  <div class="form-group">
    <label for="inputAddress">Password</label>
    <input type="password" class="form-control" id="inputdoc" name="password" placeholder="Ingrese password" require>
  </div>
  <div class="form-group">
    <label for="inputAddress">Fecha</label>
    <input type="date" class="form-control" id="inputdoc" name="fechaCreacion" require>
  </div>
  <div class="form-group">
  <label for="inputState">Rol</label>
      <select id="inputtipo" name="rol" class="form-control">
        <option value="1" selected>Adminitrador</option>
        <option value="2">Usuario</option>
      </select>
  </div>  
  <center>
      <input type="submit" class="btn btn-success" name="bRegistar">
  </center>
  <br><br><br>
  <div>
    <div class="text-center"> 
      <h6>
      <span> <a href="./login.php" class="a">Iniciar Seccion</a>
      </h6>
    </div>  
  </div>
</form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
  </div>


<?php include("../includes/footer.php"); ?>