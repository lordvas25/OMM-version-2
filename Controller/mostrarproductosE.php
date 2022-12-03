<?php

  //Esta función muestra los productos en ofertas de precio en el index
    function cargarproductosPreciosBajos(){
        $objetoConsultas =  new ConsultasE();
        $result = $objetoConsultas->mostrarProductosPreciosBajos();

        if(!isset($result)){
            echo '<h2>No hay Productos</h2>';
        }else{
            
            foreach ($result as $f) {
                echo'
                <div class="col-md-3">
                <div class="products">
                  <a href="View/Client-site/single-product.php?id_productos='.$f["id_productos"].'">
                  <img src="uploads/'.$f["img_producto"].'" width="100px" >
                  </a>
                  <a href="single-product.html">
                    <h4><a href="">'.$f["nombre_producto"].'</h4>
                  </a>
                  <p class="price">Desde: $'.$f["precio_producto"].'</p>
                  <p class="desc">'.$f["descripcion_producto"].'</p>
                  <a class="view-link shutter" href="View/Extra/Registro-user.php">
                    <i class="fa fa-plus-circle"></i>Añadir al carrito</a>
                </div>	<!-- End of /.products -->
              </div>
              
              ';
        
            }   
      
        }
    }

    //Esta función muestra todos los productos del index
    function cargarproductosIndex(){
      $objetoConsultas =  new ConsultasE();
      $result = $objetoConsultas->mostrarProductos();

      if(!isset($result)){
          echo '<h2>No hay Productos</h2>';
      }else{
          
          foreach ($result as $f) {
              echo'
              <div class="col-md-3">
              <div class="products">
                <a href="View/Client-site/single-product.php?id_productos='.$f["id_productos"].'">
                <img src="uploads/'.$f["img_producto"].'" width="100px" >
                </a>
                <a href="single-product.html">
                  <h4><a href="">'.$f["nombre_producto"].'</h4>
                </a>
                <p class="price">Desde: $'.$f["precio_producto"].'</p>
                <p class="desc">'.$f["descripcion_producto"].'</p>
                <a class="view-link shutter" href="View/Extra/Registro-user.php">
                  <i class="fa fa-plus-circle"></i>Añadir al carrito</a>
              </div>	<!-- End of /.products -->
            </div>
            
            ';
      
          }   
    
      }
  }

    //Esta función muestra todos los productos en la pagina de Products.php
    function cargarproductos(){
      $objetoConsultas =  new ConsultasE();
      $result = $objetoConsultas->mostrarProductos();

      if(!isset($result)){
          echo '<h2>No hay Productos</h2>';
      }else{
          
          foreach ($result as $f) {
              echo'
              <div class="col-md-3">
              <div class="products">
                <a href="single-product.php?id_productos='.$f["id_productos"].'">
                <img src="../../uploads/'.$f["img_producto"].'" width="100px" >
                </a>
                <a href="single-product.html">
                  <h4><a href="">'.$f["nombre_producto"].'</h4>
                </a>
                <p class="price">Desde: $'.$f["precio_producto"].'</p>
                <a class="view-link shutter" href="View/Extra/Registro-user.php">
                  <i class="fa fa-plus-circle"></i>Añadir al carrito</a>
              </div>	<!-- End of /.products -->
            </div>
            
            ';
      
          }   
    
      }
  }


  //Esta funcion sera para cargar por las categorias corespondientes
  function cargarproductosComida(){
  $objetoConsultas =  new ConsultasE();
  $result = $objetoConsultas->mostrarProductosCategoriaComida();

  if(!isset($result)){
      echo '<h2>No hay Productos</h2>';
  }else{
      
      foreach ($result as $f) {
          echo'
          <div class="col-md-3">
          <div class="products">
            <a href="single-product.php?id_productos='.$f["id_productos"].'">
            <img src="../../uploads/'.$f["img_producto"].'" width="100px" >
            </a>
            <a href="single-product.html">
              <h4><a href="">'.$f["nombre_producto"].'</h4>
              <p class="desc">'.$f["descripcion_producto"].'</p>
            </a>
            <p class="price">Desde: $'.$f["precio_producto"].'</p>
            <a class="view-link shutter" href="../Extra/Registro-user.php">
              <i class="fa fa-plus-circle"></i>Añadir al carrito</a>
          </div>	<!-- End of /.products -->
        </div>
        
        ';
  
      }   

  }
}

  //Esta funcion sera para cargar por las categorias corespondientes
  function cargarproductosLacteos(){
    $objetoConsultas =  new ConsultasE();
    $result = $objetoConsultas->mostrarProductosCategoriaLacteos();

    if(!isset($result)){
        echo '<h2>No hay Productos</h2>';
    }else{
        
        foreach ($result as $f) {
            echo'
            <div class="col-md-3">
            <div class="products">
              <a href="single-product.php?id_productos='.$f["id_productos"].'">
              <img src="../../uploads/'.$f["img_producto"].'" width="100px" >
              </a>
              <a href="single-product.html">
                <h4><a href="">'.$f["nombre_producto"].'</h4>
                <p class="desc">'.$f["descripcion_producto"].'</p>
              </a>
              <p class="price">Desde: $'.$f["precio_producto"].'</p>
              <a class="view-link shutter" href="../Extra/Registro-user.php">
                <i class="fa fa-plus-circle"></i>Añadir al carrito</a>
            </div>	<!-- End of /.products -->
          </div>
          
          ';
    
        }   
  
    }
}

//Esta funcion sera para cargar por las categorias corespondientes
function cargarproductosAseo(){
  $objetoConsultas =  new ConsultasE();
  $result = $objetoConsultas->mostrarProductosCategoriaAseo();

  if(!isset($result)){
      echo '<h2>No hay Productos</h2>';
  }else{
      
      foreach ($result as $f) {
          echo'
          <div class="col-md-3">
          <div class="products">
            <a href="single-product.php?id_productos='.$f["id_productos"].'">
            <img src="../../uploads/'.$f["img_producto"].'" width="100px" >
            </a>
            <a href="single-product.html">
              <h4><a href="">'.$f["nombre_producto"].'</h4>
              <p class="desc">'.$f["descripcion_producto"].'</p>
            </a>
            <p class="price">Desde: $'.$f["precio_producto"].'</p>
            <a class="view-link shutter" href="../Extra/Registro-user.php">
              <i class="fa fa-plus-circle"></i>Añadir al carrito</a>
          </div>	<!-- End of /.products -->
        </div>
        
        ';
  
      }   

  }
}



  //Esta funcion sera para cargar por las categorias corespondientes
  function cargarproductosDulces(){
    $objetoConsultas =  new ConsultasE();
    $result = $objetoConsultas->mostrarProductosCategoriaDulces();

    if(!isset($result)){
        echo '<h2>No hay Productos</h2>';
    }else{
        
        foreach ($result as $f) {
            echo'
            <div class="col-md-3">
            <div class="products">
              <a href="single-product.php?id_productos='.$f["id_productos"].'">
              <img src="../../uploads/'.$f["img_producto"].'" width="100px" >
              </a>
              <a href="single-product.html">
                <h4><a href="">'.$f["nombre_producto"].'</h4>
                <p class="desc">'.$f["descripcion_producto"].'</p>
              </a>
              <p class="price">Desde: $'.$f["precio_producto"].'</p>
              <a class="view-link shutter" href="../Extra/Registro-user.php">
                <i class="fa fa-plus-circle"></i>Añadir al carrito</a>
            </div>	<!-- End of /.products -->
          </div>
          
          ';
    
        }   

    }
  }

  //Esta función muestra los productos en detalles
  function cargarProductoDetalles(){
    if(isset($_GET['id_productos'])){
        $objetoConsultas = new ConsultasE();
        $id_productos =$_GET['id_productos'];
        $resultado = $objetoConsultas->mostrarProducto($id_productos);
        foreach ($resultado as $f){
            echo '
            <div class="row">
				<div class="col-md-5">
					<div class="single-product-img">
						<img src="../../uploads/'.$f["img_producto"].'" alt="imgProducto" width="500px">
					</div>

				</div> <!-- End of /.col-md-5 -->
				<div class="col-md-4">
					<div class="block">
						<div class="product-des">
							<h2>'.$f["nombre_producto"].'</h2>
							<p class="price">Desde: $'.$f["precio_producto"].'</p>
              <br>
							<p>'.$f["descripcion_producto"].'</</p>
              <br>
							<a class="view-link" href="#"><i class="fa fa-plus-circle"></i>Añadir al Carrito</a>
						</div>	<!-- End of /.product-des -->
					</div> <!-- End of /.block -->
				</div>	<!-- End of /.col-md-4 -->
				<div class="col-md-3">
					<div class="blog-sidebar">
						
					</div>	<!-- End of /.blog-sidebar -->
						
				</div>	<!-- End of /.col-md-3 -->
			</div>	<!-- End of /.row -->
            ';
        }
    }

}

?>