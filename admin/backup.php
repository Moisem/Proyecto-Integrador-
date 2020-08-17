<?php
	//include our function
	include 'funcionbackup.php';

	if(isset($_POST['backup'])){
		//get credentails via post
		$server = $_POST['server'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$dbname = $_POST['dbname'];

		//backup and dl using our function
		backDb($server, $username, $password, $dbname);

		exit();
		
	}
	else{
		echo 'Rellena las credenciales de la base de datos';
	}

?>