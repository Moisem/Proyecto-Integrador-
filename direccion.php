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

<div class="alert alert-danger" role="alert">
   <?php echo $_REQUEST['mensaje']?>
</div>

<form class="formulario" action="agregar_direccion.php" method="post">
    <fieldset class="direccion">
        <legend>Direcciones de Envio</legend>
          
            <div class="form-group"> 
                <label for="estado">Estado</label>
                <select class="form-control form-control-sm" id="estado">
                    <option value="" selected disabled>-Seleccionar-</option>
                    <option value="" name="estado" ></option>
                    <?php
                $sql = 'select id, estado from estados order by estado asc';
                foreach ($conexion ->query($sql) as $) {
                echo <<<fin

                <option value="{$ ['id']}">{$ ['estado']}</option>
fin;
                }
                ?>
                </select>
            </div>
       
            <label for="municipio_id">Municipio</label>
            <select  name="municipio_id" id="municipio_id" required>
            <option value="" selected disabled>-Seleccionar-</option>
            <option value=""></option>
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
<script src="js/jquery-3.5.1.min.js"></script>
<script>
$(function(e) {
    $('#estado').change(function (e) {
        console.log($(this).val())
    })
})
</script>
</body>
</html>
