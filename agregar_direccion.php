<?php
include_once "includes/funciones/validar_sesion.php";
    if(isset($_POST['submit'])){
        $usuario_id = $_SESSION['id'];
        $estado_id = $_POST['estado_id'];
        $municipio_id = $_POST['municipio_id'];
        $calle = $_POST['calle'];
        $no_ext = $_POST['no_ext'];
        $no_int = $_POST['no_int'];
        $cp = $_POST['cp'];
        try{
            require_once("includes/funciones/BD_conexion.php");
            $stmt = $conn->prepare("INSERT INTO `direccion` 
            (`id`, 
            `calle`, 
            `no_ext`, 
            `no_int`, 
            `cp`, 
            `estado_id`, 
            `municipio_id`, 
            `usuario_id`) VALUES 
            (NULL, ?, ?, ?, ?, ?, ?, ?);");
            $stmt->bind_param("sssssss",
            $calle, 
            $no_ext, 
            $no_int, 
            $cp, 
            $estado_id, 
            $municipio_id,
            $usuario_id);
            $stmt->execute();
            $stmt->close();
            $conn->close();
            header('location: direccion.php?info="Direccion agregada correctamente"');
        }
        catch (Exception $e){
            $error = $e->getMessage();
        }
    }
?>
