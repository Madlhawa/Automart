<?php
    include "dbconnect.php";
	
	if($_POST)
	{
		mysqli_select_db($conn,"automart");
		
		$newemail		= $_POST['email'];                                                                                                        
		$newpassword	= $_POST['password'];
		
		$sql = "SELECT password FROM user WHERE email='$newemail'";
		$password = mysqli_query($conn,$sql);
		$row=mysqli_fetch_array($password);
		
		if(!$password)
		{
			die("Error: ".mysqli_error($conn));
		}
		
		else if($row['password']==$newpassword)
		{
			$sql="SELECT fname FROM user WHERE email='$newemail'";
			$idname= mysqli_query($conn,$sql);
			$row1=mysqli_fetch_array($idname);
  			
  			$_SESSION["name"]=$row1['fname'];
			$_SESSION["email"]=$newemail;
			
			echo "Welcome, ".$row1['fname']."!";
			echo "<a href='myads.php?".$newemail."'>Viwe My ads</a>";
		}
		
		else 
		{
			echo "Wrong email or password!";
		}
	}
?>