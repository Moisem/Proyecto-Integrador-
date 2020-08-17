<?php
    $conn = new mysqli('localhost', 'root', '', 'abysmaledge'/*'localhost', 'id14597175_admin', '0u9@[63ns&6%Mr$^', 'id14597175_abysmaledge'*/);
        if($conn->connect_error){
            echo $error -> $conn->connect_error;
        }
?>