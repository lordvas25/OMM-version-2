<?php

    function cargarListaProductosCarrito(){
        $id_user=$_SESSION['id'];
        $objetoConsultas =  new ConsultasCliente();
        $result = $objetoConsultas->mostrarListaCarrito($id_user);

        if(!isset($result)){
            echo '<h2>Este modulo esta vacio</h2>';
        }else{
            echo'
            <table id="TableUsers" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Nombre</th>
              <th>Imagen</th>
              <th>Marca</th>
              <th>Precio</th>
              <th>Cantidad</th>
              <th>Eliminar</th>
            </tr>
            </thead>
            <tbody>
        
            ';
            foreach ($result as $f) {
                echo'
                <tr class="'.$f["Id_Lista"].'">
                    <td>'.$f["Nombre_producto"].'</td>
                    <td><img src="../'.$f["img_producto"].'" width="70px" ></td>
                    <td>'.$f["marca_producto"].'</td>
                    <td>'.$f["precio_producto"].'</td>
                    <td><button id="aumentar" onclick="carrito(this)" value="aumentar">+</button>
                    <p id="contador" value=""></p>
                    <button id="disminuir" onclick="carrito(this)" value="disminuir">-</button></td>
                    <td><a href="../../controller/eUserAdmin.php?id_user=" class="btn btn-danger">ELIMINAR</a> </td>
                </tr>
                ';
        
            }

            echo'
            </tbody>
            </table>    
            
            ';


        }
    }

    function cargarUser(){
        if(isset($_GET['id_user'])){
            $objetoConsultas = new ConsultasAdmin();
            $id_user=$_GET['id_user'];
            $resultado = $objetoConsultas->mostrarUser($id_user);

            foreach ($resultado as $f){
                echo '
                <form action="../../Controller/mUserAdmin.php" method="POST">
                <div class="card-body">
                  <div class="row">
                    
                      <div class="form-group col-md-6">
                        <label for="tipodoc">Tipo De Documento</label>
                        <select id="tipodoc" name="tipoDoc" required class="form-control">
                            <option value="'.$f["tipoDoc"].'">'.$f["tipoDoc"].'</option>
                            <option value="C.C.">C.C.</option>
                            <option value="C.E.">C.E.</option>
                            <option value="Pasaporte">Pasaporte</option>
                            <option value="Otro">Otro</option>
                        </select>
                      </div>

                      <div class="form-group col-md-6">
                        <label for="Identificacion">Numero De Documento</label>
                        <input type="number" class="form-control" readonly="readonly" value="'.$f["Identificacion"].'" id="Identificacion" required name="Identificacion" placeholder="Ej: 1032185022">
                      </div>

                      <div class="form-group col-md-6">
                        <label for="Nombres">Nombres</label>
                        <input type="text" class="form-control" value="'.$f["Nombres"].'" id="Nombres" required name="Nombres" placeholder="Ej: Jhon Javier">
                      </div>

                      <div class="form-group col-md-6">
                        <label for="Apellidos">Apellidos</label>
                        <input type="text" class="form-control" value="'.$f["Apellidos"].'" id="Apellidos" required name="Apellidos" placeholder="Ej: Escobar Alvarez">
                      </div>

                      <div class="form-group col-md-6">
                        <label for="Email">Correo</label>
                        <input type="text" class="form-control" value="'.$f["Email"].'" id="Email" required name="Email" placeholder="Ej: Leidy@Hotmail.com">
                      </div>

                      <div class="form-group col-md-6">
                        <label for="Telefono">Celular</label>
                        <input type="number" class="form-control" value="'.$f["Telefono"].'" id="Telefono" required name="Telefono" placeholder="Ej: 3235489617">
                      </div>

                      <div class="form-group col-md-6">
                        <label for="rol">Rol</label>
                        <select id="rol" name="rol" required class="form-control">
                            <option value="'.$f["rol"].'">'.$f["rol"].'</option>
                            <option value="Administrador">Administrador</option>
                            <option value="Usuario">Cliente</option>
                            <option value="Tendero">Tendero</option>
                        </select>
                      </div>

                      <div class="form-group col-md-6">
                        <label for="estado">Estado</label>
                        <select id="estado" name="estado" required class="form-control">
                            <option value="'.$f["estado"].'">'.$f["estado"].'</option>
                            <option value="Pendiente">Pendiente</option>
                            <option value="Activo">Activo</option>
                            <option value="Bloqueado">Bloqueado</option>
                        </select>
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

    function cargarUserT(){
      if(isset($_GET['id_user'])){
          $objetoConsultas = new ConsultasTendero();
          $id_user=$_GET['id_user'];
          $resultado = $objetoConsultas->mostrarUser($id_user);

          foreach ($resultado as $f){
              echo '
              <form action="../../Controller/mUserAdmin.php" method="POST">
              <div class="card-body">
                <div class="row">
                  
                    <div class="form-group col-md-6">
                      <label for="tipodoc">Tipo De Documento</label>
                      <select id="tipodoc" name="tipoDoc" required class="form-control">
                          <option value="'.$f["tipoDoc"].'">'.$f["tipoDoc"].'</option>
                          <option value="C.C.">C.C.</option>
                          <option value="C.E.">C.E.</option>
                          <option value="Pasaporte">Pasaporte</option>
                          <option value="Otro">Otro</option>
                      </select>
                    </div>

                    <div class="form-group col-md-6">
                      <label for="Identificacion">Numero De Documento</label>
                      <input type="number" class="form-control" readonly="readonly" value="'.$f["Identificacion"].'" id="Identificacion" required name="Identificacion" placeholder="Ej: 1032185022">
                    </div>

                    <div class="form-group col-md-6">
                      <label for="Nombres">Nombres</label>
                      <input type="text" class="form-control" value="'.$f["Nombres"].'" id="Nombres" required name="Nombres" placeholder="Ej: Jhon Javier">
                    </div>

                    <div class="form-group col-md-6">
                      <label for="Apellidos">Apellidos</label>
                      <input type="text" class="form-control" value="'.$f["Apellidos"].'" id="Apellidos" required name="Apellidos" placeholder="Ej: Escobar Alvarez">
                    </div>

                    <div class="form-group col-md-6">
                      <label for="Email">Correo</label>
                      <input type="text" class="form-control" value="'.$f["Email"].'" id="Email" required name="Email" placeholder="Ej: Leidy@Hotmail.com">
                    </div>

                    <div class="form-group col-md-6">
                      <label for="Telefono">Celular</label>
                      <input type="number" class="form-control" value="'.$f["Telefono"].'" id="Telefono" required name="Telefono" placeholder="Ej: 3235489617">
                    </div>

                    <div class="form-group col-md-6">
                      <label for="rol">Rol</label>
                      <select id="rol" name="rol" required class="form-control">
                          <option value="'.$f["rol"].'">'.$f["rol"].'</option>
                          <option value="Administrador">Administrador</option>
                          <option value="Usuario">Cliente</option>
                          <option value="Tendero">Tendero</option>
                      </select>
                    </div>

                    <div class="form-group col-md-6">
                      <label for="estado">Estado</label>
                      <select id="estado" name="estado" required class="form-control">
                          <option value="'.$f["estado"].'">'.$f["estado"].'</option>
                          <option value="Pendiente">Pendiente</option>
                          <option value="Activo">Activo</option>
                          <option value="Bloqueado">Bloqueado</option>
                      </select>
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