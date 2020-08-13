<?php include_once "includes/templates/header_terciario.php";?>
    <?php
        try{
            require_once("includes/funciones/BD_conexion.php");
            $stmt = $conn->prepare(" select * from equipo ");
            $stmt->execute();
            $resultado = $stmt->get_result();
            $ListaEquipos = $resultado->fetch_all(MYSQLI_ASSOC);
            $stmt->close();
            $conn->close();
        }catch (\Exception $e){
            echo $e->getMessage();
        }          
        ?>
   <main class="contenedor">
       <h1 class="centrar-texto">Equipos para el Hogar</h1>
   </main>
   <div class="contenedor-planes tres-columnas">
    <?php
        foreach($ListaEquipos as $Equipo){
            if($Equipo['gamma'] == "HOGAR" && $Equipo['estado'] == "ACTIVO" ){?>
                <div class="plan-hogar">
                    <img src="<?php echo $Equipo['imagen']?>" alt="Adquiere Equipos">
                    <div class="contenido-plan">
                        <div class="descripcion-plan">
                            <h2><?php echo $Equipo['modelo'];?></h2>
                            <p>Tipo: <?php echo $Equipo['tipo'];?></p>
                            <p>CPU: <?php echo $Equipo['cpu'];?></p>
                            <p>RAM: <?php echo $Equipo['ram'];?></p>
                            <p>GPU: <?php echo $Equipo['grafica'];?></p>
                            <p>Resolucion: <?php echo $Equipo['resolucion'];?></p>
                            <p>Perifericos: <?php echo $Equipo['perifericos'];?></p>
                            <h3 class="precio">$<?php echo $Equipo['costo'];?></h3>
                            <form action="pedido.php" method="post">
                                <input type="hidden" name="id" id="id" value="<?php echo $Equipo['id'];?>">
                                <input type="hidden" name="nombre" id="nombre" value="<?php echo $Equipo['modelo'];?>">
                                <input type="hidden" name="costo" id="costo" value="<?php echo $Equipo['costo'];?>">
                                <input type="submit" value="Rentar" class="boton boton-azul DBlock" name="boton_rentar">
                            </form>
                        </div>
                    </div>
                </div>
    <?php
        }
    }
    ?>
    </div> 
<?php include_once "includes/templates/footer.php";?>
</body>
</html>
<?php
ob_end_flush();
?>