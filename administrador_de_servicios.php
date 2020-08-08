<?php include_once "includes/funciones/validar_sesion.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/iconos.css">
    <link rel="stylesheet" href="css/normalice.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Press+Start+2P&display=swap" rel="stylesheet">
    <title>Abysmal Edge</title>
</head>
<body class="fondo_usuarios">
    <div class="historial_pedidos">
        <div class="contenedor_pedidos">
                <?php
                $id = $_SESSION['id'];
                try{
                    require_once("includes/funciones/BD_conexion.php");
                    $stmt = $conn->prepare("select  
                    fecha_inicio,
                    fecha_fin,
                    fecha_inicio,
                    estatus,
                    subtotal
                    from 
                    detalle_renta where
                    cliente_id = ?");
                    $stmt->bind_param(
                    "s",
                    $id);
                    $stmt->execute();
                    $resultado = $stmt->get_result();
                    $cliente = $resultado->fetch_all(MYSQLI_ASSOC);
                    $stmt->close();
                    $conn->close();
                }catch (\Exception $e){
                    echo $e->getMessage();
                }
                ?>
                <ul class="encabezado_pedidos">
                    <li>Fecha de contratacion</li>
                    <li>Fecha de finalizacion</li>
                    <li>Servicio</li>
                    <li>Costo</li>
                    <li>Estado</li>
                    <li></li>
                    <li></li>
                </ul>
                
                <?php
                    foreach($cliente as $datos){
                        if($datos['estatus'] == "ACTIVO"){
                            echo "<ul class='informacion_pedidos'>";
                            foreach($datos as $dato){
                                echo "<li>".$dato."</li>";
                            }
                            echo "<li><a href='cancelar_servicio.php' class='boton-rojo'>Cancelar</a></li>";
                            echo "<li><a href='cancelar_servicio.php' class='boton-verde'>Editar</a></li>";
                            echo "</ul>";
                        }
                            echo "</ul>";
                        }
                ?>
        </div>
    </div>
                <?php/*
                    if($renta == NULL){
                        echo $equipo['equipo.modelo'];
                    }else{
                        echo $renta['renta.nombre'];
                    }*/
                ?>
</body>
</html>
