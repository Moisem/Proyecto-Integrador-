<!DOCTYPE html>
<html lang="es-MX">
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
<body class="fondo-body">
    <header class="contenido-header-secundario">
        <div class="contenedor-header">
            <div class="menu">
                <div id="logo">
                    <a href="index.php">
                        <img src="img/Logo.png"Logotipo">
                    </a>
                </div>
                <nav class="navegacion">
                    <a href="planes.php">Planes</a>
                    <a href="equipos.php">Equipos</a>
                    <a href="gaming.php">Gaming</a>
                    <a href="contacto.php">Contacto</a>
                </nav>
                <div class="navegacion-usuario menu navegacion">
                    <a href="area_de_clientes.php" class="icon-user">Area de Clientes</a>
                    <?php 
                        if(empty($_SESSION['id'])){
                            echo "<a href='inicio_sesion.php' class='boton-registrate'>Ingresar</a>";  
                        }
                        else {
                            echo "<div class='menu_perfil'>";
                                    echo $_SESSION['nombre'].' '.$_SESSION['apellido_paterno'];
                                    echo "<ul class='menu_perfil_opciones'>";
                                        echo "<li><a href='direccion.php'>Direcciones de envio</a></li>";
                                        echo "<li><a href='includes/funciones/cerrar_sesion.php'>Cerrar Sesion</a></li>";
                                    echo "</ul>";
                            echo "</div>";
                        }    
                        ?>
                </div>
            </div>
        </div>
    </header>