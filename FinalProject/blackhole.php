<?php
	session_start(); //start session in order to use $_SESSION variables
	if($_SESSION['login_attempt'] != true) { //if user is not logged in, redirect them to home.php
		header('Location: https://45.79.10.14/home.php');
	}
	
	if(!($_SERVER['HTTPS'])){
		header('Location: https://45.79.10.14/blackhole.php');
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
			
		<div id="dialog">
			<div class="center">
				<div id="contentBox">
					<p>You have entered a black hole!<br>What would you like to do?</p>
					<br>
				</div>
				<div class="form-group">
					<button id="ajax_home" type="submit" name="submit" class="btn btn-primary" onclick="planetNav('?content=home');">Warp Home</button>
					<button id="ajax_learn" type="submit" name="submit" class="btn btn-primary" onclick="planetNav('?content=video');">Learn More</button>
					<button id="ajax_cry" type="submit" name="submit" class="btn btn-primary" onclick="planetNav('?content=cry');">Cry</button>
					<br>
				</div>
			</div>
		</div>
					
		<img id="spaceship" src="images/spaceship.png" alt="spaceship">
	
	</body>

</html>