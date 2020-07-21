<?php include_once "includes/templates/header_secundario.php";?>
<main class="contenedor">

<form action="Respuesta_Registro.php" method="post">
    <h2 class="FW-900 centrar-texto">Crea una Nueva Cuenta en Abysmal Edge</h2>
        <fieldset>
            <legend>Datos de Usuario</legend>

            <div class="datos_personales">
                <label for="nombre">Nombre completo</label>
            </div>
            <div class="datos_personales">
                <input name="nombre" type="text" placeholder="Nombre(s)" required>
                <input name="ap_paterno" type="text" placeholder="Primer Apellido" required>
                <input name="ap_materno" type="text" placeholder="Segundo Apellido" required>
            </div>

            <label for="correo">Correo</label>   
            <input type="email" name="correo" placeholder="ejemplo@dominio.com" required>

            <label for="contrasena">Contraseña</label>
            <input type="password" placeholder="6-16 Caracteres" name="contrasena">

            <label for="ConfirmarContrasena">Confirmar Contraseña</label>
            <input type="password" name="ConfirmarContrasena" placeholder="Confirma tu Contraseña">

            <label for="Numero">Numero Telefonico</label>
            <input type="tel" name="Numero" placeholder="+52" required>
        </fieldset>

    <div class="contendor centrar-texto iniciar_sesion">
        <input type="submit"  value="Crear Cuenta" class="boton boton-azul-cielo">
        <p>¿Ya tienes una cuenta? <a href="Inicio_Sesion.php" class="IS">Inicia Sesión</a></p>
    </div>
</form>
</main>
</body>
</html>