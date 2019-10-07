<?php 
$servername="localhost";
$username="id4758338_db_portal"; 
$password="password";
$database="id4758338_db_portal";
$conn= mysqli_connect($servername, $username, $password, $database);

		if (mysqli_connect_error()){
		die ("connection_failed: " .mysqli_connect_error());
		}
		echo "" ."</br>";
?>