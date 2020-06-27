<!DOCTYPE html>

<html>

<head>
	<title>Contact us</title>
	<link href="contactUsStyle.css" rel="stylesheet" type="text/css">
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

		<div class="backGround3">
			<h2>About the site</h2>
			<p>ASA Events site is to see the different events in your town.</p>
		</div>
		<!-- how is asaevent site -->
		<div class="backGround"></div>
		<form action="insertClientsMessages.php" method="POST">
		<div class="wrapper">
				<h3>massage us</h3>
				<h2 >For any comments and complaints</h2>
				<div class="form">
				  <div class="input_field">
					<input name ="clientsName" type="text" placeholder="Name">
				  </div>
				  <div class="input_field">
					<input type="Email" placeholder="Email">
				  </div>
				  <div class="input_field">
					<textarea name ="clientsMessages" placeholder="Message" ></textarea>
				  </div>
				  <div class="btn">
						<input type="submit" value="Send">
				  </div>
				</div>
			  </div>
			</div>
		</form>
		<!-- contact form -->
		<div class="container2">
		<a class="btn1 btn-1" href="ClientsMessages.php">See our clients Messages</a>
		</div>

		
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