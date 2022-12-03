<?php
 function mostrarPerfil(){
  $Email = $_SESSION['Email'];

  $objetoConsulta = new ConsultasCliente();

  $result = $objetoConsulta->verPerfil($Email);

  foreach($result as $f){
    echo ' 
        <div class="container">
          <div class="row>
            <div class="col-6">
            <div class="image">
              <img src="../'.$f["Foto"].'" class="img-circle elevation-2" alt="User Image" height="55px" >
            </div>
            <div class="info">
              <a href="editarPerfil.php?id_user='.$f["Identificacion"].'" class="d-block">'.$f["Nombres"].' '.$f["Apellidos"].'<i class="fas fa-user-edit"></i></a>
              <a href="../../Controller/cerrarsesion.php" class="nav-link">
              <h4 style="color:#fff; font-size:20px">Cerrar sesion</h4>
              </a>
              </div>
            </div>   
     ';
  }
 }
?>