<?php
    include "dbconnect.php";
	
	if($_POST)
	{
		mysqli_select_db($conn,"a1653851_automar");
		
		$newfname	= $_POST['fname'];
		$newlname	= $_POST['lname'];
		$newgender	= $_POST['gender'];
		$newemail	= $_POST['email'];
		$newpassword= $_POST['password'];
		

		$sql ="INSERT INTO user(fname, lname, email,  gender, password)
				VALUES('$newfname','$newlname','$newemail','$newgender','$newpassword')";
				
		$result= mysqli_query($conn,$sql);
		
		if(!$result)
		{
			die("Error: ".mysqli_error($conn));
		}
		echo "Welcome to Automart, ".$newfname."!";
		echo "<br><a href='postAd.html'>Post an Ad NOW!</a>";
	}
?>