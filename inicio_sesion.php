<?php include_once "includes/templates/header_secundario.php";?>

<?php 
    if(isset($_POST['submit'])){
        $resultado =$_POST;
        $correo = $_POST['correo'];
        $contrasena = $_POST['contrasena'];
        if(! (filter_has_var(INPUT_POST, 'correo') &&
            (strlen(filter_input(INPUT_POST, 'correo')) >0 ))){
                header('Location: inicio_sesion.php?info=debes ingresar un correo');
            }
        if(! (filter_has_var(INPUT_POST, 'contrasena') &&
            (strlen(filter_input(INPUT_POST, 'contrasena')) >0 ))){
                header('Location: inicio_sesion.php?info=debes ingresar una contraseña');
            }
        try{
            require_once("includes/funciones/BD_conexion.php");
            $stmt = $conn->prepare("select 
            id, 
            nombre, 
            apellido_paterno,
            contrasena,
            rango
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
                header('Location: inicio_sesion.php?info=cuenta inexistete');
            }
            /* Validar contraseña */
            if(!password_verify($_POST['contrasena'] , $cliente['contrasena'])){
                header('Location: inicio_sesion.php?info=contraseña incorrecta');
            }
            /* Iniciar Sesion */
            session_start();
            $_SESSION['id'] = $cliente['id'];
            $_SESSION['nombre'] = $cliente['nombre'];
            $_SESSION['apellido_paterno'] = $cliente['apellido_paterno'];
            $_SESSION['rango'] = $cliente['rango'];
            header('Location: index.php');
        }
        catch (Exception $e){
            $error = $e->getMessage();
        }
    }
?>

<main class="contenedor">
    <?php
if (isset($_GET['info']) && !empty($_GET['info'])) {
                $_GET['info'] = htmlentities($_GET['info']);
                echo <<<fin

            <div class="alert alert-warning" role"alert">
                {$_GET['info']}
            </div>
            fin;                      
            }
            ?>
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
