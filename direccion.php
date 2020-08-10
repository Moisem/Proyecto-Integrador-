<?php include_once "includes/templates/header.php";
include_once "includes/funciones/validar_sesion.php";
require_once ("includes/funciones/BD_conexion.php");
?>
<form class="formulario" action="" method="post">
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
       
        <div class="form-group"> 
            <label for="municipio">Municipio</label>
            <select class="form-control form-control-sm" name="municipio" id="municipio">
            <option value="" selected disabled>-Seleccionar-</option>
            <option value=""></option>
            </select>
        </div>

            <label for="calle">Calle</label>
            <input type="text" id="calle" placeholder="Ingrese su calle">
            
            <label for="no.Int">No. Interior</label>
            <input type="text" id="no.Int" placeholder="Ingrese su no.Int">
           
            <label for="no.Ext">No. Exterior</label>
            <input type="text" id="no.Ext" placeholder="Ingrese su no.Exte">
            
            <label for="codigo postal">Codigo Postal</label>
            <input type="text" id="codigo postal" placeholder="Ingrese su Nombre">
        </fieldset>
        <div class="agregar-direccion contenedor">
            <input type="submit"  value="Agregar Direccion de Envio" class="boton boton-azul-cielo">
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
