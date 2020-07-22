<?php include_once "includes/templates/header_secundario.php";?>
   <main class="contenedor">
       <h1 class="centrar-texto">Equipos para el Hogar</h1>
   </main>
   <section class="contenedor seccion">
        <h2  id="seccion-titulo" class="centrar-texto FW-300">Equipos Portatiles</h2>
         <div class="contenedor-planes">

            <div class="plan-hogar">
                <img src="img/mantenimiento.jpg" alt="Adquiere Equipos">
                <div class="contenido-plan">
                <?php
                    try{
                        require_once("includes/funciones/BD_conexion.php");
                        $sql = "SELECT * FROM equipo where id=1";
                        $resultado = $conn->query($sql);
                    }catch (\Exception $e){
                        echo $e->getMessage();
                    }
                    
                        $Equipo =$resultado->fetch_assoc();
                ?>
                <div class="descripcion-plan">
                    <h2><?php echo $Equipo['modelo']?></h2>
                    <p>Perifericos: <?php echo $Equipo['perifericos']?></p>
                    <p>CPU: <?php echo $Equipo['cpu']?></p>
                    <p>RAM: <?php echo $Equipo['ram']?></p>
                    <p>GPU: <?php echo $Equipo['grafica']?></p>
                    <p>Resolucion: <?php echo $Equipo['resolucion']?></p>
                    <h3 class="precio">$<?php echo $Equipo['costo']?></h3>
                    <a href="#" class="boton boton-azul Dblock">Rentar</a>
                </div>
                </div>
            </div>

            <div class="plan-hogar">
                <img src="img/mantenimiento.jpg" alt="Adquiere Equipos">
                <div class="contenido-plan">
                <?php
                    try{
                        $sql = "SELECT * FROM equipo where id=2";
                        $resultado = $conn->query($sql);
                    }catch (\Exception $e){
                        echo $e->getMessage();
                    }
                    
                        $Equipo =$resultado->fetch_assoc();
                ?>
                <div class="descripcion-plan">
                    <h2><?php echo $Equipo['modelo']?></h2>
                    <p>Perifericos: <?php echo $Equipo['perifericos']?></p>
                    <p>CPU: <?php echo $Equipo['cpu']?></p>
                    <p>RAM: <?php echo $Equipo['ram']?></p>
                    <p>GPU: <?php echo $Equipo['grafica']?></p>
                    <p>Resolucion: <?php echo $Equipo['resolucion']?></p>
                    <h3 class="precio">$<?php echo $Equipo['costo']?></h3>
                    <a href="#" class="boton boton-azul Dblock">Rentar</a>
                </div>
                </div>
            </div>

            <div class="plan-hogar">
                <img src="img/mantenimiento.jpg" alt="Adquiere Equipos">
                <div class="contenido-plan">
                <?php
                    try{
                        $sql = "SELECT * FROM equipo where id=3";
                        $resultado = $conn->query($sql);
                    }catch (\Exception $e){
                        echo $e->getMessage();
                    }
                    
                        $Equipo =$resultado->fetch_assoc();
                ?>
                <div class="descripcion-plan">
                    <h2><?php echo $Equipo['modelo']?></h2>
                    <p>Perifericos: <?php echo $Equipo['perifericos']?></p>
                    <p>CPU: <?php echo $Equipo['cpu']?></p>
                    <p>RAM: <?php echo $Equipo['ram']?></p>
                    <p>GPU: <?php echo $Equipo['grafica']?></p>
                    <p>Resolucion: <?php echo $Equipo['resolucion']?></p>
                    <h3 class="precio">$<?php echo $Equipo['costo']?></h3>
                    <a href="#" class="boton boton-azul Dblock">Rentar</a>
                </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contenedor seccion">
        <h2  id="seccion-titulo" class="centrar-texto FW-300">Equipos de Escritorio</h2>
         <div class="contenedor-planes">

         <div class="plan-hogar">
                <img src="img/mantenimiento.jpg" alt="Adquiere Equipos">
                <div class="contenido-plan">
                <?php
                    try{
                        $sql = "SELECT * FROM equipo where id=4";
                        $resultado = $conn->query($sql);
                    }catch (\Exception $e){
                        echo $e->getMessage();
                    }
                    
                        $Equipo =$resultado->fetch_assoc();
                ?>
                <div class="descripcion-plan">
                    <h2><?php echo $Equipo['modelo']?></h2>
                    <p>Perifericos: <?php echo $Equipo['perifericos']?></p>
                    <p>CPU: <?php echo $Equipo['cpu']?></p>
                    <p>RAM: <?php echo $Equipo['ram']?></p>
                    <p>GPU: <?php echo $Equipo['grafica']?></p>
                    <p>Resolucion: <?php echo $Equipo['resolucion']?></p>
                    <h3 class="precio">$<?php echo $Equipo['costo']?></h3>
                    <a href="#" class="boton boton-azul Dblock">Rentar</a>
                </div>
                </div>
            </div>

            <div class="plan-hogar">
                <img src="img/mantenimiento.jpg" alt="Adquiere Equipos">
                <div class="contenido-plan">
                <?php
                    try{
                        $sql = "SELECT * FROM equipo where id=5";
                        $resultado = $conn->query($sql);
                    }catch (\Exception $e){
                        echo $e->getMessage();
                    }
                    
                        $Equipo =$resultado->fetch_assoc();
                ?>
                <div class="descripcion-plan">
                    <h2><?php echo $Equipo['modelo']?></h2>
                    <p>Perifericos: <?php echo $Equipo['perifericos']?></p>
                    <p>CPU: <?php echo $Equipo['cpu']?></p>
                    <p>RAM: <?php echo $Equipo['ram']?></p>
                    <p>GPU: <?php echo $Equipo['grafica']?></p>
                    <p>Resolucion: <?php echo $Equipo['resolucion']?></p>
                    <h3 class="precio">$<?php echo $Equipo['costo']?></h3>
                    <a href="#" class="boton boton-azul Dblock">Rentar</a>
                </div>
                </div>
            </div>

            <div class="plan-hogar">
                <img src="img/mantenimiento.jpg" alt="Adquiere Equipos">
                <div class="contenido-plan">
                <?php
                    try{
                        $sql = "SELECT * FROM equipo where id=6";
                        $resultado = $conn->query($sql);
                    }catch (\Exception $e){
                        echo $e->getMessage();
                    }
                    
                        $Equipo =$resultado->fetch_assoc();
                ?>
                <div class="descripcion-plan">
                    <h2><?php echo $Equipo['modelo']?></h2>
                    <p>Perifericos: <?php echo $Equipo['perifericos']?></p>
                    <p>CPU: <?php echo $Equipo['cpu']?></p>
                    <p>RAM: <?php echo $Equipo['ram']?></p>
                    <p>GPU: <?php echo $Equipo['grafica']?></p>
                    <p>Resolucion: <?php echo $Equipo['resolucion']?></p>
                    <h3 class="precio">$<?php echo $Equipo['costo']?></h3>
                    <a href="#" class="boton boton-azul Dblock">Rentar</a>
                </div>
                </div>
            </div>
        </div>
    </section>
<?php include_once "includes/templates/footer.php";?>
</body>
</html>
