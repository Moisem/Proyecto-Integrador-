<?php
    session_start();
    if(empty($_SESSION['id'])){
        header('Location: admin_area.php');
    }
    if(empty($_SESSION['rango'])){
        header('Location: admin_area.php?info="Debes tener una cuenta administrador"');
    }
?>