<?php include_once "includes/templates/header.php";
include_once "includes/funciones/validar_sesion.php";
require_once ("includes/funciones/BD_conexion.php");
?>
<form action="" method="post">
<fieldset class="direccion">
        <legend>Direcciones de Envio</legend>
          
            <div class="form-group"> 
                <label for="estado">Estado</label>
                <select class="form-control form-control-sm" id="estado">
                    <option value="" selected disabled>-Seleccionar-</option>
                    <option value="" name="estado" ></option>
                    <?php
                $sql = 'select id, estado from estado order by estado asc';
                foreach ($conexion->query($sql) as $ ) {
                echo <<<fin

                <option value="{$ ['id']}">{$ ['nombre']}</option>
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
            <?php
                $sql = 'select id, municipio from municipio order by municipio asc';
                foreach ($conexion->query($sql) as $) {
                echo <<<fin

                <option value="{$['id']}">{$['municipio']}</option>
fin;
                }
                ?>
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
</body>
</html>
