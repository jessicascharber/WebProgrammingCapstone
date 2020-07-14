<!--
Author:                 Jessica Scharber
Creation Date:          3/1/20
Modification Date:      3/14/20
FileName:               findreservation.php
Purpose:      This page contains a brief overview of what the cabin has to offer.
-->
<html>
		<head>
			<title>Reservation Record(s) Found</title>
			<link rel="stylesheet" type="text/css" href="cabin.css" />
			<meta charset="utf-8">
		</head>
		<body>
			<div id="page" data-role="page" data-theme="b" >
				<div data-role="header" data-theme="b">
					<nav>
		      	<a href="index.html">Home</a> &nbsp;
		      	<a href="about.html">About Us</a> &nbsp;
		      	<a href="gallery.html">Gallery</a> &nbsp;
		      	<a href="reservations.html">Reservations</a> &nbsp;
		      	<a href="emailform.html">Sign Up for News and Coupons!</a> &nbsp;
		      	<a href="mailto:jessicascharber@gmail.com">Email</a> &nbsp;
		      	<a href="tel:+7633502555">Phone</a> &nbsp;
		      	<a href="admin.html">Admin</a>
		     	</nav>
		    	<div id="div1">
						<!--  Purpose:      Defines outer division dimensions and background.
									Input:        background-image: url('lakeview.jpg');
									Output:        Displays image as background.
						-->
		      	<div id="div2">
							<!--  Purpose:      Defines inner division dimensions and text. -->

		        	<h1>Camp Lake Cabin - Reservations</h1>
		      	</div>
		    	</div>
				</div>
				<div data-role="content">
					<h1>Record(s) Found: </h1>
					<?php
					include 'configFile.php';
					include 'connectOpenDb.php';

					$arrival = (isset($_POST['arrival'])    ? $_POST['arrival']   : '');

					$sql= "SELECT arrival, departure, lastname, firstname, streetaddress, city, state, zip, emailaddress, phone, notes FROM reservations where arrival = '$arrival' ";

					$result = mysqli_query($conn, $sql);

					if (mysqli_num_rows($result) > 0) {
						// output data of each row
						while($row = mysqli_fetch_assoc($result)) {
								echo "<b>Arrival Date: " . $row["arrival"]. "</b><br>";
								echo "<b>Departure Date: " . $row["departure"]. "</b><br>";
								echo "<b>Name: " . $row["firstname"]. " " . $row["lastname"]. " " . "</b><br>";
								echo "<b>Address: " . $row["streetaddress"]. " " . $row["city"]. " " . $row["state"]. " " . $row["zip"]. "</b><br>";
								echo "<b>Notes: " . $row["notes"]. "</br><br>";
								}
					} else {
						echo "Sorry there are no matches! Please check your entry and try again.";
					}
					mysqli_close($conn);
					?>

				</div>
				<div data-role="footer" data-theme="b">
	  			<small><i>Copyright &copy; 2020 ScharWeb Development</i></small>
				</div>
			</div>
		</body>
</html>
