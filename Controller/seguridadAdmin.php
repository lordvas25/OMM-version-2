<?php

    session_start();
    if (!isset($_SESSION['autenticado'])){
        echo "<script>alert('Primero debe iniciar sesión para acceder')</script>";
        echo "<script>location.href=('../Extra/Login.php')</script>";
    }

    if($_SESSION['rol']!="Administrador"){
        echo "<script>alert('Carece de permisos para hacer esto. La sesión se cerrara')</script>";
        echo "<script>location.href=('../Extra/Login.php')</script>";
    }
?>