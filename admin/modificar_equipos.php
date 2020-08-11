<?php
include_once "templates/validar_sesion.php";
        $modelo = $_POST['modelo'];
        $costo = $_POST['costo'];
        $cpu = $_POST['cpu'];
        $ram = $_POST['ram'];
        $grafica = $_POST['grafica'];
        $resolucion = $_POST['resolucion'];
        $perifericos = $_POST['perifericos'];
        $tipo = $_POST['tipo'];
        $estado = $_POST['estado'];
        $gamma = $_POST['gamma'];
        $imagen = $_POST['imagen'];

    if(isset($_POST['agregar'])) {
        try{
            require_once("../includes/funciones/BD_conexion.php");
            $stmt = $conn->prepare("insert into equipo (
                id, 
                modelo, 
                costo, 
                cpu, 
                ram, 
                grafica,
                resolucion,
                perifericos,
                tipo,
                estado,
                gamma,
                imagen
                )
                values 
                ('',?,?,?,?,?,?,?,?,?,?,?)");
            $stmt->bind_param("sssssssssss", 
            $modelo, 
            $costo, 
            $cpu, 
            $ram, 
            $grafica, 
            $resolucion,
            $perifericos,
            $tipo,
            $estado,
            $gamma,
            $imagen);
            $stmt->execute();
            $stmt->close();
            $conn->close();
            echo "creado";
        }
        catch (Exception $e){
            $error = $e->getMessage();
        }
    }else{
        $id = $_POST['id'];
        try{
            require_once("../includes/funciones/BD_conexion.php");
            $stmt = $conn->prepare("update equipo set 
            modelo = ?, 
            costo = ?, 
            cpu = ?, 
            ram = ?, 
            grafica = ?, 
            resolucion = ?, 
            perifericos = ?, 
            tipo = ?, 
            estado = ?, 
            gamma = ?,
            imagen = ? where 
            id = ?"); 
            $stmt->bind_param("ssssssssssss", 
            $modelo, 
            $costo, 
            $cpu, 
            $ram, 
            $grafica, 
            $resolucion,
            $perifericos,
            $tipo,
            $estado,
            $gamma,
            $imagen,
            $id);
            $stmt->execute();
            $stmt->close();
            $conn->close();
            echo "insertado";
        }
        catch (Exception $e){
            $error = $e->getMessage();
        }
    }
?>