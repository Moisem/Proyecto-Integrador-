<?php
  $db_host = 'localhost';
  $db_name = 'abysmaledge';
  $db_user = 'root';
  $db_pass = '';

  $fecha = date("Y/m/d-H:i:s");

  $salida_sql = $db_name."_".$fecha.".sql";

  $dump = "C:\xampp\mysql\bin\mysqldump --no-defaults -h$db_host -u$db_user -p$db_pass --opt $db_name > $salida_sql";

  system($dump, $output);
?>