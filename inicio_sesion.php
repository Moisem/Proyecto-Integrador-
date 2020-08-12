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
    <form class="formulario" action="iniciar_sesion.php" method="post">
        <h2 class="FW-900 centrar-texto">Inicia Sesion Para Continuar</h2>
        <fieldset>
        <legend >Ingresar</legend>
        
            <label for="email">Email</label>
            <input type="email" id="email" name="correo" placeholder="Ingrese su email">

            <label for="contraseña">Contraseña</label>
            <input type="password" name="contrasena" id="contraseña" placeholder="Ingrese su contraseña"> 
        
        </fieldset>
        <div class="contendor centrar-texto iniciar_sesion">
            <input type="submit" value="Iniciar Sesión" class="boton boton-azul-cielo" name="submit">
            <p>¿No tienes una cuenta? <a href="registro.php" class="IS">Crear una Cuenta</a></p>     
        </div>
        </form>
</main>
</body>
</html>
