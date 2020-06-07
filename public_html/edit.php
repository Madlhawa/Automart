<!DOCTYPE html>

<title>
	AutoMart-The Best Online Vehical Store in Sri Lanka
</title>

<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="style2.css">
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
				<h3>Edit your car details</h3>
				<hr>
				<?php
					include "dbconnect.php";
	
					mysqli_select_db($conn,"a1653851_automar");
					$carid = $_SERVER['QUERY_STRING'];
	
					$sql="SELECT * FROM car WHERE c_id=$carid";
					$result=mysqli_query($conn,$sql);
					$row=mysqli_fetch_array($result);

				?>
				<form name="form3" method="post" action="editAd.php?varid=<?php echo $carid ?>">
					<table>
						<tr>
							<td>Make</td>
							<td><select name="make">
								<option value='<?php echo $row['make']; ?>'><?php echo $row['make']; ?></option>
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
							<td>Model</td>
							<td><input type="text" name="model" value="<?php echo $row['model']; ?>"></td>
						</tr>
						<tr>
							<td>Year</td>
							<td><select name="year">
								<option value='<?php echo $row['year']; ?>'><?php echo $row['year']; ?></option>
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
							<td>Condition</td>
							<td><select name="status">
								<option value='<?php echo $row['status']; ?>'><?php echo $row['status']; ?></option>
								<option value="Used">Used</option>
								<option value="New">New</option>
								<option value="Reconditioned">Reconditioned</option>
							</select></td>
						</tr>
						<tr>
							<td>Transmition</td>
							<td><select name="transmition">
								<option value='<?php echo $row['transmision']; ?>'><?php echo $row['transmision']; ?></option>
								<option value="automatic">Automatic</option>
								<option value="manual">Manual</option>
								<option value="tiptronic">Tiptronic</option>
							</select></td>
						</tr>
						<tr>
							<td>Milage</td>
							<td><input type="text" name="milage" value="<?php echo $row['milage']; ?>"></td>
						</tr>
						<tr>
							<td>Body Type</td>
							<td><select name="bodytype">
								<option value='<?php echo $row['bodytype']; ?>'><?php echo $row['bodytype']; ?></option>
								<option value="sedan">Sedan</option>
								<option value="coupe">Coupe</option>
								<option value="miniVan">Mini Van</option>
								<option value="crossOver">Cross Over</option>
								<option value="suv">SUV</option>
								<option value="electric">Electric</option>
							</select></td>
						</tr>
						<tr>
							<td>Price</td>
							<td><input type="text" name="price" value="<?php echo $row['price']; ?>"></td>
						</tr>
					</table>
				
					<input class="btn" type="submit" value="Submit">

				</form>
			</div>	
		</div>
		<footer id="footer" style="float:right; width:100%;">
			<div class="container">
				<br><br>
				<p class="foot" style="margin-left:350px;">Copyright  © </p><p class="foot" style="font-family:'logo';"> AutoMart</p><p class="foot"> , 2016 - All Right Reserved.</p>
			</div>
		</footer>
	</body>