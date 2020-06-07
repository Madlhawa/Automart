<?php
    include "dbconnect.php";
	
	if($_POST)
	{
		$carid		= $_SERVER['QUERY_STRING'];
		
		$sql = "DELETE from car WHERE c_id='$carid";
		$result = mysqli_query($conn,$sql);
		
		if(!$result)
		{
			die("Error: ".mysqli_error($conn));
		}
	}
?>