<!DOCTYPE html>
<?php
error_reporting(0);
include("session.php");
?>
<?php

	$host = 'localhost';
	$username= 'root';
	$pass = '';
	$db = 'deliverme';
					
							
	
		$con=new mysqli($host, $username, $pass, $db) or die("not connected");
		
			
		
			if (isset($_REQUEST['Submit']))
				
				{
					$DmName=$_POST['DmName'];
					$DmUserName=$_POST['DmUserName'];
					$DmPass=$_POST['DmPass'];
					
					$DmNID=$_POST['DmNID'];
					$DmAddress=$_POST['DmAddress'];
					$DmPhone=$_POST['DmPhone'];
					
					
					
					
					$sqlAddFOOD= "INSERT INTO `delivery_man`(`name`, `username`, `password`, `address` ,`nid`,`phone`) VALUES ('".$DmName."','".$DmUserName."','".$DmPass."','".$DmAddress."','".$DmNID."','".$DmPhone."')";
					
						if(!empty($DmName) &&  !empty($DmUserName) && !empty($DmPass) &&  !empty($DmNID) &&  !empty($DmPhone) &&  !empty($DmAddress) )
						{
							if (mysqli_query($con, $sqlAddFOOD)) {
								echo '<script language="javascript">';
								echo 'alert("Submitted")';
								echo '</script>';
								
							} else {
								echo '<script language="javascript">';
								echo 'alert("TRY AGAIN ")';
								echo '</script>';
							}
						
						}
						else
						{
							echo '<script language="javascript">';
							echo 'alert("Please Fill All Field")';
							echo '</script>';
						}
					}
					
					mysqli_close($con);

					
				
				if (isset($_REQUEST['Back']))
				
				{
					echo "<script>location.href='adminDeliveryMan.php';</script>";
					
				}

	
?>

<html>
	<head>
		<meta charset="utf-8"/>
		<title>DeliverME</title>
		<meta content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0" name="viewport"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="css/font-awesome-4.7.0/css/font-awesome.min.css"/>
		<link rel="stylesheet" type="text/css" href="css/animate.min.css"/>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		
		<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="js/jquery-1.10.1.min.js"></script>
	</head>
	<body>
		<section class="header">
			<div class="container">
				<div class="row">
					<div class="col-md-10">
						<div class="logo">
						<!-- Logo/Title -->
							<a href="index.php"><img src="images/logo.png"> </img></a>
						</div>
					</div>
					<div class="col-md-2">
						<div class="sign-up">
						<!-- Sign up button -->
							
							<a class="btn btn-primary btn-sm" href="Logout.php">Log Out</a>
							<a class="btn btn-primary btn-sm" href="home.php">Home</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="main">
			<div class="container adminPanel">
					<div class="col-md-20">
						<div class="adminText">
							<h2><P align="center" >ADMIN PANEL</p></h2>
						</div>
					</div>
			<!-- add restaurant -->
				<form method="post" target="#" >
				
					<div class="row">
					
					<div class="col-lg-4"></div>
					
					<div class="col-md-4 center-block ">
					
						
						
							<P>Delivery Man Name: <input class="form-control" type="text" value="" placeholder="Delivery Man Name" name="DmName"> </P>
						
							<P>Username: <input class="form-control" type="text" value="" placeholder="Username" name="DmUserName"> </P>
						
							<P>Password: <input class="form-control" type="text" value="" placeholder="Password" name="DmPass"> </P>
						
							<P>Address: <input class="form-control" type="text" value="" placeholder="Address" name="DmAddress"> </P>
							
							<P>NID: <input class="form-control" type="text" value="" placeholder="NID" name="DmNID"> </P>
							
							<P>Phone Number: <input class="form-control" type="text" value="" placeholder="Phone Number" name="DmPhone"> </P>
						
							<p align="center"><button  type="Submit" class="btn btn-primary" value="Submit" name="Submit" >Add</button>
							<p align="center"><button class="btn btn-primary" name="Back" href="adminDeliveryMan.php">Back</button>
						
						
					</div>
					
					
				</form>
				<!-- Search form end -->
			</div>
			
		</section>
		
		<section class="footer">
			<div class="container">
				<div class="col-md-12">
					<!--<p>&copy 2018 All rights reserved</p> -->
				</div>
			</div>
		</section>
		
		<script type="text/javascript"  src="js/bootstrap.min.js"></script>
		<script type="text/javascript"  src="js/wow.min.js"></script>
		<script type="text/javascript"  src="js/script.js"></script>
		
		<script type="text/javascript">
			new WOW().init();
		</script>
	</body>
</html>