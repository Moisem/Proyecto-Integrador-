<?php
    if(! (filter_has_var(input_post, 'nombre') &&
    (strlen(filter_input(input_post, 'nombre')) >0 ))){
         echo "El nombre es obligatorio";
     }
     if(! (filter_has_var(input_post, 'ap_paterno') &&
    (strlen(filter_input(input_post, 'ap_paterno')) >0 ))){
        echo "Los Apellidos son obligatorios";
    }
    if(! (filter_has_var(input_post, 'ap_materno') &&
    (strlen(filter_input(input_post, 'ap_materno')) >0 ))){
        echo "Los Apellidos son obligatorios";
    }
?>