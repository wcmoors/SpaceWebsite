<?php

	if(!($_SERVER['HTTPS'])){
		header('Location: https://45.79.10.14/earth.php');
	}//endif

?>

<!DOCTYPE html>
<html>
    <head>
	
        <title>CS2830 Final Project</title>
		
		<?php include("header/header.php"); ?>
		
		<style>

			body {
				background:url("images/background/earth_surface.jpg") no-repeat center center fixed;
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
				<div id="mid" class="form-group">
					<div id="contentBox">
						<p>	You just landed on... Earth!  Wait... you know what planet this is.  You live on it!
							Do you know what country we are in?  I'll give you a hint: Where we are, "Ciao!" means, "Hello!"</p>
						<br>
						<input type="text" name="country" id="country" style = "width: 200px; height: 30px;" class="form-control mid" maxlength = 20 placeholder="Answer here" required="" autofocus>
						<br>
						<button id="country" type="submit" name="country" class="btn btn-primary" onclick="planetNav('?content=answer');">Answer</button>
					</div>
					<button id='earth_home' type='submit' name='submit' class='btn btn-primary' onclick="planetNav('?content=home');">Warp Home</button>
					<button id='earth_learn' type='submit' name='submit' class='btn btn-primary' onclick="planetNav('?content=video');">Learn More</button>
					<button id='tryAgain' type='submit' name='tryAgain' class='btn btn-primary' onclick='tryAgain();'>Go Back</button>
				</div>
			</div>
		</div>
					
		<img id="spaceship" src="images/spaceship.png" alt="spaceship">
		
    </body>
</html>