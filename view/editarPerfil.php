<?php 
include("../db.php");
session_start();
if(!isset($_SESSION['user'])){
    header("Location: ./login.php");
    session_destroy();
}
?>
<?php include("../includes/header.php"); ?>
<?php include("../includes/navegacion.php"); ?>


<?php
if(isset($_SESSION['user'])){
    $id = $_SESSION['user'];

    $query = "SELECT * FROM usuarios WHERE documento ='$id'";
    $result = mysqli_query($conn,$query);
    if(mysqli_num_rows($result)== 1){
        $row = mysqli_fetch_array($result);
        $nombre = $row['nombre'];
        $apellidos = $row['apellidos'];
        $documento = $row['documento'];
        $password = $row['password'];
    }

}
if(isset($_POST['bEditar'])){
    $id = $_SESSION['user'];
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $documento = $_POST['documento'];
        $password = $_POST['password'];

    $query = "UPDATE `usuarios` SET `documento`='$documento',`nombre`='$nombre',
            `apellidos`='$apellidos',`password`='$password' WHERE documento = '$id'";

    mysqli_query($conn, $query);
    
    header("Location: listarUsuario.php");
}
?>

<div class="container p-4">
    <div class="row justify-content-center box animated bounce">
<div class="col-xl-6 col-sm-8 ">
<div class="card">
    <div class="card-block">
            <h2 class="card-header text-center" >EDITAR PERFIL</h2>
        <div class="card-body">
            <div class="row justify-content-md-center">
                <div class="col-md-7">
            <form name ="FormAdd" action="editarPerfil.php" method="post">
            <div class="form-group">
    <label for="inputAddress">Nombres</label>
    <input type="text" class="form-control" id="inputdoc" name="nombre" value="<?php echo $nombre;?>">
  </div>
  <div class="form-group">
    <label for="inputAddress">Apellidos</label>
    <input type="text" class="form-control" id="inputdoc" name="apellidos" value="<?php echo $apellidos; ?>">
  </div>
  <div class="form-group">
    <label for="inputAddress">Documento</label>
    <input type="text" class="form-control" id="inputdoc" name="documento" value="<?php echo $documento;?>">
  </div>
  <div class="form-group">
    <label for="inputAddress">Password</label>
    <input type="password" class="form-control" id="inputdoc" name="password" value="<?php echo $password; ?>">
  </div>  
  <center>
      <input type="submit" class="btn btn-success" name="bEditar">
  </center>
  <br><br><br>
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