<?php include_once "includes/templates/header_secundario.php";?>

<?php 
    if(isset($_POST['submit'])){

        $resultado =$_POST;
        $correo = $_POST['correo'];
        $contrasena = $_POST['contrasena'];

        if(! (filter_has_var(INPUT_POST, 'correo') &&
        (strlen(filter_input(INPUT_POST, 'correo')) >0 ))){
         echo "<h3 class='error'>No has ingresado una direccion de correo electronico<h3>";
        }

        if(! (filter_has_var(INPUT_POST, 'contrasena') &&
        (strlen(filter_input(INPUT_POST, 'contrasena')) >0 ))){
            echo "<h3 class='error'>Debes ingresar una contraseña<h3>";
        }
    }
?>

<main class="contenedor">
    <form action="<?php echo  htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
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
