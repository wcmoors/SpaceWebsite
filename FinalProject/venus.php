<?php

	if(!($_SERVER['HTTPS'])){
		header('Location: https://45.79.10.14/venus.php');
	}//endif

?>

<!DOCTYPE html>
<html>
    <head>
	
        <title>CS2830 Final Project</title>
		
		<?php include("header/header.php"); ?>
		
		<style>

			body {
				background: url("images/background/venus_surface1.jpg")no-repeat center center fixed;
				-webkit-background-size: cover;
				-moz-background-size: cover;
				-o-background-size: cover;
				background-size: cover;
			}

		</style>
		
    </head>
    
    <body>
		
		<div id="dialog">
			<div class="center">
				<div id="contentBox">
					<p>Welcome to the planet Venus!<br>What would you like to do?</p>
					<br>
				</div>
				<div class="form-group">
					<button id="ajax_home" type="submit" name="submit" class="btn btn-primary" onclick="planetNav('?content=home');">Warp Home</button>
					<button id="ajax_learn" type="submit" name="submit" class="btn btn-primary" onclick="planetNav('?content=video');">Learn More</button>
					<button id="ajax_high_five" type="submit" name="submit" class="btn btn-primary" onclick="planetNav('?content=high_five');">High Five!</button>
					<br>
				</div>
			</div>
		</div>
					
		<img id="spaceship" src="images/spaceship.png" alt="spaceship">
		
    </body>
</html>