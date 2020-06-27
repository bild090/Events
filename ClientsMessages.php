<!DOCTYPE html>

<html>

<head>
	<title>Contact us</title>
	
	<link href="clientsMessages.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="all.css" rel="stylesheet" type="text/css">
	<link rel="icon" href="images/ASAEvent_Logo.png" type="image/png" sizes="16x16">

<style>

	body {
		margin: 0;
		padding: 0;
		background: #FFFFFF;
		font-family: 'Open Sans', sans-serif;
		font-size: 13px;
		background-image: url("images/ian-dooley-DuBNA1QMpPA-unsplash.png");
		background-repeat: no-repeat;
		background-position: center center;
		background-attachment: fixed;
		background-size: cover;
		min-height: 100%;
		height: 100%;
	}

</style>

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
	<!-- php -->
	<?php

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "asa events";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		$sql = "SELECT clientsName, clientsMessages FROM messagesinfo";
		$result = $conn->query($sql);

		if ($result->num_rows > -1) {
			// output data of each row
			$counter = 0;
			while($row = $result->fetch_assoc()) {
				
				print("<div class = 'passLost'><div class = 'passLost-screen'>");
				echo "<h1 class = 'state1'>Client name: " . $row["clientsName"]. "</h1><h2 class = 'state2'>Message: " . $row["clientsMessages"]. "</h2>";
				print("</div></div>");
				
				
			}
		} else {
			echo "0 results";
		}
		$conn->close();
		?>



	<!-- end #page -->
		<!-- footer -->>
		</div>
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