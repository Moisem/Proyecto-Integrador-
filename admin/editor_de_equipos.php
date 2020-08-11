<?php
  include_once "templates/validar_sesion.php";
  include_once 'templates/header.php';
  include_once 'templates/barra.php';
  include_once 'templates/navegacion.php';

  $tipo="Admin";
  try{
    require_once("../includes/funciones/BD_conexion.php");
    $sql = "SELECT * FROM equipo ORDER BY modelo ASC";
    $stmt = $conn->prepare($sql);
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
            <h1>Administrador de Equipos</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card-body">
      <table id="example2" class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>Modelo</th>
            <th>CPU</th>
            <th>RAM</th>
            <th>GPU</th>
            <th>Resolucion</th>
            <th>Perifericos</th>
            <th>Tipo</th>
            <th>Gamma</th>
            <th>Estado</th>
            <th>Costo</th>
            <th>Imagen</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php while ($equipo = $resultado->fetch_assoc()) {?>
            <tr>
              <td><?php echo$equipo['modelo'];?></td>
              <td><?php echo$equipo['cpu'];?></td>
              <td><?php echo$equipo['ram'];?></td>
              <td><?php echo$equipo['grafica'];?></td>
              <td><?php echo$equipo['resolucion'];?></td>
              <td><?php echo$equipo['perifericos'];?></td>
              <td><?php echo$equipo['tipo'];?></td>
              <td><?php echo$equipo['gamma'];?></td>
              <td><?php echo$equipo['estado'];?></td>
              <td>$<?php echo$equipo['costo'];?></td>
              <td><?php echo$equipo['imagen'];?></td>
              <form action="editar_equipo.php" method="post">
                <input type="hidden" name="id" value="<?php echo $equipo['id'];?>">
                <td><button type="submit" value="<?php echo $equipo['id'];?>" name="editar"class="btn btn-success">Editar</button></td>
              </form>
            </tr>
          <?php } ?>
        </tbody>
      </table>
      <form action="editar_equipo.php" method="post">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block" value="agregar" name="agregar">Agregar</button>
          </div>
          <!-- /.col -->
      </form>
    </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php
    include_once 'templates/footer.php';
  ?>
</html>
