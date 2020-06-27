<!DOCTYPE html>

<html>

<head>
	<title>Contact us</title>
	
	<link href="insertclientsMessages.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="all.css" rel="stylesheet" type="text/css">
	<link rel="icon" href="images/ASAEvent_Logo.png" type="image/png" sizes="16x16">
</head>

<body>

<div id="wrapper">
			<div id="header">
				<div id="logo2">
					<h1><a href=""><img src="images/ASAEvent_Logo.png" width="70" height="110"></a></h1>
				</div>
				
				<div id="menu">
					<ul>
						<li ><a href="index.html">Homepage</a></li>
						<li><a href="Welcome.html">Welcome</a></li>
						<li><a href="UPCOMINGevents.html">Upcoming Events</a></li>
						<li class="current_page_item"><a href="ContactUs.php">Contact us</a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- end header -->

<?php

define ('DB_NAME', 'asa events');
define ('DB_USER', 'root');
define ('DB_PASSWORD', '');
define ('DB_HOST', 'localhost');

// Create connection with MySql Database
$link = mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD);

// Check connection
if (!$link) {
    die ( 'Could not connect:' . mysqli_error($link) );

}

// connect with the database
$db_selected = mysqli_select_db ($link, DB_NAME);

// Check connection
if (!$db_selected) {
    die ('Can\'t use' . DB_NAME . ' : ' . mysqli_error($db_selected) );
 
}

// insert data into the table of the database
$name= $_POST ['clientsName'];
$messages = $_POST ['clientsMessages'];
$sql =  " INSERT INTO messagesinfo (clientsName, clientsMessages) VALUES ('$name', '$messages')";
												

// Check if insertion done
if (mysqli_query($link, $sql)) {
    echo "<h1 class = 'state1'>Your messages sent!</h1>";

} else {
    echo "<h1 class = 'state1'>Error: " . $sql . "<br>" . mysqli_error($link)."</h1>";
}


mysqli_close ($link);


?>
</div>
	<!-- footer -->>
	<div id="footer">
		<p>
			<marquee scrollamount="10" direction="left" behavior="scroll">
				&copy; 2020 / IMAM / CCIS&trade;.
			</marquee>
		</p>
	</div>
	<!-- end footer -->
</body>

</html>