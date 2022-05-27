<?php 
include("../db.php");
session_start();
if(!isset($_SESSION['user'])){
    header("Location: ./login.php");
    session_destroy();
}
if($_SESSION['rol'] == 1){
if(isset($_GET['documento'])){
    $id = $_GET['documento'];

    $query = "SELECT * FROM usuarios WHERE documento ='$id'";
    $result = mysqli_query($conn,$query);
    if(mysqli_num_rows($result)== 1){
        $row = mysqli_fetch_array($result);
        $nombre = $row['nombre'];
        $apellidos = $row['apellidos'];
        $documento = $row['documento'];
        $password = $row['password'];
        $rol = $row['idRol'];
    }

}
if(isset($_POST['bEditarUsuario'])){
    $id = $_GET['documento'];
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $documento = $_POST['documento'];
        $password = $_POST['password'];
        $rol = $_POST['rol'];

    $query = "UPDATE `usuarios` SET `documento`='$documento',`nombre`='$nombre',
            `apellidos`='$apellidos',`password`='$password', `idRol`='$rol' WHERE documento = '$id'";

    mysqli_query($conn, $query);
    
    header("Location: listarUsuario.php");
}
?>
<?php include("../includes/header.php"); ?>
<?php include("../includes/navegacion.php"); ?>
<div class="container p-4">
    <div class="row justify-content-center box animated bounce">
<div class="col-xl-6 col-sm-8 ">
<div class="card">
    <div class="card-block">
            <h2 class="card-header text-center" >EDITAR USUARIO</h2>
        <div class="card-body">
            <div class="row justify-content-md-center">
                <div class="col-md-7">
            <form name ="FormAdd" action="editarUsuario.php?documento=<?php echo $_GET['documento']; ?>" method="POST">
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
  <div class="form-group">
  <label for="inputState">Rol</label>
      <select id="inputtipo" name="rol" class="form-control">
      <option selected disabled> </option>
        <option value="1">Adminitrador</option>
        <option value="2">Usuario</option>
      </select>
  </div>
  <center>
      <input type="submit" class="btn btn-success" name="bEditarUsuario">
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


<?php include("../includes/footer.php"); 
}else{
    header("Location: ./inicio.php");
}
?>