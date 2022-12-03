<?php


require_once("../../model/conexion.php");
require_once("../../model/consultasCliente.php");
require_once("../../Controller/mostrarproductosCliente.php");
require_once("../../Controller/seguridadCliente.php");
require_once("../../Controller/verPerfilCliente.php");
require_once("../../model/ConsultasCliente.php");


	$objetoconexion = new conexion();
    $conexion = $objetoconexion->get_conexion();
    $sql= "SELECT * FROM clientes WHERE Id_usuario=:user_id";
    $result=$conexion->prepare($sql);
    $result -> execute([':user_id' => $_SESSION['user_id']]);
	$result = $result -> fetchAll();	
	$result = $result[0];
	#var_dump($result);die();

?>
<!DOCTYPE html>
<html lang="en">

<head>

	<title>Perfil </title>
</head>

<body>

    <!-- offcanvas -->
    <main class="mt-5 pt-3">
<div class="container">	

<h5>Datos de usuario</h5>

<table class="table">
  <tbody>
    <tr>
	<th scope="row">Usuario</th>
	<td><?php echo $result['username'] ?></td>
    </tr>
    <tr>
      <th scope="row">Nombres</th>
      <td><?php echo $result['Nombres'] ?></td>
    </tr>
    <tr>
      <th scope="row">Apellidos</th>
      <td><?php echo $result['Apellidos'] ?></td>
    </tr>
    <tr>
      <th scope="row">Correo</th>
      <td><?php echo $result['Email'] ?></td>
    </tr>
  </tbody>
</table>
</div>
  
	</main>
	<?php include('scriptsjs.php'); ?>
</body>

</html>
