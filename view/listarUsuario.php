<?php include("../db.php");
session_start();
if(!isset($_SESSION['user'])){
    header("Location: ./login.php");
    session_destroy();
}

?>
<?php 
include("../includes/header.php"); 
 include ("../includes/navegacion.php");
 if($_SESSION['rol'] == 1){
?>
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <div class="card">
                <div class="card-body text-center">
                    <span class="titulo">LISTADO DE USUARIOS</span>
                    <table class="table table-striped mt-3">
                        <thead>
                          <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellidos</th>
                            <th scope="col">Documento</th>
                            <th scope="col">Fecha de Registro</th>
                            <th scope="col">Editar</th>
                          </tr>
                        </thead>
                        <tbody>                          
                              <?php
                          
                          $query = "SELECT * FROM usuarios ORDER BY nombre ASC";
                          $result = mysqli_query($conn, $query);
                        while($row = mysqli_fetch_array($result)){
                          ?>
                          <tr>                           
                          <td><?php echo $row['nombre']?></td>
                            <td><?php echo $row['apellidos']?></td>
                            <td><?php echo $row['documento']?></td>
                            <td><?php echo $row['fechaRegistro']?></td>
                            <td> 
                                    <a href="editarUsuario.php?documento=<?php  echo $row['documento'];?>">
                                        <i class="fas fa-marker"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                          
                        </tbody>
                      </table>                      
                </div>
            </div>
        </div>
    </div>
   
</div>
<?php
 }
 if($_SESSION['rol'] == 2){?>
 <div class="container mt-5">
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <div class="card">
                <div class="card-body text-center">
                    <span class="titulo">LISTADO DE USUARIOS</span>
                    <table class="table table-striped mt-3">
                        <thead>
                          <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellidos</th>
                            <th scope="col">Documento</th>
                            <th scope="col">Fecha de Registro</th>
                          </tr>
                        </thead>
                        <tbody>                          
                              <?php
                          
                          $query = "SELECT * FROM usuarios ORDER BY nombre ASC";
                          $result = mysqli_query($conn, $query);
                        while($row = mysqli_fetch_array($result)){
                          ?>
                          <tr>                           
                          <td><?php echo $row['nombre']?></td>
                            <td><?php echo $row['apellidos']?></td>
                            <td><?php echo $row['documento']?></td>
                            <td><?php echo $row['fechaRegistro']?></td>
                            </tr>
                            <?php
                        }
                        ?>
                          
                        </tbody>
                      </table>                      
                </div>
            </div>
        </div>
    </div>
   
</div>
  <?php 
 }
 include("../includes/footer.php"); ?>
