<?php
    try{
        require_once("../funciones/BD_conexion.php");
        $sql = "SELECT id, nombre FROM municipios WHERE estado_id = ? ORDER BY nombre ASC";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $_REQUEST['estado_id']);
        $stmt->execute();
        $resultado = $stmt->get_result();
        $stmt->close();
        $conn->close();
    }catch (\Exception $e){
        echo $e->getMessage();
    }
?>
        <?php while($municipio = $resultado->fetch_assoc()){ ?>
            <option value="<?php echo $municipio['id']?>">
        <?php echo $municipio['nombre']?>
    </option>
<?php } ?> 