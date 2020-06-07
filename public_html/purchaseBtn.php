<?php
    include "dbconnect.php";
	
	mysqli_select_db($conn,"automart");
	
	$cardNo = $_POST['cardNo'];
	$code = $_POST['code'];
	$expDate = $_POST['expDate'];
	$email = $_POST['email'];
	$carid = $_SERVER['QUERY_STRING'];
	//echo "carid=".$carid."<br>";
	
	$sql="SELECT price FROM car WHERE c_id='$carid'";
	$result=mysqli_query($conn,$sql);
	
	$row=mysqli_fetch_array($result);
	
	$amount=$row['price']/1000*3;
	//echo "amount=".$amount."<br>";
	
	$input="INSERT INTO purchase(email,c_id,cardNO,expireDate,code,amount)
			VALUES('$email','$carid','$cardNo','$expDate','$code','$amount')";
	
	$submit=mysqli_query($conn, $input);
	
	if(!$result)
	{
		die("Error: ".mysqli_error($conn));
	}
	else 
	{
		echo "Rs. ".$amount." has been transfered.";
	}
?>