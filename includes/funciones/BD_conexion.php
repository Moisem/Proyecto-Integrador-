<?php
    $conn = new mysqli('localhost', 'root', '', 'abysmaledge');
        if($conn->connect_error){
            echo $error -> $conn->connect_error;
        }
?>