<?php include('../db.php');
if(isset($_POST['bRegistar'])){
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
   $documento = $_POST['documento'];
   $password = $_POST['password'];   
   $rol = $_POST['rol'];

   $validateDocumento = "SELECT * FROM usuarios WHERE documento ='$documento'";
   $result = mysqli_query($conn,$validateDocumento);
   if(mysqli_num_rows($result)== 1){
       echo "Usuario Ya Existente";
       header("Location: ../view/login.php");
   }
    echo $fechaCreacion;
    $query = "INSERT INTO `usuarios`(`documento`, `nombre`, `apellidos`, `password`, `fechaRegistro`, `idRol`) 
    VALUES('$documento','$nombre','$apellidos','$password','','$rol')";
    $result = mysqli_query($conn, $query);
    header("Location: ../view/login.php");
   
}


?>
