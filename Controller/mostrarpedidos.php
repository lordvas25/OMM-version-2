<?php

function cargarPedidos(){
  $objetoConsultas =  new ConsultasTendero();
  $result = $objetoConsultas->mostrarPedidos();

  if(!isset($result)){
      echo '<h2>ESTA WEA NO EXISTE!</h2>';
  }else{
      echo'
      <table id="TablePedidos" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>Identificacion </th>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Unidades</th>
        <th>Fecha del pedido</th>
        <th>Nombre de los productos</th>
        <th>Cancelar</th>
      </tr>
      </thead>
      <tbody>
  
      ';
      foreach ($result as $f) {
          echo'
          <tr class="'.$f["id_pedido"].'">
          <td>'.$f["identificacion"].'</td>
              <td>'.$f["Nombres"].'</td>
              <td>'.$f["Apellidos"].'</td>
              <td>'.$f["unidades"].'</td>
              <td>'.$f["fecha_pedido"].'</td>
              <td>'.$f["nombre_productos"].'</td>
              <td><a href="cancelarpedidos.php?id_pedido='.$f["id_pedido"].'" class="btn btn-danger">Cancelar</a> </td>
               
          </tr>
          ';
  
      }

      echo'
      </tbody>
      </table>    
      
      ';








        }
    }

    function cargarpedido(){
        if(isset($_GET['id_user'])){
            $objetoConsultas = new ConsultasAdmin();
            $id_user=$_GET['id_user'];
            $resultado = $objetoConsultas->mostrarUser($id_user);

            foreach ($resultado as $f){
                echo '
                <form action="../../Controller/mpedidosTendero.php" method="POST">
                <div class="card-body">
                  <div class="row">
                    
                

                      <div class="form-group col-md-6">
                        <label for="id_pedido">Codigo pedido</label>
                        <input type="number" class="form-control" readonly="readonly" value="'.$f["id_pedido"].'" id="id_pedido" required name="id_pedido" placeholder="Ej: 103">
                      </div>

                      <div class="form-group col-md-6">
                        <label for="Identificacion">Identificacion del cliente</label>
                        <input type="text" class="form-control" value="'.$f["Identificacion"].'" id="Identificacion" required name="Identificacion" placeholder="Ej: 10345655">
                      </div>

                      <div class="form-group col-md-6">
                        <label for="id_productos">Codigo del producto</label>
                        <input type="text" class="form-control" value="'.$f["id_productos"].'" id="id_productos" required name="id_productos" placeholder="Ej: Escobar Alvarez">
                      </div>

                      <div class="form-group col-md-6">
                        <label for="unidades">unidades</label>
                        <input type="text" class="form-control" value="'.$f["unidades"].'" id="unidades" required name="unidades" placeholder="Ej: Leidy@Hotmail.com">
                      </div>

                      <div class="form-group col-md-6">
                        <label for="fecha_pedido">fecha de pedido</label>
                        <input type="number" class="form-control" value="'.$f["fecha_pedido"].'" id="fecha_pedido" required name="fecha_pedido" placeholder="Ej: 3235489617">
                      </div>

                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">MODIFICAR</button>
                </div>
              </form>
                ';
            }
        }

    }

?>