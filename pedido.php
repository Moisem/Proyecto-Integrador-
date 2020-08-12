<?php
include_once "includes/templates/header_terciario.php";
    $id_renta = $_POST['id'];
    $servicio = $_POST['nombre'];
    $costo = $_POST['costo'];

    date_default_timezone_set ('America/Mexico_City');
    $fecha_actual = date("Y-m-d");
    $fecha_entrega = date("Y-m-d",strtotime($fecha_actual."+ 3 days"));
    $fecha_vencimiento = date("Y-m-d",strtotime($fecha_entrega."+ 30 days"));      
    ?>
    <?php
    $id = $_SESSION['id'];
    try{
        require_once("includes/funciones/BD_conexion.php");
        $sql = "SELECT 
        direccion.id,
        direccion.calle, 
        direccion.no_ext, 
        direccion.no_int, 
        direccion.cp, 
        estado.nombre_estado, 
        municipios.nombre FROM direccion
        INNER JOIN estado ON direccion.estado_id = estado.id
        INNER JOIN municipios ON direccion.municipio_id = municipios.id
        AND direccion.usuario_id= ? ";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $id);
        $stmt->execute();
        $resultado = $stmt->get_result();
        $stmt->close();
        $conn->close();
    }catch (\Exception $e){
        echo $e->getMessage();
    }
?>
    <div class="contenedor centrar-texto">
        <h1 class="titulo FW-300">Rentar <?php echo $servicio;?></h1>
    </div>
        <div class="contenedor contenedor-pedido">
            <form class="formulario_pedido centrar-texto" action="confirmar_pedido.php" method="post">
                <fieldset>
                    <legend>Datos de Orden</legend>

                    <label for="fecha_de_requisicion" class="">Fecha de requisicion</label>
                    <p><?php echo $fecha_actual;?></p>
                    <input class="centrar-texto" id="fecha_de_requisicion" type="hidden" name="fecha_de_requisicion" pattern="[0-9]{2}-[0-9]{2}-[0-9]{4}" value="<?php echo $fecha_actual;?>" required>

                    <label for="fecha_inicio" class="">Fecha estimada de entrega</label> 
                    <p><?php echo $fecha_entrega;?></p>   
                    <input id="fecha_inicio" type="hidden" name="fecha_inicio" value="<?php echo $fecha_entrega;?>">

                    <label for="fecha_final" class="">Tu Servicio vencerá el dia:</label>
                    <p><?php echo $fecha_vencimiento;?></p>    
                    <input id="fecha_final" type="hidden" name="fecha_final" value="<?php echo $fecha_vencimiento;?>">

                    <label for="persona_que_recibe" class="">Nombre de quien recibirá el equipo</label>
                    <p><?php echo $_SESSION['nombre']." ".$_SESSION['apellido_paterno'];?></p> 
                    <input id="persona_que_recibe" type="hidden" name="cliente" value="<?php echo $_SESSION['nombre']." ".$_SESSION['apellido_paterno'];?>">

                    <label for="direccion_id">Selecciona tu direccion de envio</label>
                    <select name="direccion_id" id="direccion_id" required>
                        <option value="" selected disabled>-Seleccionar-</option>
                                <?php while ($direcciones = $resultado->fetch_assoc()) { ?>
                                    <option value="<?php echo $direcciones['id'];?>">
                                    <?php echo $direcciones['calle']." #".$direcciones['no_ext']." int: ".$direcciones['no_int'].", ".$direcciones['cp'].", ".$direcciones['nombre'].", ".$direcciones['nombre_estado'];?>
                                    </option>
                                <?php } ?>
                    </select>

                    <label class="centrar-texto"" for="total">Total a Pagar</label>   
                    <p class="precio centrar-texto">$<?php echo $costo?></p>
                    <input id="costo" type="hidden" name="costo" value="<?php echo $costo;?>">

                    <input id="nombre_servicio" type="hidden" name="servicio" value="<?php echo $servicio;?>">
                    <input id="id_renta" type="hidden" name="id_renta" value="<?php echo $id_renta;?>">
                </fieldset>
                <div class="contendor centrar-texto" id="contenedor-botones">
                    <input type="submit" value="Pagar Ahora" class="boton boton-azul-cielo" name="submit">
                    <a href="index.php" class="boton boton-rojo">Cancelar</a>
                </div>
            </form>
        </div>
</main>
</body>
</html>
