<?php
include_once "includes/funciones/validar_sesion.php";
include_once "includes/templates/header_secundario.php";
?>
<?php
    if (isset($_GET['info']) && !empty($_GET['info'])) { 
        $_GET['info'] = htmlentities($_GET['info']);
        echo '<div class="alert alert-warning" role"alert">';
        echo $_GET['info'];
        echo'</div>';              
        }
?>
<main class="contenedor">
       <h1 class="centrar-texto titulo">Area de clientes</h1>
</main>
<div class="area_clientes contenedor">
    <nav class="area_clientes_cabecera contenedor">
        <a href="historial_de_pedidos.php" target="cliente">Historial de Pedidos</a>
        <a href="administrador_de_servicios.php" target="cliente">Administrador de Servicios</a>
    </nav>
    <div class="area_clientes_contenido contenedor">
    <iframe src="ayuda.php" style="width: 100%; height: 100%" name="cliente"  border="0" frameborder="0"></iframe>
    </div>
</div>
</body>
</html>
<?php
ob_end_flush();
?>