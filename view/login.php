<?php include("../includes/header.php"); ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <div class="card">
                <div class="card-body text-center">
    <div class="card-block">
            <h2 class="card-header text-center" >INICIAR SECCION</h2>
        <div class="card-body">
            <div class="row justify-content-md-center">
                <div class="col-md-7">
                  <form name ="Form" action="../services/inicioSeccion.php" method="post">
    <div class="form-group">
    <label for="inputAddress">Documento</label>
    <input type="text" class="form-control" id="inputdoc" name="documento" placeholder="Numero De Documento">
  </div>
  <div class="form-group">
    <label for="inputAddress">Password</label>
    <input type="password" class="form-control" id="inputcontra" name="password" placeholder="Ingresa Contraseña">
  </div>
  <div class="buton">
      <input type="submit" class="btn btn-success" name="bInicio">
  </div>
  <br><br><br>
  <div>
    <div> 
      <h6>
      <a href="./Registrarse.php"> Registrarse</a><span>
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
