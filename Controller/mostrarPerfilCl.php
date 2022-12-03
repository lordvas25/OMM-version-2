<?php

    function cargarUsers(){
        $objetoConsultas =  new ConsultasCliente();
        $result = $objetoConsultas->mostrarUsers();

        if(!isset($result)){
            echo '<h2>Este modulo esta vacio</h2>';
        }else{
            echo'
            <table id="TableUsers" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Identificacion</th>
              <th>Nombres</th>
              <th>Apellidos</th>
              <th>Email</th>
              <th>Telefono</th>
              <th>Rol</th>
              <th>Estado</th>
              <th>Modificar</th>
              <th>Eliminar</th>
            </tr>
            </thead>
            <tbody>
        
            ';
            foreach ($result as $f) {
                echo'

                    <td>'.$f["Identificacion"].'</td>
                    <td>'.$f["Nombres"].'</td>
                    <td>'.$f["Apellidos"].'</td>
                    <td>'.$f["Email"].'</td>
                    <td>'.$f["Telefono"].'</td>
                    <td>'.$f["rol"].'</td>
                    <td>'.$f["estado"].'</td>
                    <td><a href="editarUser.php?id_user='.$f["Identificacion"].'" class="btn btn-primary">MODIFICAR</a> </td>
                    <td><a href="../../controller/eUserAdmin.php?id_user='.$f["Identificacion"].'" class="btn btn-danger">ELIMINAR</a> </td>
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
            $objetoConsultas = new ConsultasCliente();
            $id_user=$_GET['id_user'];
            $resultado = $objetoConsultas->mostrarUser($id_user);

            foreach ($resultado as $f){
                echo '
                <form action="../../Controller/mUserCliente.php" method="POST">
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