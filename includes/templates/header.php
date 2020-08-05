<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/iconos.css">
    <link rel="stylesheet" href="css/normalice.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Press+Start+2P&display=swap" rel="stylesheet">
    <title>Abysmal Edge</title>
</head>
<body >
    <header  class="header inicio contenido-header">
        <div class="contenedor-header">
            <div class="menu">
                <div id="logo">
                    <a href="index.php">
                        <img src="img/Logo.png" alt="Logotipo">
                    </a>
                </div>
                <nav class="navegacion">
                    <a href="planes.php">Planes</a>
                    <a href="equipos.php">Equipos</a>
                    <a href="gaming.php">Gaming</a>
                    <a href="ayuda.php">Ayuda</a>
                    <a href="contacto.php">Contacto</a>
                </nav>
                <div class="navegacion-usuario menu navegacion">
                    <a href="#" class="icon-user">Area de Clientes</a>
                    <?php 
                        session_start();
                        if(empty($_SESSION['id'])){
                            echo "<a href='inicio_sesion.php' class='boton-registrate'>Ingresar</a>";  
                        }
                        else {
                            echo $_SESSION['nombre'].' '.$_SESSION['apellido_paterno'];
                        }    
                    ?>
                </div>
            </div>
        </div>