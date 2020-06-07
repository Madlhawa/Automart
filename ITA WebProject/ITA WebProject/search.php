
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
				<h3 style="color:white;margin:5px;text-align:center;">Find the perfect car for you</h3>
				<form name="form5" method="post" action="search.php">
				<table id="form">
					<tr>
						<td><select class="search" value="Make">
								<option>Make</option>
								<option value='Acura' data-key='acura'>Acura</option>
								<option value='Audi' data-key='audi'>Audi</option>
								<option value='BMW' data-key='bmw'>BMW</option>
								<option value='Cadillac' data-key='cadillac'>Cadillac</option>
								<option value='Chevrolet' data-key='chevrolet'>Chevrolet</option>
								<option value='Chrysler' data-key='chrysler'>Chrysler</option>
								<option value='Dodge' data-key='dodge'>Dodge</option>
								<option value='Ford' data-key='ford'>Ford</option>
								<option value='GMC' data-key='gmc'>GMC</option>
								<option value='Honda' data-key='honda'>Honda</option>
								<option value='Hyundai' data-key='hyundai'>Hyundai</option>
								<option value='Infiniti' data-key='infiniti'>Infiniti</option>
								<option value='Jaguar' data-key='jaguar'>Jaguar</option>
								<option value='Jeep' data-key='jeep'>Jeep</option>
								<option value='KIA' data-key='kia'>KIA</option>
								<option value='Land Rover' data-key='land-rover'>Land Rover</option>
								<option value='Lexus' data-key='lexus'>Lexus</option>
								<option value='Lincoln' data-key='lincoln'>Lincoln</option>
								<option value='Maserati' data-key='maserati'>Maserati</option>
								<option value='Mazda' data-key='mazda'>Mazda</option>
								<option value='Mercedes-Benz' data-key='mercedes-benz'>Mercedes-Benz</option>
								<option value='Nissan' data-key='nissan'>Nissan</option>
								<option value='Porsche' data-key='porsche'>Porsche</option>
								<option value='Subaru' data-key='subaru'>Subaru</option>
								<option value='Tesla' data-key='tesla'>Tesla</option>
								<option value='Toyota' data-key='toyota'>Toyota</option>
								<option value='Volkswagen' data-key='volkswagen'>Volkswagen</option>
								<option value='Volvo' data-key='volvo'>Volvo</option>
						</select></td>
					</tr>
					<tr>
						<td><select class="search" value="year">
								<option>Year</option>
								<option value="2016">2016</option>
								<option value="2015">2015</option>
								<option value="2014">2014</option>
								<option value="2013">2013</option>
								<option value="2012">2012</option>
								<option value="2011">2011</option>
								<option value="2010">2010</option>
								<option value="2009">2009</option>
								<option value="2008">2008</option>
								<option value="2007">2007</option>
								<option value="2006">2006</option>
								<option value="2005">2005</option>
								<option value="2004">2004</option>
								<option value="2003">2003</option>
								<option value="2002">2002</option>
								<option value="2001">2001</option>
								<option value="2000">2000</option>
								<option value="1999">1999</option>
								<option value="1998">1998</option>
								<option value="1997">1997</option>
								<option value="1996">1996</option>
								<option value="1995">1995</option>
								<option value="1994">1994</option>
								<option value="1993">1993</option>
								<option value="1992">1992</option>
								<option value="1991">1991</option>
								<option value="1990">1990</option>
								<option value="1989">1989</option>
								<option value="1988">1988</option>
								<option value="1987">1987</option>
								<option value="1986">1986</option>
								<option value="1985">1985</option>
								<option value="1984">1984</option>
								<option value="1983">1983</option>
								<option value="1982">1982</option>
								<option value="1981">1981</option>
								<option value="1980">1980</option>
							</select></td>
						</tr>
						<tr>
							<td><select class="search">
								<option>Condition</option>
								<option value="Used">Used</option>
								<option value="New">New</option>
								<option value="Reconditioned">Reconditioned</option>
							</select></td>
						</tr>
						<tr>
							<td>
								<select class="search">
									<option>Transmition</option>
									<option value="automatic">Automatic</option>
									<option value="manual">Manual</option>
									<option value="tiptronic">Tiptronic</option>
								</select>
							</td>
						</tr>
				
					<tr>
						<td>
							<input class="formvalues" type="text" id="minMilage" value="Min-Milage" >
							to
							<input class="formvalues" type="text" id="maxMilage" value="Max-Milage" >
						</td>
					</tr>
					
					<tr>
						<td>
							<input class="formvalues" type="text" id="minPrice" value="Min-Price" >
							to
							<input class="formvalues" type="text" id="maxPrice" value="Max-Price" >
						</td>
					</tr>
					<tr>
						<td>
							<input type="submit" id="findbtn" value="Find Vehicle">
						</td>
					</tr>
				</table>
				</form>
				<img src="gif/giphy.gif" width="360px" style="text-align:center;"><br>
				<img src="gif/gifs.gif" width="360px" style="text-align:center;"><br>
				<img src="gif/gif3.gif" width="360px" style="text-align:center;">
			</div>
			<div id="main" style="background-color:white;">
<?php
    include "dbconnect.php";
	
	if($_POST)
	{
		mysqli_select_db($conn,"automart");
		   
    	$newmake		= $_POST['make'];
		$newyear		= $_POST['year'];
		$newstatus		= $_POST['status'];
		$newtransmition	= $_POST['transmision'];
		$minmilage		= $_POST['minMilage'];
		$maxmilage		= $_POST['maxMilage'];
		$minprice		= $_POST['minPrice'];
		$maxprice		= $_POST['maxPrice'];
		
		$sql="SELECT * FROM car WHERE make='$newmake'";
		
		//echo $_POST['make'];
		//echo  $_POST['year'];
				/*year='$newyear' and 
										status='$newstatus' and 
										transmision='$newtransmition' and 
										milage between '$minmilage' and 'maxmilage' and 
										price between '$minprice' and '$maxprice'*/
										
		$result=mysqli_query($conn,$sql);
		
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
							echo "<td class='data'>"."<a class='data' href=purchase.php?".$row['c_id'].">Purchase</a></td>";
						echo "</tr>";
						echo "<tr>";
							echo "<td class='data'><b>Owner's E-mail :</b></td>";
							echo "<td class='data'>".$row['email']."</td>";
						echo "</tr>";
					echo "</table>";
					echo "<br>";
					echo "<hr style='width:90%;margin-left:32px;'>";
				}
		
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