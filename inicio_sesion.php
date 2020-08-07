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
        try{
            require_once("includes/funciones/BD_conexion.php");
            $stmt = $conn->prepare("select 
            id, 
            nombre, 
            apellido_paterno,
            contrasena
            from cliente where
            correo = ? limit 1");
            $stmt->bind_param(
            "s",
            $correo);
            $stmt->execute();
            $resultado = $stmt->get_result();
            $cliente = $resultado->fetch_assoc();
            $stmt->close();
            $conn->close();
            /* Validar usuario */
            if(false == $cliente){
                echo "<h3 class='error contenedor titulo centrar-texto'>Correo inexistente</h3>";
                exit;
            }
            /* Validar contraseña */
            if(!password_verify($_POST['contrasena'] , $cliente['contrasena'])){
                echo "<h3 class='error contenedor titulo centrar-texto'>Contraseña incorrecta</h3>";
                exit;
            }
            /* Iniciar Sesion */
            session_start();
            $_SESSION['id'] = $cliente['id'];
            $_SESSION['nombre'] = $cliente['nombre'];
            $_SESSION['apellido_paterno'] = $cliente['apellido_paterno'];
            header('Location: index.php');
        }
        catch (Exception $e){
            $error = $e->getMessage();
        }
    }
?>

<main class="contenedor">
    <form class="formulario" action="<?php echo  htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
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
