<?php
  include_once "templates/validar_sesion.php";
  include_once 'templates/header.php';
  include_once 'templates/barra.php';
  include_once 'templates/navegacion.php';

  if(isset($_POST['agregar'])) { ?>

<div class="content-wrapper">
  <section class="content">
    <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Agregar Equipo</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="modificar_equipos.php" method="post">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Modelo</label>
                        <input type="text" class="form-control" placeholder="Asus..." name="modelo" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Costo</label>
                        <input type="number" class="form-control" placeholder="1564" name="costo" required>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Perifericos</label>
                        <input type="text" class="form-control" placeholder="Mouse Razer..." name="perifericos" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Resolucion</label>
                        <input type="text" class="form-control" placeholder='1080x720 14" 4k' name="resolucion" required>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>CPU</label>
                        <input type="text" class="form-control" placeholder="Intel..." name="cpu" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>GPU</label>
                        <input type="text" class="form-control" placeholder="Nvidia..." name="grafica" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Ruta de imagen</label>
                        <input type="text" class="form-control" placeholder="img/ejemplo.jpg" name="imagen" required>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>RAM</label>
                        <select class="form-control" name="ram" required>
                          <option disabled selected>-Seleccionar-</option>
                          <option value ="2GB RAM">2GB RAM</option>
                          <option value ="4GB RAM">4GB RAM</option>
                          <option value ="8GB RAM">8GB RAM</option>
                          <option value ="16GB RAM">16GB RAM</option>
                          <option value ="32GB RAM">32GB RAM</option>
                          <option value ="64GB RAM">64GB RAM</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Tipo</label>
                         <select class="form-control" name="tipo" required>
                          <option disabled selected>-Seleccionar-</option>
                          <option value ="laptop">laptop</option>
                          <option value ="desktop">desktop</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Estatus</label>
                        <select class="form-control" name="estado" required>
                          <option disabled selected>-Seleccionar-</option>
                          <option value ="ACTIVO">ACTIVO</option>
                          <option value ="INACTIVO">INACTIVO</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Gamma</label>
                        <select class="form-control" name="gamma" required>
                          <option disabled selected>-Seleccionar-</option>
                          <option value ="HOGAR">HOGAR</option>
                          <option value ="GAMING">GAMING</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-block" value="agregar" name="agregar">Agregra Equipo</button>
                  </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>

    </section>
</div>
      
  <?php }else{ ?>
    
    <?php $id=$_POST['id']; 
    
    try{
        require_once("../includes/funciones/BD_conexion.php");
        $sql = "SELECT * FROM equipo where id = ? ORDER BY modelo ASC LIMIT 1";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s",$id);
        $stmt->execute();
        $resultado = $stmt->get_result();
        $equipo = $resultado->fetch_assoc();
        $stmt->close();
        $conn->close();
      }catch (\Exception $e){
        echo $e->getMessage();
      }

    ?>

    <div class="content-wrapper">
        <section class="content">
    <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Editar Equipo</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="modificar_equipos.php" method="post">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Modelo</label>
                        <input type="text" class="form-control" placeholder="Asus..." name="modelo" value="<?php echo $equipo['modelo']?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Costo</label>
                        <input type="text" class="form-control" placeholder="1564" name="costo" value="<?php echo $equipo['costo']?>">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Perifericos</label>
                        <input type="text" class="form-control" placeholder="Mouse Razer..." name="perifericos" value="<?php echo $equipo['perifericos']?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Resolucion</label>
                        <input type="text" class="form-control" placeholder='1080x720 14" 4k' name="resolucion" value="<?php echo $equipo['resolucion']?>">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>CPU</label>
                        <input type="text" class="form-control" placeholder="Intel..." name="cpu" value="<?php echo $equipo['cpu']?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>GPU</label>
                        <input type="text" class="form-control" placeholder="Nvidia..." name="grafica" value="<?php echo $equipo['grafica']?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Ruta de imagen</label>
                        <input type="text" class="form-control" placeholder="Asus..." name="imagen" value="<?php echo $equipo['imagen']?>">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>RAM</label>
                        <select class="form-control" name="ram">
                          <option value ="<?php echo $equipo['ram']?>"><?php echo $equipo['ram']?></option>
                          <option value ="2GB RAM">2GB RAM</option>
                          <option value ="4GB RAM">4GB RAM</option>
                          <option value ="8GB RAM">8GB RAM</option>
                          <option value ="16GB RAM">16GB RAM</option>
                          <option value ="32GB RAM">32GB RAM</option>
                          <option value ="64GB RAM">64GB RAM</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Tipo</label>
                        <select class="form-control" name="tipo" value="<?php echo $equipo['tipo']?>">
                          <option value ="laptop">laptop</option>
                          <option value ="desktop">desktop</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Estatus</label>
                        <select class="form-control" name="estado" value="<?php echo $equipo['estado']?>">
                          <option value ="ACTIVO">ACTIVO</option>
                          <option value ="INACTIVO">INACTIVO</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Gamma</label>
                        <select class="form-control" name="gamma" value="<?php echo $equipo['gamma']?>">
                          <option value ="HOGAR">HOGAR</option>
                          <option value ="GAMING">GAMING</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <input type="hidden" name="id" value="<?php echo $id;?>">
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-block" value="guardar" name="guardar">Guardar Cambios</button>
                  </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>

    </section>
</div>

<?php
    }
?>
<?php
    include_once 'templates/footer.php';
?>