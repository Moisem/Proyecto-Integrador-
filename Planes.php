<?php include_once "includes/templates/header_terciario.php";?>

   <main class="contenedor">
       <div class="contenedor-planes">
        <div class="plan-hogar">
        <h2>Plan Hogar</h2>
            <img src="img/plan_hogar.png" alt="Adquiere Equipos">
            <div class="contenido-plan">
                    <div class="descripcion-plan">
                        <p>1 Equipo Portatil HP Basics:</p>
                        <p>- 4 GB RAM</p>
                        <p>- Intel Celeron 2.4Gz</p>
                        <p>- Intel HD Graphics</p>
                        <p>1 Impresora Blanco/negro</p>
                        <p>1 Lector de discos externo</p>
                        <p>1 Audifonos Sony</p>
                    </div>
                <h3 class="precio">Desde $439/mes</h3>
                <form action="pedido.php" method="post">
                    <input type="hidden" name="id" id="id" value="1">
                    <input type="hidden" name="nombre" id="nombre" value="Plan Hogar">
                    <input type="hidden" name="costo" id="costo" value="439">
                    <input type="submit" value="Rentar" class="boton boton-azul DBlock" name="boton_rentar">
                </form>
            </div>
        </div>

        <div class="plan-gaming">
        <h2>Plan Gamer</h2>
            <img src="img/plan_gamer.png" alt="Adquiere Equipos">
            <div class="contenido-plan">
                    <div class="descripcion-plan-gaming">
                        <p>1 Pc Gaming Basics: </p>
                        <p>- 8GB RAM</p>
                        <p>- Ryzen 5</p>
                        <p>- 2GB GPU</p>
                        <p>Perifericos RGB </p>
                        <p>1 Monitor HD 1920x1360</p>
                        <p>1 Silla Gamer </p>
                    </div>
                <h3 class="precio">Desde 1500/mes</h3>
                <form action="pedido.php" method="post">
                    <input type="hidden" name="id" id="id" value="2">
                    <input type="hidden" name="nombre" id="nombre" value="Plan Gaming">
                    <input type="hidden" name="costo" id="costo" value="1500">
                    <input type="submit" value="Rentar" class="boton boton-azul DBlock" name="boton_rentar">
                </form>
            </div>
        </div>

        <div class="plan-empresarial">
        <h2>Plan Empresarial</h2>
        <img src="img/plan_empresarial.png" alt="Adquiere Equipos">
            <div class="contenido-plan">
                    <div class="descripcion-plan-empresarial">
                        <p>5 Equipos Bussines Basics: </p>
                        <p>- 8GB RAM</p>
                        <p>- AMD Ryzen 3</p>
                        <p>- 1GB GPU</p>
                        <p>5 Escritorios para Equips</p>
                        <p>5 NoBreak</p>
                        <p>5 Proyectores</p>
                    </div>
                <h3 class="precio">Desde $5000/mes</h3>
                <form action="pedido.php" method="post">
                    <input type="hidden" name="id" id="id" value="3">
                    <input type="hidden" name="nombre" id="nombre" value="Plan Empresarial">
                    <input type="hidden" name="costo" id="costo" value="5000">
                    <input type="submit" value="Rentar" class="boton boton-azul DBlock" name="boton_rentar">
                </form>
            </div>
        </div>
   </main>
</body>
</html>
<?php
ob_end_flush();
?>