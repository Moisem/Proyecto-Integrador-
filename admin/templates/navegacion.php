  <!-- Main Sidebar Container -->
  
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../index.php" class="brand-link">
      <img src="../img/Logo.png"
           alt="Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
        <span class="brand-text font-weight-light">Abysmal Edge</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['nombre']." ".$_SESSION['apellido_paterno']?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="editor_de_equipos.php" class="nav-link">
              <i class="fas fa-desktop nav-icon"></i>
              <p>
                Editor de Equipos
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="restaurar_bd.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Base de Datos
              </p>
            </a>
            
          </li>
          <li class="nav-item has-treeview">
            <a href="agregar_administrador.php" class="nav-link">
            <i class="fas fa-user-plus nav-icon"></i>
              <p>
                Administradores
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>