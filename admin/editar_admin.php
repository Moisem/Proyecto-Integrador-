<?php
    include_once "templates/validar_sesion.php";
    if(isset($_POST['agregar'])) {
        $correo = $_POST['correo'];
        try{
            require_once("../includes/funciones/BD_conexion.php");
            $stmt = $conn->prepare("update cliente set
            rango = 'Admin' where correo = '?' ");
            $stmt->bind_param("s", $correo);
            $stmt->execute();
            $stmt->close();
            $conn->close();
            header('location: agregar_administrador.php');
        }
        catch (Exception $e){
            $error = $e->getMessage();
        }
    }else{
        $id = $_POST['id'];
        try{
            require_once("../includes/funciones/BD_conexion.php");
            $stmt = $conn->prepare("update cliente set
            rango = NULL where id= ?");
            $stmt->bind_param("s", $id);
            $stmt->execute();
            $stmt->close();
            $conn->close();
            header('location: agregar_administrador.php');
        }
        catch (Exception $e){
            $error = $e->getMessage();
        }
    }
?>