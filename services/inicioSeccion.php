<?php 
include('../db.php');
  if(isset($_POST['bInicio'])){
    $documento = $_POST['documento'];
    $password = $_POST['password'];
     
    if($documento != "" && $password != ""){
     $query = mysqli_query($conn,"SELECT documento,password,idRol FROM usuarios WHERE documento = '$documento'");
                         $result_user = mysqli_num_rows($query);
                         if($result_user > 0){ 
                           $data = mysqli_fetch_array($query);
                           session_start();                         
                               $_SESSION['active'] = true;
                               $_SESSION['rol'] = $data['idRol'];
                               $_SESSION['user'] = $data['documento'];
                               header("Location: ../view/inicio.php");
                         }else{
                            session_destroy();
                             header("Location: ../view/login.php");
                           }
                       }else{
                        echo"<script>alert('Algunos de los campos estan vacios')</script>";
                        header("Location: ../login.php");
                    }
         
    }
    ?>