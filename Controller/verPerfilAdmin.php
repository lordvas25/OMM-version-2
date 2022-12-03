<?php
 function mostrarPerfil(){
  $Email = $_SESSION['Email'];

  $objetoConsulta = new ConsultasAdmin();

  $result = $objetoConsulta->verPerfil($Email);

  foreach($result as $f){
    echo '
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../'.$f["Foto"].'" class="img-circle elevation-4" alt="User Image">
        </div>
        <div class="info">
          <a href="editarPerfil.php?id_user='.$f["Identificacion"].'" class="d-block">'.$f["Nombres"].' '.$f["Apellidos"].'<i class="fas fa-user-edit"></i></a>
          <h4 style="color:#fff; font-size:15px ">'.$f["rol"].'</h4>
        </div>
      </div>
     ';
  }
 }

 function Totalusuarios(){
  $objetoConsulta = new ConsultasAdmin();
  $result = $objetoConsulta->TotalClientes();

  foreach($result as $f){
  echo '
  <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>'.$f["NumberOfUser"].'</h3>

                <p>Nuevos Usuarios</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
            </div>
          </div>
          ';
 }
}
?>