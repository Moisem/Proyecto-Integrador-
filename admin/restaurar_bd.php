<?php
  include_once "templates/validar_sesion.php";
  include_once 'templates/header.php';
  include_once 'templates/barra.php';
  include_once 'templates/navegacion.php';
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Administrar Base de Datos - Abysmal Edge</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
          <div class="col">

            <div class="row-sm-6">
              <div class="card text-center">
                <div class="card-header">
                  <h1 style="font-size: 30px">Genera un Respaldo de la Base de Datos</h1>
                </div>
                <div class="card-body">
                    <a href="r.php" class="btn btn-success btn-lg btn-block">Respaldo</a>
                  </form>
                </div>
              </div>
            </div>

            <div class="row-sm-6">
              <div class="card text-center">
                <div class="card-header">
                  <h1 style="font-size: 30px">Restaurar la Base de Datos</h1>
                </div>
                <div class="card-body">
                  <form action="">
                    <div class="card">
                      <div class="custom-file">
                        <input type="file"  id="customFileLang" lang="es" accept=".sql">
                      </div>
                    </div>
                    <a href="restore.php" class="btn btn-warning btn-lg btn-block">Restaurar</a>
                  </form>
                </div>
              </div>
            </div>
            
          </div>  
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php
    include_once 'templates/footer.php';
  ?>
</html>