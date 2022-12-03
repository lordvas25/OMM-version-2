<?php

    class ConsultasTendero{

        public function registrarProductos($nombre_producto,$img_producto,$descripcion_producto,$categoria_producto,$cantidad_producto,$marca_producto,$precio_producto){

            
            //  Conectamos con la clase Conexion 
            $objetoconexion = new conexion();
            $conexion = $objetoconexion->get_conexion();

            $sql= "INSERT INTO productos (nombre_producto, img_producto, descripcion_producto, categoria_producto, cantidad_producto, marca_producto, precio_producto) 
            VALUES(:nombre_producto, :img_producto, :descripcion_producto, :categoria_producto, :cantidad_producto, :marca_producto, :precio_producto)";

            $result=$conexion->prepare($sql);

            $result->bindParam(':nombre_producto', $nombre_producto);
            $result->bindParam(':img_producto', $img_producto);
            $result->bindParam(':descripcion_producto', $descripcion_producto);
            $result->bindParam(':categoria_producto', $categoria_producto);
            $result->bindParam(':cantidad_producto', $cantidad_producto);
            $result->bindParam(':marca_producto', $marca_producto);
            $result->bindParam(':precio_producto', $precio_producto);

            $result->execute();
            echo "<script> alert('El Producto Se Registro Correctamente') </script>";
            echo '<script> location.href="../View/Tendero/RegistrarProductos.php"</script>';
            

        }

        public function mostrarProductos($id_user){

            $f = null;
            //Conectamos con la clase Conexion 
            $objetoConexion = new Conexion();
            $conexion = $objetoConexion->get_conexion();

            $sql = "SELECT * FROM productos WHERE id_user=:id_user ";
            $result = $conexion->prepare($sql);
            $result->bindparam(':id_user', $id_user);
            $result->execute();

            while ($consulta = $result->fetch()) {
                $f[] = $consulta;
            }
            return $f;
        }


        public function mostrarProducto($id_productos){

            $f = null;
            //Conectamos con la clase Conexion 
            $objetoConexion = new Conexion();
            $conexion = $objetoConexion->get_conexion();

            $sql = "SELECT * FROM productos WHERE id_productos=:id_productos";
            $result = $conexion->prepare($sql);
            $result->bindparam(':id_productos',$id_productos);
            $result->execute();

            while ($consulta = $result->fetch()) {
                $f[] = $consulta;
            }
            return $f;
        }

        
        public function modificarClave($ClaveNueva, $Identificacion){

            $objetoConexion = new Conexion();
            $conexion = $objetoConexion->get_conexion();

            $sql = "UPDATE clientes SET Clave=:ClaveNueva WHERE Identificacion=:Identificacion";
            $result = $conexion->prepare($sql);
            $result->bindparam(':ClaveNueva', $ClaveNueva);
            $result->bindparam(':Identificacion', $Identificacion);

            $result->execute();
            echo "<script> alert('Actualizacion de clave exitosa') </script>";
            echo '<script> location.href="../view/Tendero/HomeTendero.php" </script>';

        }


        public function modificarProducto($id_productos,$nombre_producto,$descripcion_producto,$categoria_producto,$cantidad_producto,$marca_producto,$precio_producto){
            //  Conectamos con la clase Conexion 
            $objetoConexion = new Conexion();
            $conexion = $objetoConexion->get_conexion();


            $sql="UPDATE productos SET id_productos=:id_productos, nombre_producto=:nombre_producto, descripcion_producto=:descripcion_producto, categoria_producto=:categoria_producto, cantidad_producto=:cantidad_producto, marca_producto=:marca_producto, precio_producto=:precio_producto WHERE id_productos=:id_productos";
            $result = $conexion->prepare($sql);

            $result->bindParam(':id_productos', $id_productos);
            $result->bindParam(':nombre_producto', $nombre_producto);
            $result->bindParam(':descripcion_producto', $descripcion_producto);
            $result->bindParam(':categoria_producto', $categoria_producto);
            $result->bindParam(':cantidad_producto', $cantidad_producto);
            $result->bindParam(':marca_producto', $marca_producto);
            $result->bindParam(':precio_producto', $precio_producto);

            $result->execute();
            echo "<script> alert('Actualizacion de producto exitosa') </script>";
            echo '<script> location.href="../view/Tendero/verProductos.php" </script>';
        }


        public function eliminarProducto($id_productos){

        //  Conectamos con la clase Conexion 
        $objetoConexion = new Conexion();
        $conexion = $objetoConexion->get_conexion(); 
        
        $sql= "DELETE FROM productos WHERE id_productos=:id_productos";

        $result= $conexion->prepare($sql);
        
        $result->bindparam(':id_productos', $id_productos);
        $result->execute();

        echo "<script> alert('Eliminacion de producto exitosa') </script>";
        echo '<script> location.href="../view/Tendero/verProductos.php" </script>';
        }

        public function verPerfil($Email){
            $f= null;
            //Conectamos con la clase Conexion 
            $objetoConexion = new Conexion();
            $conexion = $objetoConexion->get_conexion();
            $sql="SELECT * FROM clientes WHERE Email=:Email";
            $result=$conexion->prepare($sql);
            $result->bindParam(':Email', $Email);
            $result->execute();
    
            while ($resultado= $result->fetch()){
                $f[]=$resultado;
            }
            return $f;
        }

        public function mostrarPedidos(){

            $f = null;
            //Conectamos con la clase Conexion 
            $objetoConexion = new Conexion();
            $conexion = $objetoConexion->get_conexion();

            $sql = "SELECT * FROM pedidos";
            $result = $conexion->prepare($sql);
            $result->execute();

            while ($consulta = $result->fetch()) {
                $f[] = $consulta;
            }
            return $f;
        }

        public function cancelarPedido($id_pedido){

            //  Conectamos con la clase Conexion 
            $objetoConexion = new Conexion();
            $conexion = $objetoConexion->get_conexion(); 
            
            $sql= "DELETE FROM pedidos WHERE id_pedido=:id_pedido";
    
            $result= $conexion->prepare($sql);
            
            $result->bindparam(':id_pedido', $id_pedido);
            $result->execute();
    
            echo "<script> alert('Cancelación del pedido exitosa') </script>";
            echo '<script> location.href="../view/Tendero/verPedidos.php" </script>';
            }

            //Consultas sobre el usuario para poder editar su perfil

            public function mostrarUser($id_user){

                $f = null;
                //Conectamos con la clase Conexion 
                $objetoConexion = new Conexion();
                $conexion = $objetoConexion->get_conexion();
    
                $sql = "SELECT * FROM clientes WHERE Identificacion=:id_user";
                $result = $conexion->prepare($sql);
                $result->bindparam(':id_user',$id_user);
                $result->execute();
    
                while ($consulta = $result->fetch()) {
                    $f[] = $consulta;
                }
                return $f;
            }

            public function modificarUser($Identificacion,$tipoDoc,$Nombres,$Apellidos,$Email,$Telefono){
                //  Conectamos con la clase Conexion 
                $objetoConexion = new Conexion();
                $conexion = $objetoConexion->get_conexion();
    
    
                $sql="UPDATE clientes SET Identificacion=:Identificacion, tipoDoc=:tipoDoc, Nombres=:Nombres, Apellidos=:Apellidos, Email=:Email, Telefono=:Telefono WHERE Identificacion=:Identificacion";
                $result = $conexion->prepare($sql);
    
                $result->bindParam(':Identificacion', $Identificacion);
                $result->bindParam(':tipoDoc', $tipoDoc);
                $result->bindParam(':Nombres', $Nombres);
                $result->bindParam(':Apellidos', $Apellidos);
                $result->bindParam(':Email', $Email);
                $result->bindParam(':Telefono', $Telefono);
    
                $result->execute();
                echo "<script> alert('Actualizacion Exitosa') </script>";
                echo '<script> location.href="../view/tendero/HomeTendero.php" </script>';
    
            }


    }

?>