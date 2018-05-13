<?php
	#connect to mysql database
	$db = mysqli_connect("studentdb-maria.gl.umbc.edu","adsouza1","adsouza1","adsouza1");

	if (mysqli_connect_errno())
		exit("Error - could not connect to MySQL");

	#get the parameter from the HTML form that this PHP program is connected to
	#since data from the form is sent by the HTTP POST action, use the $_POST array here

	$cust_fname = $_POST['FirstName'];
	$cust_lname = $_POST['LastName'];
	$cust_username = $_POST ['Username'];
	$cust_password = $_POST ['Password'];
	$cust_address = $_POST['Address1'];
	$cust_city = $_POST['City'];
	$cust_state = $_POST['State'];
	$cust_phone = $_POST['CellPhone'];
	$cust_email = $_POST ['EmailAddress' ];
	$cust_occupation = $_POST ['Occupation' ];
	




	#construct a query
	#query should look like this: 
	
	#"select * from cars where car_name='accord';"
	

	$constructed_query = "Insert INTO Customer (cust_name, cust_lname, cust_username , cust_password, cust_address ,cust_city, cust_state ,cust_phone , cust_email
	,cust_occupation) VALUES ('$cust_fname', '$cust_lname','$cust_username','$cust_password', '$cust_address','$cust_city','$cust_state', '$cust_phone' , '$cust_email','$cust_occupation' )";
						  
	
	$result = mysqli_query($db, $constructed_query);

	


	#if result object is not returned, then print an error and exit the PHP program
	if(! $result){
		print("Error - query could not be executed");
		$error = mysqli_error();
		print "<p> . $error . </p>";
		exit;
	}
header('Location: RockCreekLogin.php');
exit;

	?>
