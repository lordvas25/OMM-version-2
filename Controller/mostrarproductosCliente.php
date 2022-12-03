<?php

//Esta función muestra los tenderos en el inicio
function MostrarTenderosInicio(){
  $objetoConsultas =  new ConsultasCliente();
  $result = $objetoConsultas->mostrarTenderos();

  if(!isset($result)){
      echo '<h2>No hay tenderos</h2>';
  }else{
      
      foreach ($result as $f) {
          echo'
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <a class="catagotie-head" href="#">
              <img src="../../uploads/'.$f["Foto"].'" width="100px" >
              <h3>'.$f["Nombres"].' </h3>
            </a>
                <div class="caption">
                  <p>..</p>
                  <p>
                    <a href="C_single-product.php?id_productos=" class="btn btn-default btn-transparent" role="button">
                      <span>Mirar Tienda</span>
                    </a>
                  </p>
                </div>	<!-- End of /.caption -->
            </div>	<!-- End of /.thumbnail -->
          </div>	<!-- End of /.col-sm-6 col-md-4 -->
        
        ';
  
      }   

  }
}


  //Esta función muestra los productos en ofertas de precio en el HomeCliente
  function cargarproductosPreciosBajos(){
    $objetoConsultas =  new ConsultasCliente();
    $result = $objetoConsultas->mostrarProductosPreciosBajos();

    if(!isset($result)){
        echo '<h2>No hay Productos</h2>';
    }else{
        
        foreach ($result as $f) {
            echo'
        <form action="../../Controller/insertarProductoCarrito.php" method="post">
          <div class="col-sm-6 col-md-4">
              <div class="thumbnail">
                <a class="catagotie-head" href="C_single-product.php?id_productos='.$f["id_productos"].'">
                <img src="../../uploads/'.$f["img_producto"].'" width="100px">
                
                <h3>'.$f["nombre_producto"].'</h3> 
                <input type="hidden" name="id_producto" value="'.$f["id_productos"].'"></input>
                <input type="hidden" name="nombre_producto" value="'.$f["nombre_producto"].'"></input>
                <input type="hidden" name="img_producto" value="'.$f["img_producto"].'"></input>
                <input type="hidden" name="precio_producto" value="'.$f["precio_producto"].'"></input>
                <input type="hidden" name="marca_producto" value="'.$f["marca_producto"].'"></input>
              </a>
                  <div class="caption">
                    <p>'.$f["descripcion_producto"].'</p>
                    <button type="submit" class="btn btn-default btn-transparent">
                      <span>Añadir</span>
                      </button>
                  </div>	<!-- End of /.caption -->
              </div>	<!-- End of /.thumbnail -->
            </div>	<!-- End of /.col-sm-6 col-md-4 -->
        </form>
          ';
    
        }   
  
    }
}

    //Esta función muestra todos los productos del cliente
    //Esta función muestra todos los productos del index
    function cargarproductosInicio(){
      $objetoConsultas =  new ConsultasCliente();
      $result = $objetoConsultas->mostrarProductos();

      if(!isset($result)){
          echo '<h2>No hay Productos</h2>';
      }else{
          
          foreach ($result as $f) {
              echo'
              <form action="../../Controller/insertarProductoCarrito.php" method="post">
              <div class="col-md-3">
              <div class="products">
                <a href=C_"single-product.php?id_productos='.$f["id_productos"].'">
                <img src="../../uploads/'.$f["img_producto"].'" width="100px" >
                </a>
                <a href="C_single-product.html">
                  <h4><a href="">'.$f["nombre_producto"].'</h4>
                </a>
                <p class="price">Desde: $'.$f["precio_producto"].'</p>
                <input type="hidden" name="id_producto" value="'.$f["id_productos"].'"></input>
                    <input type="hidden" name="nombre_producto" value="'.$f["nombre_producto"].'"></input>
                    <input type="hidden" name="img_producto" value="'.$f["img_producto"].'"></input>
                    <input type="hidden" name="precio_producto" value="'.$f["precio_producto"].'"></input>
                    <input type="hidden" name="marca_producto" value="'.$f["marca_producto"].'"></input>
                <button type="submit" class="btn btn-default btn-transparent">
                <span>Añadir</span>
                </button>
              </div>	<!-- End of /.products -->
            </div>
            </form>
            
            ';
      
          }   
    
      }
  }

  //Esta función muestra todos los productos en la pagina de ProductsCliente.php
  function cargarproductosCliente(){
    $objetoConsultas =  new ConsultasCliente();
    $result = $objetoConsultas->mostrarProductos();

    if(!isset($result)){
        echo '<h2>No hay Productos</h2>';
    }else{
        
        foreach ($result as $f) {
            echo'
            <form action="../../Controller/insertarProductoCarrito.php" method="post">
            <div class="col-md-3">
            <div class="products">
              <a href="C_single-product.php?id_productos='.$f["id_productos"].'">
              <img src="../../uploads/'.$f["img_producto"].'" width="100px" >
              </a>
              <a href="single-product.html">
                <h4><a href="">'.$f["nombre_producto"].'</h4>
              </a>
              <p class="price">Desde: $'.$f["precio_producto"].'</p>
              <input type="hidden" name="id_producto" value="'.$f["id_productos"].'"></input>
                <input type="hidden" name="nombre_producto" value="'.$f["nombre_producto"].'"></input>
                <input type="hidden" name="img_producto" value="'.$f["img_producto"].'"></input>
                <input type="hidden" name="precio_producto" value="'.$f["precio_producto"].'"></input>
                <input type="hidden" name="marca_producto" value="'.$f["marca_producto"].'"></input>
                <button type="submit" class="btn btn-default btn-transparent">
                <span>Añadir</span>
                </button>
                <i class="fa fa-plus-circle"></i>Añadir al carrito</a>
            </div>	<!-- End of /.products -->
          </div>
          </form>
          
          ';
    
        }   
  
    }
}


  //Esta funcion sera para cargar por las categorias corespondientes
  function cargarproductosComida(){
  $objetoConsultas =  new ConsultasCliente();
  $result = $objetoConsultas->mostrarProductosCategoriaComida();

  if(!isset($result)){
      echo '<h2>No hay Productos</h2>';
  }else{
      
      foreach ($result as $f) {
          echo'
          <form action="../../Controller/insertarProductoCarrito.php" method="post">
          <div class="col-md-3">
          <div class="products">
            <a href="C_single-product.php?id_productos='.$f["id_productos"].'">
            <img src="../../uploads/'.$f["img_producto"].'" width="100px" >
            </a>
            <a href="single-product.html">
              <h4><a href="">'.$f["nombre_producto"].'</h4>
            </a>
            <p class="price">Desde: $'.$f["precio_producto"].'</p>
                <input type="hidden" name="id_producto" value="'.$f["id_productos"].'"></input>
                <input type="hidden" name="nombre_producto" value="'.$f["nombre_producto"].'"></input>
                <input type="hidden" name="img_producto" value="'.$f["img_producto"].'"></input>
                <input type="hidden" name="precio_producto" value="'.$f["precio_producto"].'"></input>
                <input type="hidden" name="marca_producto" value="'.$f["marca_producto"].'"></input>
                <button type="submit" class="btn btn-default btn-transparent">
                <span>Añadir</span>
                </button>
              <i class="fa fa-plus-circle"></i>Añadir al carrito</a>
          </div>	<!-- End of /.products -->
        </div>
        </form>
        
        ';
  
      }   

  }
}

  //Esta funcion sera para cargar por las categorias corespondientes
  function cargarproductosLacteos(){
    $objetoConsultas =  new ConsultasCliente();
    $result = $objetoConsultas->mostrarProductosCategoriaLacteos();

    if(!isset($result)){
        echo '<h2>No hay Productos</h2>';
    }else{
        
        foreach ($result as $f) {
            echo'
            <form action="../../Controller/insertarProductoCarrito.php" method="post">
            <div class="col-md-3">
            <div class="products">
              <a href="C_single-product.php?id_productos='.$f["id_productos"].'">
              <img src="../../uploads/'.$f["img_producto"].'" width="100px" >
              </a>
              <a href="single-product.html">
                <h4><a href="">'.$f["nombre_producto"].'</h4>
              </a>
              <p class="price">Desde: $'.$f["precio_producto"].'</p>
              <input type="hidden" name="id_producto" value="'.$f["id_productos"].'"></input>
                <input type="hidden" name="nombre_producto" value="'.$f["nombre_producto"].'"></input>
                <input type="hidden" name="img_producto" value="'.$f["img_producto"].'"></input>
                <input type="hidden" name="precio_producto" value="'.$f["precio_producto"].'"></input>
                <input type="hidden" name="marca_producto" value="'.$f["marca_producto"].'"></input>
                <button type="submit" class="btn btn-default btn-transparent">
                <span>Añadir</span>
                </button>
            </div>	<!-- End of /.products -->
          </div>
          </form>
          ';
    
        }   
  
    }
}

//Esta funcion sera para cargar por las categorias corespondientes
function cargarproductosAseo(){
  $objetoConsultas =  new ConsultasCliente();
  $result = $objetoConsultas->mostrarProductosCategoriaAseo();

  if(!isset($result)){
      echo '<h2>No hay Productos</h2>';
  }else{
      
      foreach ($result as $f) {
          echo'
          <form action="../../Controller/insertarProductoCarrito.php" method="post">
          <div class="col-md-3">
          <div class="products">
            <a href="C_single-product.php?id_productos='.$f["id_productos"].'">
            <img src="../../uploads/'.$f["img_producto"].'" width="100px" >
            </a>
            <a href="single-product.html">
              <h4><a href="">'.$f["nombre_producto"].'</h4>
            </a>
            <p class="price">Desde: $'.$f["precio_producto"].'</p>
                <input type="hidden" name="id_producto" value="'.$f["id_productos"].'"></input>
                <input type="hidden" name="nombre_producto" value="'.$f["nombre_producto"].'"></input>
                <input type="hidden" name="img_producto" value="'.$f["img_producto"].'"></input>
                <input type="hidden" name="precio_producto" value="'.$f["precio_producto"].'"></input>
                <input type="hidden" name="marca_producto" value="'.$f["marca_producto"].'"></input>
                <button type="submit" class="btn btn-default btn-transparent">
                <span>Añadir</span>
                </button>
              <i class="fa fa-plus-circle"></i>Añadir al carrito</a>
          </div>	<!-- End of /.products -->
        </div>
        </form>
        
        ';
  
      }   

  }
}



  //Esta funcion sera para cargar por las categorias corespondientes
  function cargarproductosDulces(){
    $objetoConsultas =  new ConsultasCliente();
    $result = $objetoConsultas->mostrarProductosCategoriaDulces();

    if(!isset($result)){
        echo '<h2>No hay Productos</h2>';
    }else{
        
        foreach ($result as $f) {
            echo'
            <form action="../../Controller/insertarProductoCarrito.php" method="post">
            <div class="col-md-3">
            <div class="products">
              <a href="C_single-product.php?id_productos='.$f["id_productos"].'">
              <img src="../../uploads/'.$f["img_producto"].'" width="100px" >
              </a>
              <a href="single-product.html">
                <h4><a href="">'.$f["nombre_producto"].'</h4>
              </a>
              <p class="price">Desde: $'.$f["precio_producto"].'</p><input type="hidden" name="id_producto" value="'.$f["id_productos"].'"></input>
              <input type="hidden" name="nombre_producto" value="'.$f["nombre_producto"].'"></input>
              <input type="hidden" name="img_producto" value="'.$f["img_producto"].'"></input>
              <input type="hidden" name="precio_producto" value="'.$f["precio_producto"].'"></input>
              <input type="hidden" name="marca_producto" value="'.$f["marca_producto"].'"></input>
              <button type="submit" class="btn btn-default btn-transparent">
              <span>Añadir</span>
              </button>
            </div>	<!-- End of /.products -->
          </div>
          </form>
          
          ';
    
        }   

    }
  }

  //Esta función muestra los productos en detalles
  function cargarProductoDetalle(){
    if(isset($_GET['id_productos'])){
        $objetoConsultas = new ConsultasCliente();
        $id_productos =$_GET['id_productos'];
        $resultado = $objetoConsultas->mostrarProducto($id_productos);
        foreach ($resultado as $f){
            echo '
            <form action="../../Controller/insertarProductoCarrito.php" method="post">
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
              <br>
							<p>'.$f["descripcion_producto"].'</p>
							<p class="price">Desde: $'.$f["precio_producto"].'</p>
              <br>
                <input type="hidden" name="id_producto" value="'.$f["id_productos"].'"></input>
                <input type="hidden" name="nombre_producto" value="'.$f["nombre_producto"].'"></input>
                <input type="hidden" name="img_producto" value="'.$f["img_producto"].'"></input>
                <input type="hidden" name="precio_producto" value="'.$f["precio_producto"].'"></input>
                <input type="hidden" name="marca_producto" value="'.$f["marca_producto"].'"></input>
                <button type="submit" class="btn btn-default btn-transparent">
                <span>Añadir</span>
                </button>
              
						</div>	<!-- End of /.product-des -->
					</div> <!-- End of /.block -->
				</div>	<!-- End of /.col-md-4 -->
				<div class="col-md-3">
					<div class="blog-sidebar">
						
					</div>	<!-- End of /.blog-sidebar -->
						
				</div>	<!-- End of /.col-md-3 -->
			</div>	<!-- End of /.row -->
      </form>
            ';
        }
    }

}

?>