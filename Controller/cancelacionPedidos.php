<?php

    require_once('../Model/conexion.php');
    require_once('../Model/ConsultasTendero.php');

    // Aterrizar los valores enviados en el name del form hasta el metodo POST en las diferentes variables
    
    $cancelacion_pedido = $_POST['cancelacion_pedido'];

    
    // Validamos que las variables no esten vacias
    if  (strlen($cancelacion_pedido)>0 ){

        $objetoConsultas = new ConsultasTendero();

        $result = $objetoConsultas ->cancelarPedido($id_pedido);

    

    // Si los campos vienen vacios redireccionamos al formulario 
    }else{
        //echo "<script> alert('POR FAVOR COMPLETE LA CANCELACIÓN EN EL SISTEMA') </script>";
        //echo '<script> location.href="../View/Tendero/cancelarpedidos"</script>';
    }
    

    
?>