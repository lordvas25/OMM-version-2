<?php
 function mostrarPerfil(){
  $Email = $_SESSION['Email'];

  $objetoConsulta = new ConsultasTendero();

  $result = $objetoConsulta->verPerfil($Email);

  foreach($result as $f){
    echo '
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../'.$f["Foto"].'" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="editarPerfilTendero.php?id_user='.$f["Identificacion"].'" class="d-block">'.$f["Nombres"].' '.$f["Apellidos"].'<i class="fas fa-user-edit"></i></a>
          <h4 style="color:#fff; font-size:20px">'.$f["rol"].'</h4>
        </div>
      </div>
     ';
  }
 }
?>