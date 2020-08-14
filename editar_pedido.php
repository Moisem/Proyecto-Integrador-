<?php
    if(isset($_POST['eliminar'])){
        $id = $_POST['id'];
        try{
            require_once("includes/funciones/BD_conexion.php");
            $stmt = $conn->prepare("UPDATE `detalle_renta` SET 
            `estatus` = 'CANCELADO' WHERE 
            `detalle_renta`.`id` = ?;");
            $stmt->bind_param("s",
            $id);
            $stmt->execute();
            /*$count=$conn->affected_rows;
            $error=$conn->error;
            $errno=$conn->errno;*/
            $stmt->close();
            $conn->close();
            /*if( $count >= 1 )
                echo "Datos guardados<br />";
                else
                echo "No se pudieron guardar los datos. " . $error . ". " . $errno;
                echo $id;*/
            header('Location: area_de_clientes.php?info="Pedido Cancelado Correctamente"');
        }
        catch (Exception $e){
            $error = $e->getMessage();
        }
    }else{
        $id = $_POST['id'];
        $fecha_inicio = $_POST['fecha_inicio'];
        $fecha_fin = $_POST['fecha_fin'];
        try{
            require_once("includes/funciones/BD_conexion.php");
            $stmt = $conn->prepare("update detalle_renta 
            fecha_inicio = ?, 
            fecha_fin = ? where 
            id = ?");
            $stmt->bind_param("sss",
            $fecha_inicio,
            $fecha_fin,
            $id);
            $stmt->execute();
            $resultado = $stmt->get_result();
            $cliente = $resultado->fetch_assoc();
            $stmt->close();
            $conn->close();
            header('Location: area_de_clientes.php?info="Pedido editado correctamente"');
        }
        catch (Exception $e){
            $error = $e->getMessage();
        }
    }
?>