<!DOCTYPE html>

<title>
	AutoMart-The Best Online Vehical Store in Sri Lanka
</title>

<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="style2.css">
	<style>
		.amount
		{
			display:inline;
		}
		.btn
		{
			float:left;
			font-family:Arial;
			color:white;
			background-color:limegreen;
			text-align:center;
		}

		.btn:hover:not(.active)
		{
			background-color:lime;
			color:white;
		}
	</style>
	
</head>

<body>
	
	<div id="navbar">	
	</div>
		<div class="container">		
			<ul class="navigationBar">
				<div id="logoArea">
					<li class="logo"><a href="index.html" style="font-family:logo;font-size:30px;">AutoMart</a></li>
				</div>
				<div id="navArea">
					<li class="nav"><a class="active" href="index.html">Home</a></li>
					<li class="nav"><a href="findAd.php">Find a Car</a></li>
					<li class="nav"><a href="login.html">Login</a></li>
					<li class="nav"><a href="postAd.html">Post your Ad</a></li>	
					<li class="nav"><a href="aboutUs.html">About Us</a></li>
					<li class="nav"><a href="contactUs.html">Contact Us</a></li>
				</div>
			</ul>
		
			
			<br><br><br>
			<img class="header" src="header/header.jpg" alt="Norway" width="1000" height="300">
		
			<br><br>
		
			<div id="basicSidebar">
				<img src="gif/giphy.gif" width="360px" style="text-align:center;"><br>
				<img src="gif/gifs.gif" width="360px" style="text-align:center;"><br>
				<img src="gif/gif3.gif" width="360px" style="text-align:center;">
				
			</div>
			<div id="main">
				
				<h3>Please fill in the following billing details to proceed.</h3>
				<hr>
				<h6>0.3% of from the total price must be paid to reserve your car.</h6>
				<?php
					include "dbconnect.php";
					
					$newid = $_SERVER['QUERY_STRING'];
					mysqli_select_db($conn,"automart");
					$sql = "SELECT * FROM car WHERE c_id='$newid'";
					$result=mysqli_query($conn,$sql);
					$carRow = mysqli_fetch_array($result);
					
					echo "<br>";
					echo "<h3 class='amount'>Amount  : Rs. </h3>"."<h2 class='amount' style='color:limegreen;'>".($carRow['price']/1000*3).".00"."</h2>";
					echo "<br><br>";
					
					echo "<h3>Billing Details</h3>";
					echo "<hr>";
					
					echo "<form name='form4' method='post' action=purchaseBtn.php?".$newid.">";
					echo "<table>";
					echo "<tr>";
					echo "<td>Credit card No.:</td>";
					echo "<td>"."<input type='text' name='cardNo'>"."</td>";
					echo "</tr>";
					
					echo "<tr>";
					echo "<td>Code:</td>";
					echo "<td><input type='text' name='code'></td>";
					echo "</tr>";
					
					echo "<tr>";
					echo "<td>Expire date:</td>";
					echo "<td><input type='text' name='expDate'></td>";
					echo "</tr>";
					
					echo "<tr>";
					echo "<td>E-mail:</td>";
					echo "<td><input type='text' name='email'></td>";
					echo "</tr>";
					echo "</table>";
					
					echo "<table>";
					echo "<tr>";
					echo "<td style='width:338px;'><input style='float:right;' class='btn' type='submit' name='confirm' value='Confirm'></td>";
					echo "</tr>";
					echo "</table>";
					echo "<?form>";
					
					
				?>
			</div>
		</div>
		
		<footer id="footer" style="float:right; width:100%;">
			<div class="container">
				<br><br>
				<p class="foot" style="margin-left:350px;">Copyright  © </p><p class="foot" style="font-family:'logo';"> AutoMart</p><p class="foot"> , 2016 - All Right Reserved.</p>
			</div>
		</footer>
		
</body>
