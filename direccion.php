<?php
include_once "includes/funciones/validar_sesion.php";
include_once "includes/templates/header_secundario.php";

    $id = $_SESSION['id'];
    try{
        require_once("includes/funciones/BD_conexion.php");
        $sql = "SELECT id, nombre_estado FROM estado ORDER BY nombre_estado ASC";
        $resultado_estados = $conn->query($sql);
        $conn->close();

    }catch (\Exception $e){
        echo $e->getMessage();
    }
?>

<?php
            if (isset($_GET['info']) && !empty($_GET['info'])) { 
                $_GET['info'] = htmlentities($_GET['info']);
            echo '<div class="alert alert-warning" role"alert">';
                echo $_GET['info'];
            echo'</div>';              
             }
            ?>

<form class="formulario" action="agregar_direccion.php" method="post">
    <fieldset class="direccion">
        <legend>Direcciones de Envio</legend>
          
            <label for="estado_id">Estado</label>
            <select name="estado_id" id="estado_id" required>
                <option value="" selected disabled>-Seleccionar-</option>
                <?php while($estado = $resultado_estados->fetch_assoc()){ ?>
                    <option value="<?php echo $estado['id']?>">
                    <?php echo $estado['nombre_estado']?>
                    </option>
                <?php } ?> 
            </select>
       
            <label for="municipio_id">Municipio</label>
            <select  name="municipio_id" id="municipio_id" required>
            <option value="" selected disabled>-Seleccionar-</option>
            </select>

            <div class="contenedor domicilio">
                <div class="contenedor">
                    <label for="calle">Calle</label>
                    <input type="text" id="calle" placeholder="Ingrese su calle" name="calle" required>
                </div>
                
                <div class="contenedor">
                    <label for="no_ext">No. Exterior</label>
                    <input type="text" id="no_ext" placeholder="No." name="no_ext" required>
                </div>
            
                <div class="contenedor">
                    <label for="no_int">No. Interior</label>
                    <input type="text" id="no_int" placeholder="S/N" name="no_int">
                </div>

                <div class="contenedor">
                <label for="cp">Codigo Postal</label>
            <input type="text" id="cp" placeholder="52000" name="cp" required>
                </div>
            </div>
        </fieldset>
        <div class="agregar-direccion contenedor">
            <input type="submit"  value="Agregar Direccion de Envio" class="boton boton-azul-cielo" name="submit">
        </div>
</form>
<?php include_once 'includes/templates/scrips.php';?>
<script>
    $(function(e) {
        $('#estado_id').change(function (e) {
            $('#municipio_id').load('includes/templates/municipios.php?estado_id='+$(this).val());
        })
    })
</script>
</body>
</html>
