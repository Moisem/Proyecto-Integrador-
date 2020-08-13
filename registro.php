<?php include_once "includes/templates/header_secundario.php";?>
<main class="contenedor">
<?php
            if (isset($_GET['info']) && !empty($_GET['info'])) { 
                $_GET['info'] = htmlentities($_GET['info']);
            echo '<div class="alert alert-warning" role"alert">';
                echo $_GET['info'];
            echo'</div>';              
             }
            ?>
<form class="formulario" action="validar_registro.php" method="post">
    <h2 class="FW-900 centrar-texto">Crea una Nueva Cuenta en Abysmal Edge</h2>
        <fieldset>
            <legend>Datos de Usuario</legend>

            <div class="datos_personales">
                <label for="nombre">Nombre completo</label>
            </div>
            <div class="datos_personales">
                <input name="nombre" type="text" placeholder="Nombre(s)" required>
                <input name="apellido_paterno" type="text" placeholder="Primer Apellido" required>
                <input name="apellido_materno" type="text" placeholder="Segundo Apellido" required>
            </div>

            <label for="correo">Correo</label>   
            <input type="email" name="correo" placeholder="ejemplo@dominio.com" required>

            <label for="contrasena">Contraseña</label>
            <input type="password" placeholder="6-16 Caracteres" name="contrasena" required>

            <label for="confirmarcontrasena">Confirmar Contraseña</label>
            <input type="password" name="confirmarcontrasena" placeholder="Confirma tu Contraseña" required>

            <label for="telefono">Numero Telefonico</label>
            <input type="tel" name="telefono" placeholder="+52" required>
        </fieldset>
        <fieldset>
            <legend>Preguntas de Seguridad</legend>

            <label for="pregunta_1">¿Cual es el nombre de tu primer mascota?</label>   
            <input type="password" name="pregunta_1" required>

            <label for="pregunta_2">¿Cuál es el nombre de tu serie o videojuego favorito?</label>
            <input type="password" name="pregunta_2" required>

            <label for="pregunta_3">¿Cuál es tu pais favorito?</label>
            <input type="password" name="pregunta_3" required>
        </fieldset>

    <div class="contendor centrar-texto iniciar_sesion">
        <input type="submit" class="boton boton-azul-cielo" name="submit" value="Registrar">
        <p>¿Ya tienes una cuenta? <a href="inicio_sesion.php" class="IS">Inicia Sesión</a></p>
    </div>
</form>
</main>
</body>
</html>
<?php
ob_end_flush();
?>
