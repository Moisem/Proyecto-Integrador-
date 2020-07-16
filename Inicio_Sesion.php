<?php include_once "includes/templates/header_secundario.php";?>
<main class="contenedor">
    <form action="">
        <h2 class="FW-900 centrar-texto">Inicia Sesion Para Continuar</h2>
        <fieldset>
        <legend >Ingresar</legend>
        
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Ingrese su email">

            <label for="contraseña">Contraseña</label>
            <input type="password" id="contraseña" placeholder="Ingrese su contraseña"> 
        
        </fieldset>
        <div class="contendor centrar-texto iniciar_sesion">
            <input type="submit" value="Iniciar Sesión" class="boton boton-azul-cielo">
            <p>¿No tienes una cuenta? <a href="Registro.php" class="IS">Crear una Cuenta</a></p>     
        </div>
        </form>
</main>
</body>
</html>