<?php

	if(!($_SERVER['HTTPS'])){
		header('Location: https://45.79.10.14/home.php');
	}//endif

?>

<!DOCTYPE html>
<html>
    <head>
	
        <title>CS2830 Final Project</title>
		
		<?php include("header/header.php"); ?>
		
		<style>
			
			body {
				background-image:url("images/background/stardust.png");
			}

		</style>
		
    </head>
    
    <body>
		
		<div class="container">
			<div class="center">
				<div class="wrap">
				
					<?php // to handle alerts upon success and failure of login attempts
					/*
						session_start();
						
						if(!isset($_SESSION['username']) && isset($_SESSION['login_attempt']) && $_SERVER['HTTP_REFERER'] == "https://45.79.10.14/login.php") {
							echo "<div class='alerts login_alert' id='alerts'>";
							echo 	"<div class='alerts alert-message error'>";
							echo		"<button type='button' id='close' class='close' aria-hidden='true'>&times;</button>";
							echo		"<p><strong>Uh oh!</strong><br>We could not verify your username or password.  Please <a href='login.php'>try again</a>.</p>";
							echo 	"</div>";
							echo "</div>";
						}
						else if(isset($_SESSION['username']) && $_SERVER['HTTP_REFERER'] == "https://45.79.10.14/login.php") {
							echo "<div class='alerts login_alert' id='alerts'>";
							echo 	"<div class='alerts alert-message success'>";
							echo 		"<button type='button' id='close' class='close' aria-hidden='true'>&times;</button>";
							echo		"<p><strong>Well done!</strong><br>You have successfully logged in!</p>";
							echo	"</div>";
							echo "</div>";
						}
						
						if(isset($_SESSION['username'])){
							echo "<style>";
							echo ".login_message {";
							echo "visibility: hidden;";
							echo "}";
							echo "</style>";
							echo "<img id='black_hole' src='images/black_hole.png' alt='black_hole'>";
						}
					*/
					?>
				
					<h1 class="shadow" id="heading">Click the screen to move the rocket ship <br> to the desired location!</h1>
					<br> 
					<p class="shadow center" id="hint"> Hint: If you see Gog, the alien, be sure to click him too!</p>
					<p class="login_message">Login to explore more of the universe!<p>
					
					<div id="dialog" class="dialogBox sunDialog">
						<p id="contentBox">That's hot!!</p>
					</div>
					
					<img id="sun" src="images/sun.png" alt="sun">
					<img id="mercury" src="images/mercury.png" alt="mercury">
					<img id="venus" src="images/venus.png" alt="venus">
					<img id="earth" src="images/earth.png" alt="earth">
					<img id="mars" src="images/mars.png" alt="mars">
					
					<div id="stage">
						<img id="rocket" src="images/rocket.png" alt="rocket ship">
					</div>

					<div id="titles">
						<div id="titlecontent">
							<p id="scrollingText"> 
							A not so long time ago, in a galaxy not so far, far away...<br><br>
							There was a group of awful, smelly little creatures called students.
							These students had a mission... TO TAKE OVER THE WORLD!... Ahem...
							Actually it was just to complete a final project for CS2830.
							THEN TAKE OVER THE WORLD!!!
							One student in particular was named Bill.
							This student had no clue how he was going to complete his mission.  
							He started by finding looking for cool backgrounds to put on his website.  
							Then he found a space background, and the rest was history.  
							He worked for days trying to make the best website he could within the given parameters of the assignment
							and the time in which he had to complete it.
							THIS, is his final project!
							</p>
						</div>
					</div>
					
				</div>
			</div>
		</div>	
		
    </body>
</html>