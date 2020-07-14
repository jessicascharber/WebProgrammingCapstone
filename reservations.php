<!--
Author:                 Jessica Scharber
Creation Date:          3/1/20
Modification Date:      3/14/20
FileName:               reservations.php
Purpose:      This page connects to the database and stores the users' input
							to the reservations table of the cabindb database.
Input: 				reservation form data from reservations.html
							customer information from reservations table of cabindb
							configFile.php
							connectOpenDb.php
Output:				INSERT  arrival, departure, lastname, firstname, streetaddress,
							city, state, zip, emailaddress, phone, notes INTO reservations
							Display selected information
 -->
<html>
		<head>
			<title>Reservation Record Inserted</title>
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
					<h2>Your reservation request has been sent. Confirmation will be sent upon approval.</h2>
<?php
/*  Database connections  */
					include 'configFile.php';
					include 'connectOpenDb.php';
					/* Converting user input to database language. */
				               $arrival= (isset($_POST['arrival'])    ? $_POST['arrival']   : '');
											 $departure= (isset($_POST['departure'])    ? $_POST['departure']   : '');
											 $lastname= (isset($_POST['lastname'])    ? $_POST['lastname']   : '');
											 $firstname= (isset($_POST['firstname'])    ? $_POST['firstname']   : '');
											 $streetaddress= (isset($_POST['streetaddress'])    ? $_POST['streetaddress']   : '');
											 $city= (isset($_POST['city'])    ? $_POST['city']   : '');
											 $state= (isset($_POST['state'])    ? $_POST['state']   : '');
											 $zip= (isset($_POST['zip'])    ? $_POST['zip']   : '');
											 $emailaddress= (isset($_POST['emailaddress'])    ? $_POST['emailaddress']   : '');
											 $phone= (isset($_POST['phone'])    ? $_POST['phone']   : '');
											 $notes= (isset($_POST['notes'])    ? $_POST['notes']   : '');
				$sql= "	INSERT INTO reservations (arrival, departure, lastname, firstname, streetaddress, city, state, zip, emailaddress, phone, notes)
										VALUES ('$arrival','$departure','$lastname','$firstname','$streetaddress','$city','$state','$zip','$emailaddress','$phone','$notes')";
/* Inserting values into the reservations table of the cabindb database	*/
  			$result = mysqli_query($conn, $sql);
				$arrival = (isset($_POST['arrival'])    ? $_POST['arrival']   : '');
				$sql= "SELECT arrival, departure, lastname, firstname, streetaddress, city, state, zip, emailaddress, phone, notes from reservations WHERE arrival = '$arrival' ";
				$result = mysqli_query($conn, $sql);
/* Requesting reservations data from cabindb database. */
				if (mysqli_num_rows($result) > 0) {
				    // output data of each row
				    while($row = mysqli_fetch_assoc($result)) {
							//	echo "<b>Record successfully inserted:</b><br>";
								echo "<b>Arrival Date: " . $row["arrival"]. "</b><br>";
								echo "<b>Departure Date: " . $row["departure"]. "</b><br>";
				        echo "<b>Name: " . $row["firstname"]. " " . $row["lastname"]. " " . "</b><br>";
								echo "<b>Address: " . $row["streetaddress"]. $row["city"]. $row["state"]. $row["zip"]. "</b><br>";
								echo "<b>Notes: " . $row["notes"]. "</br><br>";
						    }
				} else {
				   echo "Sorry there are no matches! Please check your entry and try again.";
					}
/* Displaying the results of the query. */
				mysqli_close($conn);
/* Closing the connection. */
				?>
			</div>
			<div data-role="footer" data-theme="b">
	  		<small><i>Copyright &copy; 2020 ScharWeb Development</i></small>
			</div>
		</div>
	</body>
</html>
