<?php 
include_once "includes/templates/header_secundario.php";
include_once "includes/funciones/validar_sesion.php";
?>
<form action="<?php echo  htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
        <fieldset>
            <legend>Contratación de Plan</legend>
            <label for="no_servicios">Numero de Servicios</label>
            <input id="no_servicios" type="number" min="1" value="1" required>

            <label for="fecha_de_requisicion">Fecha de requisicion</label>   
            <input id="fecha_inicio" type="date" name="fecha">

            <label for="fecha_de_requisicion">Tu Servicio vencerá el dia:</label>   
            <input id="decha_final" type="date" name="fecha">

            <label for="persona_que_recibe">Nombre de quien recibirá el equipo</label>
            <input id="persona_que_recibe" type="text" name="nombre" placeholder="Nombre Completo">

            <label for="referencias">Indicaciones Personales</label>
            <textarea name="Comentarios" id="Comentarios"></textarea>
        </fieldset>
        <div class="contendor centrar-texto iniciar_sesion">
            <input type="submit" value="Contratar" class="boton boton-azul-cielo">
            <a href="planes.html" class="boton boton-rojo">Cancelar</a>
        </div>
</form>
</main>
</body>
</html>