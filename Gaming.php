<?php include_once "includes/templates/header_secundario.php";?>
   <main class="contenedor">
       <h1 class="centrar-texto">Equipos de Alto Rendimiento para Gaming</h1>
   </main>
   <section class="contenedor seccion">
        <h2  id="seccion-titulo" class="centrar-texto FW-300">Equipos Portatiles</h2>
         <div class="contenedor-planes">

         <div class="plan-gaming">
                <img src="img/mantenimiento.jpg" alt="Adquiere Equipos">
                <div class="contenido-plan">
                <?php
                    try{
                        require_once("includes/funciones/BD_conexion.php");
                        $sql = "SELECT * FROM equipo where id=7";
                        $resultado = $conn->query($sql);
                    }catch (\Exception $e){
                        echo $e->getMessage();
                    }
                    
                        $Equipo =$resultado->fetch_assoc();
                ?>
                    <div class="descripcion-plan-gaming">
                        <h2><?php echo $Equipo['modelo']?></h2>
                        <p>Perifericos: <?php echo $Equipo['perifericos']?></p>
                        <p>CPU: <?php echo $Equipo['cpu']?></p>
                        <p>RAM: <?php echo $Equipo['ram']?></p>
                        <p>GPU: <?php echo $Equipo['grafica']?></p>
                        <p>Resolucion: <?php echo $Equipo['resolucion']?></p>
                        <h3 class="precio-verde">$<?php echo $Equipo['costo']?></h3>
                        <a href="#" class="boton boton-verde Dblock">Rentar</a>
                    </div>
                </div>
            </div>

            <div class="plan-gaming">
                <img src="img/mantenimiento.jpg" alt="Adquiere Equipos">
                <div class="contenido-plan">
                <?php
                    try{
                        require_once("includes/funciones/BD_conexion.php");
                        $sql = "SELECT * FROM equipo where id=8";
                        $resultado = $conn->query($sql);
                    }catch (\Exception $e){
                        echo $e->getMessage();
                    }
                    
                        $Equipo =$resultado->fetch_assoc();
                ?>
                    <div class="descripcion-plan-gaming">
                        <h2><?php echo $Equipo['modelo']?></h2>
                        <p>Perifericos: <?php echo $Equipo['perifericos']?></p>
                        <p>CPU: <?php echo $Equipo['cpu']?></p>
                        <p>RAM: <?php echo $Equipo['ram']?></p>
                        <p>GPU: <?php echo $Equipo['grafica']?></p>
                        <p>Resolucion: <?php echo $Equipo['resolucion']?></p>
                        <h3 class="precio-verde">$<?php echo $Equipo['costo']?></h3>
                        <a href="#" class="boton boton-verde Dblock">Rentar</a>
                    </div>
                </div>
            </div>

            <div class="plan-gaming">
                <img src="img/mantenimiento.jpg" alt="Adquiere Equipos">
                <div class="contenido-plan">
                <?php
                    try{
                        require_once("includes/funciones/BD_conexion.php");
                        $sql = "SELECT * FROM equipo where id=9";
                        $resultado = $conn->query($sql);
                    }catch (\Exception $e){
                        echo $e->getMessage();
                    }
                    
                        $Equipo =$resultado->fetch_assoc();
                ?>
                    <div class="descripcion-plan-gaming">
                        <h2><?php echo $Equipo['modelo']?></h2>
                        <p>Perifericos: <?php echo $Equipo['perifericos']?></p>
                        <p>CPU: <?php echo $Equipo['cpu']?></p>
                        <p>RAM: <?php echo $Equipo['ram']?></p>
                        <p>GPU: <?php echo $Equipo['grafica']?></p>
                        <p>Resolucion: <?php echo $Equipo['resolucion']?></p>
                        <h3 class="precio-verde">$<?php echo $Equipo['costo']?></h3>
                        <a href="#" class="boton boton-verde Dblock">Rentar</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contenedor seccion">
        <h2  id="seccion-titulo" class="centrar-texto FW-300">Equipos de Escritorio</h2>
         <div class="contenedor-planes">

         <div class="plan-gaming">
                <img src="img/mantenimiento.jpg" alt="Adquiere Equipos">
                <div class="contenido-plan">
                <?php
                    try{
                        require_once("includes/funciones/BD_conexion.php");
                        $sql = "SELECT * FROM equipo where id=10";
                        $resultado = $conn->query($sql);
                    }catch (\Exception $e){
                        echo $e->getMessage();
                    }
                    
                        $Equipo =$resultado->fetch_assoc();
                ?>
                    <div class="descripcion-plan-gaming">
                        <h2><?php echo $Equipo['modelo']?></h2>
                        <p>Perifericos: <?php echo $Equipo['perifericos']?></p>
                        <p>CPU: <?php echo $Equipo['cpu']?></p>
                        <p>RAM: <?php echo $Equipo['ram']?></p>
                        <p>GPU: <?php echo $Equipo['grafica']?></p>
                        <p>Resolucion: <?php echo $Equipo['resolucion']?></p>
                        <h3 class="precio-verde">$<?php echo $Equipo['costo']?></h3>
                        <a href="#" class="boton boton-verde Dblock">Rentar</a>
                    </div>
                </div>
            </div>

            <div class="plan-gaming">
                <img src="img/mantenimiento.jpg" alt="Adquiere Equipos">
                <div class="contenido-plan">
                <?php
                    try{
                        require_once("includes/funciones/BD_conexion.php");
                        $sql = "SELECT * FROM equipo where id=11";
                        $resultado = $conn->query($sql);
                    }catch (\Exception $e){
                        echo $e->getMessage();
                    }
                    
                        $Equipo =$resultado->fetch_assoc();
                ?>
                    <div class="descripcion-plan-gaming">
                        <h2><?php echo $Equipo['modelo']?></h2>
                        <p>Perifericos: <?php echo $Equipo['perifericos']?></p>
                        <p>CPU: <?php echo $Equipo['cpu']?></p>
                        <p>RAM: <?php echo $Equipo['ram']?></p>
                        <p>GPU: <?php echo $Equipo['grafica']?></p>
                        <p>Resolucion: <?php echo $Equipo['resolucion']?></p>
                        <h3 class="precio-verde">$<?php echo $Equipo['costo']?></h3>
                        <a href="#" class="boton boton-verde Dblock">Rentar</a>
                    </div>
                </div>
            </div>

            <div class="plan-gaming">
                <img src="img/mantenimiento.jpg" alt="Adquiere Equipos">
                <div class="contenido-plan">
                <?php
                    try{
                        require_once("includes/funciones/BD_conexion.php");
                        $sql = "SELECT * FROM equipo where id=12";
                        $resultado = $conn->query($sql);
                    }catch (\Exception $e){
                        echo $e->getMessage();
                    }
                    
                        $Equipo =$resultado->fetch_assoc();
                ?>
                    <div class="descripcion-plan-gaming">
                        <h2><?php echo $Equipo['modelo']?></h2>
                        <p>Perifericos: <?php echo $Equipo['perifericos']?></p>
                        <p>CPU: <?php echo $Equipo['cpu']?></p>
                        <p>RAM: <?php echo $Equipo['ram']?></p>
                        <p>GPU: <?php echo $Equipo['grafica']?></p>
                        <p>Resolucion: <?php echo $Equipo['resolucion']?></p>
                        <h3 class="precio-verde">$<?php echo $Equipo['costo']?></h3>
                        <a href="#" class="boton boton-verde Dblock">Rentar</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include_once "includes/templates/footer.php";?>
</body>
</html>
