
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script src="jslibs/jquery-1.11.0.min.js"></script>
		<script src="jslibs/cs2830FinalProject.js"></script>
		<script src="jslibs/jquery-ui-1.10.4.custom.js"></script>
		<script src="jslibs/ajax.js"></script>
		
		<!-- externally link to google fonts api -->
		<link href='http://fonts.googleapis.com/css?family=Gloria+Hallelujah' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Special+Elite' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Coming+Soon' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Walter+Turncoat' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Patrick+Hand' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet' type='text/css'>
		<!-- end google fonts api link -->
		
		<!-- externally link to style sheets on jquery website -->
		<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
		<!-- this one is relative and wil not work <link rel="stylesheet" href="/resources/demos/style.css">-->
		<!-- end jquery external style sheets -->
		
		<link rel="stylesheet" type="text/css" href="css/cs2830FinalProject.css">
		
		<br>
		
		<div class="navbar navbar-default navbar-static-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Moors, William</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
					<li <?php if(basename($_SERVER[PHP_SELF])=="home.php"){?>class="active"<?php } ?>><a href="home.php">Home</a></li>
					<li <?php if(basename($_SERVER[PHP_SELF])=="mercury.php"){?>class="active"<?php } ?>><a href="mercury.php">Mercury</a></li>
					<li <?php if(basename($_SERVER[PHP_SELF])=="venus.php"){?>class="active"<?php } ?>><a href="venus.php">Venus</a></li>
					<li <?php if(basename($_SERVER[PHP_SELF])=="earth.php"){?>class="active"<?php } ?>><a href="earth.php">Earth</a></li>
					<li <?php if(basename($_SERVER[PHP_SELF])=="mars.php"){?>class="active"<?php } ?>><a href="mars.php">Mars</a></li>
					<?php 	
					
						session_start(); //start session to use session variable 'username'
						
						if(isset($_SESSION['username'])) { //if user is logged in, show the black hole link on the navbar
							if(basename($_SERVER[PHP_SELF])=='blackhole.php'){
								echo "<li class='active'><a href='blackhole.php'>Black Hole</a></li>";
							}
							else
								echo "<li><a href='blackhole.php'>Black Hole</a></li>";
						}
					?>
					</ul>
					<ul class="nav navbar-nav navbar-right">
					<?php
						
						if(isset($_SESSION['username'])) { //if user is logged show logout button on navbar, and vice versa if user is logged out
							echo "<li ";
							if(basename($_SERVER[PHP_SELF])=="logout.php")
									echo "class='active' ";
							echo ">";
							echo "<a href='logout.php'>Logout</a></li>";
						}
						else{
							echo "<li ";
							if(basename($_SERVER[PHP_SELF])=="login.php")
									echo "class='active' ";
							echo ">";
							echo "<a href='login.php'>Login</a></li>";
						}
					?>
					</ul>
				</div>
			</div>
		</div>