<?php

    session_start();
    include "dbconnect.php";
	
	if($_POST)
	{
		mysqli_select_db($conn,"a1653851_automar");
		
		$newemail		= $_POST['email'];
		$newpassword	= $_POST['password'];
		
		$sql = "SELECT password FROM user WHERE email='$newemail'";
		$result = mysqli_query($conn,$sql);
		$row=mysqli_fetch_array($result);
		
		if(!$result)
		{
			die("Error: ".mysqli_error($conn));
		}
		
		else if($row['password']==$newpassword)
		{
			$idname= mysqli_query($conn,"SELECT fname FROM user WHERE email='$newemail'");
			$row1=mysqli_fetch_array($idname);
  			
  			$_SESSION["name"]=$row1['fname'];
			$_SESSION["email"]=$newemail;
			
/*
			echo "Welcome, ".$row1['fname']."!";
			echo "<br><a href='myads.php?".$newemail."'>View My ads</a>";
*/

                        header('Location: myads.php');
                        
		}
		
		else 
		{
			echo "Wrong email or password!";
		}
	}
?>