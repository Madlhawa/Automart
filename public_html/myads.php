<?php
        session_start();
?>

<!DOCTYPE html>

<title>
	AutoMart-The Best Online Vehical Store in Sri Lanka
</title>

<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		#data
			{
				margin-left:70px;
			}
		td.data
			{
				text-align:left;
				width:200px
			}
		.btn
			{
				margin-left:124px;
				height:40px;	
				width:120px;
				background-color:#990000;
				border:0;
				color:white;
			}
		.btn:hover
			{
				background-color:silver;
				color:maroon;
			}
		a.data
		{
			font-family:Arial;
			display:block;
			color:white;
			background-color:limegreen;
			text-align:center;
			padding:14px 16px;
			text-decoration:none;
		}

		a.data:hover:not(.active)
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
		
			
			<div id="sidebar">

				<img src="gif/giphy.gif" width="360px" style="text-align:center;"><br>
				<img src="gif/gifs.gif" width="360px" style="text-align:center;"><br>
				<img src="gif/gif3.gif" width="360px" style="text-align:center;">
			</div>
			<div id="main" style="background-color:white;">
			<?php
				include "dbconnect.php";
				
				$newemail = $_SESSION["email"];
				mysqli_select_db($conn,"a1653851_automar");
				$sql="SELECT * FROM car where email like '%$newemail%'";
				$result= mysqli_query($conn,$sql);
				
				while($row=mysqli_fetch_array($result))
				{
					echo "<br><br>";
					echo "<h3 style='margin-left:50px;'>".$row['make']."  ".$row['model']."</h3>";
					echo "<table id='data'>";
						echo "<tr>";
							echo "<td class='data'><b>Year :</b></td>";
							echo "<td class='data'>".$row['year']."</td>";
							echo "<td class='data'><b>Condition :</b></td>";
							echo "<td class='data'>".$row['status']."</td>";
						echo "</tr>";
						
						echo "<tr>";
							echo "<td class='data'><b>Transmision :</b></td>";
							echo "<td class='data'>".$row['transmision']."</td>";
							echo "<td class='data'><b>Milage :</b></td>";
							echo "<td class='data'>".$row['milage']."</td>";
						echo "</tr>";
						echo "<tr>";
							echo "<td class='data'><b>Body type :</b></td>";
							echo "<td class='data'>".$row['bodytype']."</td>";
						echo "</tr>";
						
						echo "<tr>";
							echo "<td class='data'><b>Price :</b></td>";
							echo "<td class='data' style='color:green;'>Rs.".$row['price'].".00</td>";
						echo "</tr>";
						echo "<tr>";
							echo "<td class='data'>"."<a class='data' href=edit.php?".$row['c_id'].">EDIT</a></td>";
							echo "<td class='data'>"."<a class='data' href=delete.php?".$row['c_id'].">DELETE</a></td>";
						echo "</tr>";
					echo "</table>";
					echo "<br>";
					echo "<hr style='width:90%;margin-left:32px;'>";
					}

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