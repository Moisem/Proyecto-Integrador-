<?php
if(isset($_POST['iniciar'])){
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
            require_once("../includes/funciones/BD_conexion.php");
            $stmt = $conn->prepare("select 
            id, 
            nombre, 
            apellido_paterno,
            contrasena,
            rango
            from cliente where
            correo = ? and 
            rango = 'Admin' limit 1");
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
            $_SESSION['rango'] = $cliente['rango'];
            header('Location: editor_de_equipos.php');
        }
        catch (Exception $e){
            $error = $e->getMessage();
        }
    }
?>