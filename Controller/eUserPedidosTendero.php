<?php

    require_once('../Model/conexion.php');
    require_once('../Model/ConsultasTendero.php');

    $id_pedido = $_GET['id_pedido'];

    $objetoConsultas = new ConsultasTendero();
    $result = $objetoConsultas->cancelarPedido($id_pedido);

?>