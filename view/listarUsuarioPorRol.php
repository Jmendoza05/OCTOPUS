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
                    <form action="listarUsuarioPorRol.php" method="POST">
                    <div class="form-group">
                        <label for="inputState">Rol</label>
                            <select id="inputtipo" name="rol" class="form-control">
                            <?php                          
                          $query = "SELECT * FROM rol";
                          $result = mysqli_query($conn, $query);
                        while($row = mysqli_fetch_array($result)){
                          ?>
                                <option value="<?php echo $row['idRol'] ?>"><?php echo $row['rol'] ?></option>
                                <?php
                        }
                        ?>
                            </select>
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
                        <th class="text-center">Fecha Creacion</th>
                        <th class="text-center">Editar</th>
                    </tr>
                </thead>
                    <tbody>
                        <?php
                        if(isset($_POST['search'])){
                            $rol = $_POST['rol'];
                            $query = "SELECT * FROM usuarios WHERE idRol = '$rol' ORDER BY nombre ASC";
                            $resul = mysqli_query($conn, $query);
                          while($row = mysqli_fetch_array($resul)){ ?>       
                            <tr>
                            <td class="text-center"><?php echo $row['nombre']?></td>
                            <td class="text-center"><?php echo $row['apellidos']?></td>
                            <td class="text-center"><?php echo $row['documento']?></td>
                            <td class="text-center"><?php echo $row['fechaRegistro']?></td>
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
<?php include("../includes/footer.php"); 
}else{
    header("Location: ./inicio.php");
}
?>