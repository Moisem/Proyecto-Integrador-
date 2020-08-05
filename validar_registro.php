<?php 
    if(isset($_POST['submit'])){
        $resultado =$_POST;
        $nombre = $_POST['nombre'];
        $apellido_paterno = $_POST['apellido_paterno'];
        $apellido_materno = $_POST['apellido_materno'];
        $correo = $_POST['correo'];
        $contrasena = password_hash($_POST['contrasena'],PASSWORD_BCRYPT,['cost' => 12 ]);
        $confirmarcontrasena = password_hash($_POST['confirmarcontrasena'],PASSWORD_BCRYPT,['cost' => 12 ]);
        $telefono = $_POST['telefono'];
        $pregunta_1 = password_hash($_POST['pregunta_1'],PASSWORD_BCRYPT,['cost' => 12 ]);
        $pregunta_2 = password_hash($_POST['pregunta_2'],PASSWORD_BCRYPT,['cost' => 12 ]);
        $pregunta_3 = password_hash($_POST['pregunta_3'],PASSWORD_BCRYPT,['cost' => 12 ]);
        echo "<pre>";
        var_dump($resultado);
        echo "</pre>";
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
        if(! (filter_has_var(INPUT_POST, 'pregunta_1') &&
        (strlen(filter_input(INPUT_POST, 'pregunta_1')) >0 ))){
         echo "<h3 class='error'>Las preguntas de seguridad son necesarias<h3>";
        }
        if(! (filter_has_var(INPUT_POST, 'pregunta_2') &&
        (strlen(filter_input(INPUT_POST, 'pregunta_2')) >0 ))){
         echo "<h3 class='error'>Las preguntas de seguridad son necesarias<h3>";
        }
        echo '<p>¿No tienes una cuenta? <a href="registro.php" class="IS">Crear una Cuenta</a></p>';
        if(! (filter_has_var(INPUT_POST, 'pregunta_2') &&
        (strlen(filter_input(INPUT_POST, 'pregunta_2')) >0 ))){
         echo "<h3 class='error'>Las preguntas de seguridad son necesarias<h3>";
        }
        try{
            require_once("includes/funciones/BD_conexion.php");
            $stmt = $conn->prepare("insert into cliente (
                nombre, 
                apellido_paterno, 
                apellido_materno, 
                correo, 
                contrasena, 
                telefono,
                pregunta_1,
                pregunta_2,
                pregunta_3
                )
                values 
                (?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssssssss", 
            $nombre, 
            $apellido_paterno, 
            $apellido_materno, 
            $correo, 
            $contrasena, 
            $telefono,
            $pregunta_1,
            $pregunta_2,
            $pregunta_2);
            $stmt->execute();
            $stmt->close();
            $conn->close();
            header('Location: validar_registro.php?registrado=1');
        }
        catch (Exception $e){
            $error = $e->getMessage();
        }
    }
?>
<?php include_once "includes/templates/header_secundario.php";?>
<?php
if (isset($_GET['registrado'])):
                if($_GET['registrado'] == "1"):
                    echo '<div class="registrado contenedor">
                            <h3>¡Registrado Correctamente!</h3>
                            <h2>¡Ahora eres parte de nuestros preciados clientes!</h2>
                            <a href="inicio_sesion.php" class="boton-registrate">Inicia Sesion</a>
                    </div>';
                endif;
            endif;
?>