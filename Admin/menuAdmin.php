
<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
    
      <?php
      mostrarPerfil();
      ?>
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a  class="nav-link active">
              <i class="nav-icon fas fa-solid fa-user"></i>
              <p>
                Usuarios
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="RegistrarUser.php" class="nav-link">
                  <i class="nav-icon fas fa-solid fa-user"></i>
                  <p>Registrar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="VerUsers.php" class="nav-link">
                  <i class="far fa-solid fa-eye nav-icon"></i>
                  <p>Ver</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Productos
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="RegistrarProductosAdmin.php" class="nav-link">
                  <i class="fa-solid fa-file-pen nav-icon"></i>
                  <p>Registrar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="verProductosAdmin.php" class="nav-link">
                  <i class="far fa-solid fa-eye nav-icon"></i>
                  <p>Ver</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Pedidos
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../Admin/verProductos.php" class="nav-link">
                  <i class="far fa-solid fa-eye nav-icon"></i>
                  <p>Ver</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>