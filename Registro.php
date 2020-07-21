<?php include_once "includes/templates/header_secundario.php";?>
<?php 
    if(isset($_POST['submit'])){

        $nombre = $_POST['nombre'];
        $ap_paterno = $_POST['ap_paterno'];
        $ap_materno = $_POST['ap_materno'];
        $correo = $_POST['correo'];
        $contrasena = $_POST['contrasena'];
        $confirmarcontrasena = $_POST['confirmarcontrasena'];
        $telefono = $_POST['telefono'];

        if(! (filter_has_var(INPUT_POST, 'nombre') &&
        (strlen(filter_input(INPUT_POST, 'nombre')) >0 ))){
         echo "<h3 class='error'>Ingresa un nombre<h3>";
        }

        if(! (filter_has_var(INPUT_POST, 'ap_materno') &&
        (strlen(filter_input(INPUT_POST, 'ap_materno')) >0 ))){
            echo "<h3 class='error'>Los Apellidos son obligatorios<h3>";
        }

        if(! (filter_has_var(INPUT_POST, 'ap_paterno') &&
        (strlen(filter_input(INPUT_POST, 'ap_paterno')) >0 ))){
            echo "<h3 class='error'>Los Apellidos son obligatorios<h3>";
        }
        if(! (filter_has_var(INPUT_POST, 'correo') &&
        (strlen(filter_input(INPUT_POST, 'correo')) >0 ))){
         echo "<h3 class='error'>El correo electronico es necesario<h3>";
        }

        if(! (filter_has_var(INPUT_POST, 'contrasena') &&
        (strlen(filter_input(INPUT_POST, 'contrasena')) >0 ))){
            echo "<h3 class='error'>La contraseña no es valida<h3>";
        }

        if(! (filter_has_var(INPUT_POST, 'confirmarcontrasena') &&
        (strlen(filter_input(INPUT_POST, 'confirmarcontrasena')) >0 ))){
            echo "<h3 class='error'>Necesitas Confirmar tu Contraseña<h3>";
        }
        if(! (filter_has_var(INPUT_POST, 'telefono') &&
        (strlen(filter_input(INPUT_POST, 'telefono')) >0 ))){
         echo "<h3 class='error'>Necesitamos un numero de contacto<h3>";
        }
    }
?>
<main class="contenedor">

<form action="<?php echo  htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
    <h2 class="FW-900 centrar-texto">Crea una Nueva Cuenta en Abysmal Edge</h2>
        <fieldset>
            <legend>Datos de Usuario</legend>

            <div class="datos_personales">
                <label for="nombre">Nombre completo</label>
            </div>
            <div class="datos_personales">
                <input name="nombre" type="text" placeholder="Nombre(s)">
                <input name="ap_paterno" type="text" placeholder="Primer Apellido">
                <input name="ap_materno" type="text" placeholder="Segundo Apellido">
            </div>

            <label for="correo">Correo</label>   
            <input type="email" name="correo" placeholder="ejemplo@dominio.com">

            <label for="contrasena">Contraseña</label>
            <input type="password" placeholder="6-16 Caracteres" name="contrasena">

            <label for="confirmarcontrasena">Confirmar Contraseña</label>
            <input type="password" name="confirmarcontrasena" placeholder="Confirma tu Contraseña">

            <label for="telefono">Numero Telefonico</label>
            <input type="tel" name="telefono" placeholder="+52">
        </fieldset>

    <div class="contendor centrar-texto iniciar_sesion">
        <input type="submit"  value="Crear Cuenta" class="boton boton-azul-cielo" name="submit">
        <p>¿Ya tienes una cuenta? <a href="Inicio_Sesion.php" class="IS">Inicia Sesión</a></p>
    </div>
</form>
</main>
</body>
</html>