<?php include("../db.php");
session_start();
if(!isset($_SESSION['user'])){    
    header("Location: ./login.php");
    session_destroy();
}
if($_SESSION['rol'] == 1){


include("../includes/header.php"); 
 include ("../includes/navegacion.php");
?>
<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
                <div class="card card-body">
                    <form action="buscarUsuario.php" method="POST">
                    <div class="form-group">
                        <label for="inputState">Fecha de Registro</label>
                        <input type="date" class="form-control" id="inputdoc" name="fechaCreacion" require>
                        </div>
                        <input type="submit" class="btn btn-success btn-block" name="search"
                        value="Buscar">
                    </form>
                </div>
        </div>
        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">Nombres</th>
                        <th class="text-center">Apellidos</th>
                        <th class="text-center">Documento</th>
                        <th class="text-center">Editar</th>
                    </tr>
                </thead>
                    <tbody>
                        <?php
                        if(isset($_POST['search'])){
                            $fecha = $_POST['fechaCreacion'];
                            $query = "SELECT * FROM usuarios WHERE fechaRegistro = '$fecha' ";
                            $resul = mysqli_query($conn, $query);
                          while($row = mysqli_fetch_array($resul)){ ?>       
                            <tr>
                            <td class="text-center"><?php echo $row['nombre']?></td>
                            <td class="text-center"><?php echo $row['apellidos']?></td>
                            <td class="text-center"><?php echo $row['documento']?></td>
                            <td class="text-center"> 
                                <a href="editarUsuario.php?documento=<?php echo $row['documento'];?>">
                                    <i class="fas fa-marker"></i>
                                </a>
                            </td>
                          </tr>
                          <?php
                        }
                       }?>
                    </tbody>
            </table>
        </div>
    </div>
</div>
<?php 
include("../includes/footer.php"); 
}else{
    header("Location: ./inicio.php");
}
?>