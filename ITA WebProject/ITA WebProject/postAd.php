<?php
    include "dbconnect.php";
	
	if($_POST)
	{
		mysqli_select_db($conn,"automart");
		
		$newmake		= $_POST['make'];
		$newmodel		= $_POST['model'];
		$newyear		= $_POST['year'];
		$newstatus		= $_POST['status'];
		$newtransmition	= $_POST['transmition'];
		$newmilage		= $_POST['milage'];
		$newbodytype	= $_POST['bodytype'];
		$newprice		= $_POST['price'];
		$newemail		= $_POST['email'];
		$newpassword	= $_POST['password'];
		$image			= $_POST['image'];
		
		//getting the u_id
		$sql = "SELECT password FROM user WHERE email='$newemail'";
		$password = mysqli_query($conn,$sql);
		$row=mysqli_fetch_array($password);
		
		if($row['password']==$newpassword)
		{
			$sql ="INSERT INTO car(email,make,model,year,status,transmision,milage,bodytype,price,image) 
				   VALUES('$newemail','$newmake','$newmodel','$newyear','$newstatus','$newtransmition','$newmilage','$newbodytype','$newprice','$image')";
					
			$result= mysqli_query($conn,$sql);
			
			if(!$result)
			{
				die("Error: ".mysqli_error($conn));
			}
			echo "Your car is successfully posted!";
			echo "<br><a href='index.php'>Back to Home page</a>";
		}
		else 
			{
				echo " Wrong email or password!";
			}
	}
?>