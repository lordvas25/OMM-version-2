<?php
    require_once('../Model/conexion.php');
    require_once('../Model/ConsultasTendero.php');

    // Aterrizar los valores enviados en el name del form hasta el metodo POST en las diferentes variables
    $nombre_producto = $_POST['nombre_producto'];
    $descripcion_producto = $_POST['descripcion_producto'];
    $categoria_producto = $_POST['categoria_producto'];
    $cantidad_producto = $_POST['cantidad_producto'];
    $marca_producto = $_POST['marca_producto'];
    $precio_producto = $_POST['precio_producto'];

    define('LIMITE',2000);
    define('ARREGLO',serialize(array('image/jpg','image/png','image/jpeg','image/gif')));
    $PERMITIDOS = unserialize(ARREGLO);
    
    if ($_FILES["img_producto"]["error"]>0){
        echo "<script> alert('POR FAVOR SELECCIONE UNA IMAGEN') </script>";
        echo '<script> location.href="../View/Tendero/RegistrarProductos"</script>';
    }
    else{
        if(in_array($_FILES['img_producto']['type'], $PERMITIDOS) && ($_FILES['img_producto']['size']<=LIMITE *1024) ){
            $img_producto="../uploads/".$_FILES['img_producto']['name'];



            if ($img_producto){
                $resultado = move_uploaded_file($_FILES["img_producto"]["tmp_name"], $img_producto);
                if  (strlen($nombre_producto)>0 && strlen($descripcion_producto)>0 && strlen($categoria_producto)>0 &&  strlen($cantidad_producto)>0 && strlen($marca_producto)>0 && strlen($precio_producto)>0 ){

                        $objetoConsultas = new ConsultasTendero();

                        $result = $objetoConsultas ->registrarProductos($nombre_producto,$img_producto,$descripcion_producto,$categoria_producto,$cantidad_producto,$marca_producto,$precio_producto);

                    

                    // Si los campos vienen vacios redireccionamos al formulario 
                    }else{
                        echo "<script> alert('POR FAVOR COMPLETE DE REGISTRAR SUS PRODUCTOS EN EL SISTEMA') </script>";
                        echo '<script> location.href="../View/Tendero/RegistrarProductos"</script>';
                    }
            }else {
              echo "<script> alert('ERROR AL CARGAR') </script>";
             // echo '<script> location.href="../View/Tendero/RegistrarProductos"</script>';
              }
            
        }else {
         echo "<script> alert('EL TAMAÑO DE LA IMAGEN SUPERA LO PERMITIDO') </script>";
        echo '<script> location.href="../View/Tendero/RegistrarProductos"</script>';
        }
    }
    // Validamos que las variables no esten vacias
    
    

    
?>