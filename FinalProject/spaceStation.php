<?php

	if(($_SERVER['HTTPS'])){
		header('Location: https://45.79.10.14/spaceStation.php');
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
		
		<script>
					$(document).ready(function(){
						$("#dialog").dialog("option", "title", "You have entered...");
						$("#dialog").dialog("option", "width", 400);
						$( "#dialog" ).dialog({
							position: ['center']
						});
						$("#dialog").dialog("open");
					});
		</script>
		
    </head>
    
    <body>
	
		<div class="container">
			<div class="center">
				<div class="wrap">
					
					<div id="dialog" class="dialogBox sunDialog">
						<p>The International Space Station!</p>
						<iframe width="360" height="302" src="http://www.ustream.tv/embed/9408562?v=3&amp;wmode=direct" scrolling="no" frameborder="0" style="border: 0px none transparent;">    </iframe>
						<br /><a href="http://www.ustream.tv/channel/9408562" style="padding: 2px 0px 4px; width: 360px; background: #ffffff; display: block; color: #000000; font-weight: normal; font-size: 10px; text-decoration: underline; text-align: center;" target="_blank">Live streaming video by Ustream</a>
					</div>
					
				  
				</div>
			</div>
		</div>	
		
    </body>
</html>