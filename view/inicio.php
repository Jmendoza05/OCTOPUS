<?php include("../db.php");
session_start();
if(!isset($_SESSION['user'])){
    header("Location: ./login.php");
    session_destroy();
}
?>

<?php include "../includes/header.php"; ?>
<?php include "../includes/navegacion.php"; ?>

<div class="jumbotron">
    <div class="container text-center">
        <h1>Bienvenidos</h1>
        <p>POR FAVOR SELECIONA UN OPCION EN EL MENU </p>        
    </div>
</div>

<?php include("../includes/footer.php"); ?>