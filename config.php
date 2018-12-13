<?php
	//file congif.php
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$database = "db_qlcb";
	$conn = mysqli_connect($hostname, $username, $password, $database);
	if (!$conn) {
		 die('connect error');
	}
	mysqli_set_charset($conn, "UTF8");
?>