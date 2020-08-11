<?php include_once "includes/funciones/validar_sesion.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap_css/bootstrap.min.css">        
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
                    id,  
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
                 <?php
            if (isset($_GET['info']) && !empty($_GET['info'])) { 
                $_GET['info'] = htmlentities($_GET['info']);
            echo '<div class="alert alert-warning" role"alert">';
                echo $_GET['info'];
            echo'</div>';              
             }
            ?>
                <ul class="encabezado_pedidos">
                    <li>Fecha de contratacion</li>
                    <li>Fecha de finalizacion</li>
                    <li>Estado</li>
                    <li>Costo</li>
                    <li></li>
                    <li></li>
                </ul>
                    <?php
                        foreach($cliente as $datos){
                            if($datos['estatus'] == "ACTIVO"){
                                echo "<form action='editor_de_pedidos.php' method='post' target='_parent'>";
                                echo "<ul class='informacion_pedidos'>";
                                foreach($datos as $key => $dato){
                                    if($key=="id"){
                                        echo "<input type='hidden' value='$dato' name='$key'>";
                                    }else{
                                        echo "<li>".$dato."</li>";
                                        echo "<input type='hidden' value='$dato' name='$key'>";
                                    }
                                }
                                echo "<li><input type='submit' style='color:white; border-radius:0.2rem;' value='cancelar' name='cancelar' class='boton-rojo'></li>";
                                echo "<li><input type='submit' style='color:white; border-radius:0.2rem;' value='cambiar dia de entrega' name='editar' class='boton-verde'></li>";
                                echo "</ul></form>";
                                }
                            }
                    ?>
        </div>
    </div>
    <?php include_once 'includes/templates/scrips.php'?>
</body>
</html>
