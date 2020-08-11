<?php
if(isset($_POST['iniciar'])){
        $correo = $_POST['correo'];
        $contrasena = $_POST['contrasena'];
        if(! (filter_has_var(INPUT_POST, 'correo') &&
            (strlen(filter_input(INPUT_POST, 'correo')) >0 ))){
                header('Location: inicio_sesion.php?info="No tienes acceso a esta area"');
            }
        if(! (filter_has_var(INPUT_POST, 'contrasena') &&
            (strlen(filter_input(INPUT_POST, 'contrasena')) >0 ))){
                header('Location: inicio_sesion.php?info="ingresa una contraseña"');
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
                header('Location: inicio_sesion.php?info="No tienes acceso a esta area"');
            }
            /* Validar contraseña */
            if(!password_verify($_POST['contrasena'] , $cliente['contrasena'])){
                header('Location: inicio_sesion.php?info="Contraseña incorrecta"');
            }
            /* Iniciar Sesion */
            session_start();
            $_SESSION['id'] = $cliente['id'];
            $_SESSION['nombre'] = $cliente['nombre'];
            $_SESSION['apellido_paterno'] = $cliente['apellido_paterno'];
            $_SESSION['rango'] = $cliente['rango'];
            header('Location: editor_de_equipos.php?info="Sesion iniciada correctamente!"');
        }
        catch (Exception $e){
            $error = $e->getMessage();
        }
    }
?>