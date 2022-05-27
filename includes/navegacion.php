<?php 
if(isset($_SESSION['rol'])){
    $rol = $_SESSION['rol'];
    if($rol == 1){ ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="../view/inicio.php">Adminitrador</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-link" href="../view/listarUsuario.php">Listar Usuarios</a>
      <a class="nav-link" href="../view/listarUsuarioPorRol.php">Listar Usuarios Por Rol</a>
      <a class="nav-link" href="../view/buscarUsuario.php">Buscar Usuarios</a>
      <a class="nav-link" href="../services/cerrarSession.php">Cerrar Session</a>
    </div>
  </div>
</nav>
<?php
    }
    if($rol == 2){ ?>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="../view/inicio.php">Usuario</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link" href="../view/listarUsuario.php">Listar Usuarios</a>
          <a class="nav-link" href="../view/editarPerfil.php">Editar Mi Perfil</a>
          <a class="nav-link" href="../services/cerrarSession.php">Cerrar Session</a>
        </div>
      </div>
    </div>
<?php
    }
}else{ ?>
    <nav class="navbar navbar-dark bg-dark">
      <div class="container">
          <a href="../index.php" class="navbar-brand">OPTUPUS</a>
      </div>

  </nav>
<?php
}
?>