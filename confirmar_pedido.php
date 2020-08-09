<?php
    include_once "includes/funciones/validar_sesion.php";
    include_once "includes/templates/header_secundario.php";
?>
    <?php
    $id= "";
    $fecha_inicio = $_POST['fecha_de_requisicion'];
    $fecha_fin = $_POST['fecha_final'];
    $estatus = "ACTIVO";
    $subtotal = $_POST['costo'];
    if($_POST['servicio'] == "Plan Hogar" || $_POST['servicio'] == "Plan Gaming" || $_POST['servicio'] == "Plan Empresarial" ){
        $renta_id = $_POST['id_renta'];
        $equipo_id = "";
    }else{
        $renta_id = "";
        $equipo_id = $_POST['id_renta'];
    }
    $cliente_id = $_SESSION['id'];
    $direccion_id = $_POST['direccion_id'];
    if(isset($_POST['submit'])){
        try{
            require_once("includes/funciones/BD_conexion.php");
            $stmt = $conn->prepare("insert into detalle_renta (
                id,
                fecha_inicio, 
                fecha_fin, 
                estatus, 
                subtotal, 
                renta_id,
                equipo_id,
                cliente_id,
                direccion_id
                )
                values 
                ('',?,?,?,?,?,?,?,?)");
            $stmt->bind_param("ssssssss", 
            $fecha_inicio, 
            $fecha_fin, 
            $estatus, 
            $subtotal, 
            $renta_id,
            $equipo_id,
            $cliente_id,
            $direccion_id);
            $stmt->execute();
            $stmt->close();
            $conn->close();
            echo "id =".$id."<br>"; 
            echo "fecha de inicio =".$fecha_inicio."<br>"; 
            echo "fecha de final =".$fecha_fin."<br>";
            echo "estatus =".$estatus."<br>";
            echo "total =".$subtotal."<br>"; 
            echo "ID de Plan =".$renta_id."<br>";
            echo "ID de equipo =".$equipo_id."<br>";
            echo "ID de cliente =".$cliente_id."<br>";
            echo "ID de cliente =".$direccion_id."<br>";
            echo "hecho";
        }
        catch (Exception $e){
            $error = $e->getMessage();
        }
    }
?>