<?php

	$servername = "mysql6.000webhost.com";
	$username = "a1653851_madhawa";
	$password = "powershot13";
	
	// Create connection
	$conn = mysqli_connect($servername, $username, $password);
	
	// Check connection
	if (!$conn) 
	{
	    die("Connection failed: " . mysqli_connect_error());
	}
	
	//echo "Connected successfully";

?>