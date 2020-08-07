<?php include_once "includes/templates/header.php";
include_once "includes/funciones/validar_sesion.php";
?>
<form action="" method="post">
<fieldset class="direccion">
        <legend>Direcciones de Envio</legend>

            <label for="estado">Estado</label>
            <select id="estado">
                <option value="" selected disabled>-Seleccionar-</option>
                <option value="" name="estado"></option>
            </select>
            
            <label for="municipio">Municipio</label>
            <select name="municipio" id="municipio">
            <option value="" selected disabled>-Seleccionar-</option>
            <option value=""></option>
            </select>
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
