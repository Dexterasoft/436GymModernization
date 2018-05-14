<?php	
	
	$host="studentdb-maria.gl.umbc.edu"; // Host name 
	$username="albabe1"; // Mysql username 
	$password="albabe1"; // Mysql password 
	$db_name="albabe1"; // Database name 
	$tbl_name="albabe1"; // Table name 
	
	//Connects to the database server using the hard-coded variables.
	
	$conn = new mysqli($host, $username, $password, $db_name);
	
	//Error message.
	
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	
	//checking that this file is included in the index.php file.
	echo ".";
	
?>