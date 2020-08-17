<?php	
  $servername = "localhost";
  $username = "root";
  $password = "";
  //Crear Conexion con MYSQL
  $conn = new mysqli($servername, $username, $password);
  //Comprobar la Conexión
  if ($conn->connect_error) {
	  die("Fallo de Conexión: " . $conn->connect_error);
  } 
  //Crear base de datos
  $sql = "CREATE DATABASE abysmaledge";
  if ($conn->query($sql) === TRUE) {
	  echo "Base de Datos Creada.";
  } else {
	  echo "Error al Crear la Base de Datos:". $conn->error;
  }
  //Cerrar Conexión
  $conn->close();
IMPORT_TABLES('localhost','root','','abysmaledge', 'C:\Users\madri\Downloads\abysmaledge___(08-38-28_17-08-2020).sql');
	// EXAMPLE:	IMPORT_TABLES("localhost","user","pass","db_name", "my_baseeee.sql"); //TABLES WILL BE OVERWRITTEN
				// P.S. IMPORTANT NOTE for people who try to change/replace some strings  in SQL FILE before importing, MUST READ:  https://github.com/ttodua/useful-php-scripts/blob/master/my-sql-export%20(backup)%20database.php

// https://github.com/ttodua/useful-php-scripts 
function IMPORT_TABLES($host,$user,$pass,$dbname, $sql_file_OR_content){
	set_time_limit(3000);
	$SQL_CONTENT = (strlen($sql_file_OR_content) > 300 ?  $sql_file_OR_content : file_get_contents($sql_file_OR_content)  );  
	$allLines = explode("\n",$SQL_CONTENT); 
	$mysqli = new mysqli($host, $user, $pass, $dbname); if (mysqli_connect_errno()){echo "Failed to connect to MySQL: " . mysqli_connect_error();} 
		$zzzzzz = $mysqli->query('SET foreign_key_checks = 0');	        preg_match_all("/\nCREATE TABLE(.*?)\`(.*?)\`/si", "\n". $SQL_CONTENT, $target_tables); foreach ($target_tables[2] as $table){$mysqli->query('DROP TABLE IF EXISTS '.$table);}         $zzzzzz = $mysqli->query('SET foreign_key_checks = 1');    $mysqli->query("SET NAMES 'utf8'");	
	$templine = '';	// Temporary variable, used to store current query
	foreach ($allLines as $line)	{											// Loop through each line
		if (substr($line, 0, 2) != '--' && $line != '') {$templine .= $line; 	// (if it is not a comment..) Add this line to the current segment
			if (substr(trim($line), -1, 1) == ';') {		// If it has a semicolon at the end, it's the end of the query
				if(!$mysqli->query($templine)){ print('Error performing query \'<strong>' . $templine . '\': ' . $mysqli->error . '<br /><br />');  }  $templine = ''; // set variable to empty, to start picking up the lines after ";"
			}
		}
	}	return 'Importing finished. Now, Delete the import file.';
}   //see also export.php 
?>