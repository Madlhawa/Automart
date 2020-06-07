<?php
    include "dbconnect.php";
	
	if($_POST)
	{
		$carid=$_GET['varid'];
		
		
		mysqli_select_db($conn,"a1653851_automar");
		
		$newmake		= $_POST['make'];
		$newmodel		= $_POST['model'];
		$newyear		= $_POST['year'];
		$newstatus		= $_POST['status'];
		$newtransmition	= $_POST['transmition'];
		$newmilage		= $_POST['milage'];
		$newbodytype	= $_POST['bodytype'];
		$newprice		= $_POST['price'];
		$carid			= $_SERVER['QUERY_STRING'];
		
		//getting the u_id
		$sql = "UPDATE car 
				SET make='$newmake', model='$newmodel', year='$newyear', status='$newstatus', transmision='$newtransmition', milage='$newmilage', bodytype='$newbodytype', price='$newprice'
				WHERE c_id='$carid'";
		
		$result = mysqli_query($conn,$sql);
		
		if(!$result)
		{
			die("Error: ".mysqli_error($conn));
		}
		header ("myads.php");
	}
?>