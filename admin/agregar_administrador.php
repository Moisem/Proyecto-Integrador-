<?php
  include_once "templates/validar_sesion.php";
  include_once 'templates/header.php';
  include_once 'templates/barra.php';
  include_once 'templates/navegacion.php';

  $tipo="Admin";
  try{
    require_once("../includes/funciones/BD_conexion.php");
    $sql = "SELECT id, nombre, apellido_paterno, correo FROM cliente WHERE rango = ? ORDER BY nombre ASC";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $tipo);
    $stmt->execute();
    $resultado = $stmt->get_result();
    $stmt->close();
    $conn->close();
  }catch (\Exception $e){
    echo $e->getMessage();
  }
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Editar Administradores de Abysmal Edge</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card-body">
    <?php
            if (isset($_GET['info']) && !empty($_GET['info'])) { 
                $_GET['info'] = htmlentities($_GET['info']);
            echo '<div class="alert alert-warning" role"alert">';
                echo $_GET['info'];
            echo'</div>';              
             }
            ?>
      <table id="example2" class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Correo</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php while ($admin = $resultado->fetch_assoc()) {?>
            <tr>
              <td><?php echo $admin['nombre']." ".$admin['apellido_paterno'];?></td>
              <td><?php echo $admin['correo'];?></td>
              <form action="editar_admin.php" method="post">
                <input type="hidden" name="id" value="<?php echo $admin['id'];?>">
                <td><button type="submit" value="<?php echo $admin['id'];?>" name="eliminar"class="btn btn-danger">Eliminar</button></td>
              </form>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
    <?php while($admin = $resultado->fetch_assoc()){ ?>
    <?php } ?>

    <form action="editar_admin.php" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="correo" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block" value="agregar" name="agregar">Agregar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php
    include_once 'templates/footer.php';
  ?>
</html>
