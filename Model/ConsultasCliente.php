<?php

    class ConsultasCliente{

        public function registrarProductoCarrito($id_producto,$nombre_producto,$img_producto,$marca_producto,$precio_producto,$id_user){

            
            //  Conectamos con la clase Conexion 
            $objetoconexion = new conexion();
            $conexion = $objetoconexion->get_conexion();

            $sql= "INSERT INTO listaproductos (id_producto, nombre_producto, img_producto, marca_producto, precio_producto, Id_user) 
            VALUES(:id_producto, :nombre_producto, :img_producto, :marca_producto, :precio_producto, :Id_user)";

            $result=$conexion->prepare($sql);

            $result->bindParam(':id_producto', $id_producto);
            $result->bindParam(':nombre_producto', $nombre_producto);
            $result->bindParam(':img_producto', $img_producto);
            $result->bindParam(':marca_producto', $marca_producto);
            $result->bindParam(':precio_producto', $precio_producto);
            $result->bindParam(':Id_user', $id_user);

            $result->execute();
            echo "<script> alert('El Producto Se Agrego A Su Carrito') </script>";
            echo '<script> location.href="../View/Cliente/HomeCliente.php"</script>';
            

        }

        
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
        
        public function mostrarListaCarrito($id_user){

            $f = null;
            //Conectamos con la clase Conexion 
            $objetoConexion = new Conexion();
            $conexion = $objetoConexion->get_conexion();
            $sql = "SELECT * FROM listaproductos WHERE Id_user=:Id_user";
            $result = $conexion->prepare($sql);
            $result->bindParam(':Id_user', $id_user);
            $result->execute();

            while ($consulta = $result->fetch()) {
                $f[] = $consulta;
            }
            return $f;
        }

        //Funciones para ver y las categorias de los productos desde Cliente
        public function mostrarProductos(){

            $f = null;
            //Conectamos con la clase Conexion 
            $objetoConexion = new Conexion();
            $conexion = $objetoConexion->get_conexion();
            $sql = "SELECT * FROM productos ";
            $result = $conexion->prepare($sql);
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

        public function mostrarProductosPreciosBajos(){

            $f = null;
            //Conectamos con la clase Conexion 
            $objetoConexion = new Conexion();
            $conexion = $objetoConexion->get_conexion();

            $sql = "SELECT * FROM productos WHERE precio_producto <=3000 ";
            $result = $conexion->prepare($sql);
            
            $result->execute();

            while ($consulta = $result->fetch()) {
                $f[] = $consulta;
            }
            return $f;
        }

        public function mostrarProductosCategoriaDulces(){

            $f = null;
            //Conectamos con la clase Conexion 
            $objetoConexion = new Conexion();
            $conexion = $objetoConexion->get_conexion();

            $sql = "SELECT * FROM productos WHERE categoria_producto = 'Dulces' ";
            $result = $conexion->prepare($sql);
            
            $result->execute();

            while ($consulta = $result->fetch()) {
                $f[] = $consulta;
            }
            return $f;
        }

        public function mostrarProductosCategoriaComida(){

            $f = null;
            //Conectamos con la clase Conexion 
            $objetoConexion = new Conexion();
            $conexion = $objetoConexion->get_conexion();

            $sql = "SELECT * FROM productos WHERE categoria_producto = 'Comida' ";
            $result = $conexion->prepare($sql);
            
            $result->execute();

            while ($consulta = $result->fetch()) {
                $f[] = $consulta;
            }
            return $f;
        }

        public function mostrarProductosCategoriaLacteos(){

            $f = null;
            //Conectamos con la clase Conexion 
            $objetoConexion = new Conexion();
            $conexion = $objetoConexion->get_conexion();

            $sql = "SELECT * FROM productos WHERE categoria_producto = 'Lacteos' ";
            $result = $conexion->prepare($sql);
            
            $result->execute();

            while ($consulta = $result->fetch()) {
                $f[] = $consulta;
            }
            return $f;
        }

        public function mostrarProductosCategoriaAseo(){

            $f = null;
            //Conectamos con la clase Conexion 
            $objetoConexion = new Conexion();
            $conexion = $objetoConexion->get_conexion();

            $sql = "SELECT * FROM productos WHERE categoria_producto = 'Aseo' ";
            $result = $conexion->prepare($sql);
            
            $result->execute();

            while ($consulta = $result->fetch()) {
                $f[] = $consulta;
            }
            return $f;
        }

    }

    

?>