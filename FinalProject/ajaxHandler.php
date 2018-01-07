<?php

	if ($_SERVER['HTTP_REFERER'] == "https://45.79.10.14/blackhole.php"){

		$handler = empty($_GET['content']) ? '' : $_GET['content'];
		if ($handler == 'cry'){
			$content = "Don't be sad!  Keep learning and exploring!<br><br>";
		}
		else if ($handler == 'video'){
			$content = "<iframe id='video' width='560' height='315' src='//www.youtube.com/embed/MlsljXCFcRc' frameborder='0' allowfullscreen></iframe>";
		}
		print $content;
		
	}
	
	else if ($_SERVER['HTTP_REFERER'] == "https://45.79.10.14/mercury.php"){

		$handler = empty($_GET['content']) ? '' : $_GET['content'];
		if ($handler == 'high_five'){
			$content = "*Clap!*  Keep up the good work!<br><br>";
		}
		else if ($handler == 'video'){
			$content = "<iframe id='video' width='560' height='315' src='//www.youtube.com/embed/6KY-oB2i9lo?rel=0' frameborder='0' allowfullscreen></iframe>";
		}
		print $content;
		
	}
	
	else if ($_SERVER['HTTP_REFERER'] == "https://45.79.10.14/venus.php"){

		$handler = empty($_GET['content']) ? '' : $_GET['content'];
		if ($handler == 'high_five'){
			$content = "*Clap!*  Keep up the good work!<br><br>";
		}
		else if ($handler == 'video'){
			$content = "<iframe id='video' width='560' height='315' src='//www.youtube.com/embed/TR-IWhZZDJY?rel=0' frameborder='0' allowfullscreen></iframe>";
		}
		print $content;
		
	}
	
	else if ($_SERVER['HTTP_REFERER'] == "https://45.79.10.14/earth.php"){
			$countryHandler = strtolower($_GET['country']);
			$contentHandler = $_GET['content'];
			if ($contentHandler == 'answer'){
				if ($countryHandler == 'italy'){
					$content = "You got it!  What would you like to do next?<br><br>";
				}
				else {
					$content = "That's not it.  Try again!<br><br><button id='tryAgain' type='submit' name='tryAgain' class='btn btn-primary' onclick='tryAgain();'>Try Again</button>";
				}
			}
			else if ($contentHandler == 'video'){
				$content = "<iframe id='video' width='560' height='315' src='//www.youtube.com/embed/ejmA4X4ZvN4?rel=0' frameborder='0' allowfullscreen></iframe>";
			}
			else{
				$content = "<p>	You just landed on... Earth!  Wait... you know what planet this is.  You live on it!
				Do you know what country we are in?  I'll give you a hint: Where we are, \"Ciao!\" means, \"Hello!\"</p>
				<br>
				<input type='text' name='country' id='country' style = 'width: 200px; height: 30px;' class='form-control mid' maxlength = 20 placeholder='Answer here' required='' autofocus>
				<br>
				<button id='country' type='submit' name='country' class='btn btn-primary' onclick=\"planetNav('?content=answer');\">Answer</button>";
			}
			print $content;
	}
	
	else if ($_SERVER['HTTP_REFERER'] == "https://45.79.10.14/mars.php"){

		$handler = empty($_GET['content']) ? '' : $_GET['content'];
		if ($handler == 'high_five'){
			$content = "*Clap!*  Keep up the good work!<br><br>";
		}
		else if ($handler == 'video'){
			$content = "<iframe id='video' width='560' height='315' src='//www.youtube.com/embed/qMyv7qLNe6g?rel=0' frameborder='0' allowfullscreen></iframe>";
		}
		print $content;
		
	}
		
?>