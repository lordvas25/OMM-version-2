<?php

    class ConsultasE{

        public function registrarUserE($Identificacion,$tipoDoc,$Nombres,$Apellidos,$Email,$Telefono,$ClaveMd,$rol,$estado,$Foto){

            //  Conectamos con la clase Conexion 
            $objetoConexion = new Conexion();
            $conexion = $objetoConexion->get_conexion();

            $sql = "SELECT * FROM clientes WHERE Identificacion=:Identificacion OR Email=:Email " ;
            $result=$conexion->prepare($sql);

            $result->bindParam(":Identificacion", $Identificacion);
            $result->bindParam(":Email", $Email);

            $result->execute();
            
            $f=$result->fetch();

            if ($f) {
                echo "<script> alert('SUS DATOS YA SE ENCUENTRAN REGISTRADOS') </script>";
                echo '<script> location.href="../View/Extra/Registro-user.php" </script>';
            }else{
            //  Conectamos con la clase Conexion 
            $objetoconexion = new conexion();
            $conexion = $objetoconexion->get_conexion();

            $sql= "INSERT INTO clientes (Identificacion, tipoDoc, Nombres, Apellidos, Email, Telefono, Clave, rol, estado, Foto) 
            VALUES(:Identificacion, :tipoDoc, :Nombres, :Apellidos, :Email, :Telefono, :ClaveMd, :rol, :estado, :Foto)";

            $result=$conexion->prepare($sql);

            $result->bindParam(':Identificacion', $Identificacion);
            $result->bindParam(':tipoDoc', $tipoDoc);
            $result->bindParam(':Nombres', $Nombres);
            $result->bindParam(':Apellidos', $Apellidos);
            $result->bindParam(':Email', $Email);
            $result->bindParam(':Telefono', $Telefono);
            $result->bindParam(':ClaveMd', $ClaveMd);
            $result->bindParam(':rol', $rol);
            $result->bindParam(':estado', $estado);
            $result->bindParam(':Foto', $Foto);

            $result->execute();
            echo "<script> alert('USUARIO CORRECTAMENTE REGISTRADO ') </script>";
            echo '<script> location.href="../View/Extra/Login.php"</script>';
            }

        }

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
        public function registrarConsulta($Nombres, $Email, $Mensaje){

            //  Conectamos con la clase Conexion 
            $objetoconexion = new conexion();
            $conexion = $objetoconexion->get_conexion();

            $sql= "INSERT INTO mensajes (Nombres, Email, Mensaje)
            VALUES(:Nombres, :Email, :Mensaje)";

            $result=$conexion->prepare($sql);

            $result->bindParam(':Nombres', $Nombres);
            $result->bindParam(':Email', $Email);
            $result->bindParam(':Mensaje', $Mensaje);
            $result->execute();

            echo "<script> alert('La sugerencia fue recibida') </script>";
            echo '<script> location.href="../index.php"</script>';
            
        }

        


    }

?>