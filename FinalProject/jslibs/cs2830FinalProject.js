			$(document).ready(function(){
				$('#heading').hide();
				$('#hint').hide();
				$('#mercury').hide();
				$('#venus').hide();
				$('#earth').hide();
				$('#mars').hide();
				$('#black_hole').hide();
				$('#earth_home').hide();
				$('#earth_learn').hide();
				$('#tryAgain').hide();
				
				$(".close").click(function(event){
					$(".alerts").hide();
				});
				
				var StartingRocketLocation = $("#rocket").position();
				
				$('.navbar-default').hover(function(){
					$('.navbar-default').css('opacity', '100');
					}, function(){
						$('.navbar-default').css('opacity', '0');
				});
				
				$('#rocket').hover(function(){
					$('#rocket').css('cursor', 'pointer');
					}, function(){
						$('#rocket').css('cursor', 'auto');
				});
				
				$('#mercury').hover(function(){
					$('#mercury').css('cursor', 'pointer');
					}, function(){
						$('#mercury').css('cursor', 'auto');
				});
				
				$('#venus').hover(function(){
					$('#venus').css('cursor', 'pointer');
					}, function(){
						$('#venus').css('cursor', 'auto');
				});
				
				$('#earth').hover(function(){
					$('#earth').css('cursor', 'pointer');
					}, function(){
						$('#earth').css('cursor', 'auto');
				});
				
				$('#mars').hover(function(){
					$('#mars').css('cursor', 'pointer');
					}, function(){
						$('#mars').css('cursor', 'auto');
				});
				
				$('#black_hole').hover(function(){
					$('#black_hole').css('cursor', 'pointer');
					}, function(){
						$('#black_hole').css('cursor', 'auto');
				});
				
				$('#sun').hover(function(){
					$('#sun').css('cursor', 'pointer');
					}, function(){
						$('#sun').css('cursor', 'auto');
				});
				
				$('#spaceship').hover(function(){
					$('#spaceship').css('cursor', 'pointer');
					}, function(){
						$('#spaceship').css('cursor', 'auto');
				});
				/* //NOT WORKING
				var opener = $('div#specify #opener')
				opener.hover(function(){
					opener.css('cursor', 'pointer');
					}, function(){
						opener.css('cursor', 'auto');
				});
				*/
				var titles = $('#titles');
				titles.addClass("#titlecontent");
				titles.one("animationend webkitAnimationEnd MSAnimationEnd oAnimationEnd", function(event){
					titles.remove();
					$('#heading').fadeIn('slow');
					$('#hint').delay(2000).show('slow', 'swing');
					$('#mercury').delay(4000).show('slow', 'swing');
					$('#venus').delay(6000).show('slow', 'swing');
					$('#earth').delay(8000).show('slow', 'swing');
					$('#mars').delay(10000).show('slow', 'swing');
					$('#black_hole').delay(12000).show('slow', 'swing');
				});
				
				$('#mercury').click(function(event){
					var RocketLocation = $("#rocket").parent().offset();
					var MercuryLocation = $("#mercury").offset();
					$("#rocket").animate({
						left: MercuryLocation.left,
						top: MercuryLocation.top
					}, {
						duration: 3000,
						/*complete: function(){
							add stuff for completion of movement	.delay(3000)
						}*/
					});
					$("body").animate({
						opacity: 0
					}, 3000, function(){
						window.location.assign("mercury.php")
					});
				});
				
				$('#venus').click(function(event){
					var RocketLocation = $("#rocket").parent().offset();
					var VenusLocation = $("#venus").offset();
					$("#rocket").animate({
						left: VenusLocation.left,
						top: VenusLocation.top
					}, {
						duration: 3000,
						/*complete: function(){
							add stuff for completion of movement	.delay(3000)
						}*/
					});
					$("body").animate({
						opacity: 0
					}, 3000, function(){
						window.location.assign("venus.php")
					});
				});
				
				$('#earth').click(function(event){
					var RocketLocation = $("#rocket").parent().offset();
					var EarthLocation = $("#earth").offset();
					$("#rocket").animate({
						left: EarthLocation.left,
						top: EarthLocation.top
					}, {
						duration: 3000,
						/*complete: function(){
							add stuff for completion of movement	.delay(3000)
						}*/
					});
					$("body").animate({
						opacity: 0
					}, 3000, function(){
						window.location.assign("earth.php")
					});
				});
				
				$('#mars').click(function(event){
					var RocketLocation = $("#rocket").parent().offset();
					var MarsLocation = $("#mars").offset();
					$("#rocket").animate({
						left: MarsLocation.left,
						top: MarsLocation.top
					}, {
						duration: 3000,
						/*complete: function(){
							add stuff for completion of movement	.delay(3000)
						}*/
					});
					$("body").animate({
						opacity: 0
					}, 3000, function(){
						window.location.assign("mars.php")
					});
				});
				
				$('#sun').click(function(event){
					var RocketLocation = $("#rocket").parent().offset();
					var SunLocation = $("#sun").offset();
					$("#rocket").animate({
						left: SunLocation.left,
						top: SunLocation.top
					}, {
						duration: 3000,
						/*complete: function(){
							add stuff for completion of movement	.delay(3000)
						}*/
					});
					setTimeout(function(){
						$( "#rocket" ).fadeOut( "slow", function() {
							//$('#rocket').show();
							$("#rocket").fadeIn("slow");
							$("#rocket").offset({top: 88, left: 274}); //StartingRocketLocation
							$("#dialog").dialog("option", "title", "Ouch!");
							$("#dialog").dialog("open");
						});
					}, 3000);
				});
				
				$('#black_hole').click(function(event){
					var RocketLocation = $("#rocket").parent().offset();
					var Black_holeLocation = $("#black_hole").offset();
					$("#rocket").animate({
						left: Black_holeLocation.left,
						top: Black_holeLocation.top
					}, 3000, function(){
							$("#black_hole").animate({
								top: "-=20%",
								left: "-=78%",
								width: "100%",
								height: "100%"
							}, 3000);
							$("body").animate({
								opacity: 0
							}, 3000, function(){
								window.location.assign("blackhole.php")
							});
					});
				});
				
				$('#rocket').click(function(event){
					$(".container").animate({
						opacity: 0
					}, 3000, function(){
						window.location.assign("spaceStation.php")
					});
				});
				
				$('#spaceship').click(function(event){
					if (document.URL == "https://45.79.10.14/blackhole.php"){
						$("#dialog").dialog("option", "title", "Ohhh Myyy!");
						$("#dialog").dialog("option", "width", 600);
					}
					else {
						$("#dialog").dialog("option", "width", 600);
						$("#dialog").dialog("option", "title", "Hello!");
					}	
					$("#dialog").dialog("open");
				});
				
				$("#stage").click(function(event){
					var RocketLocation = $("#rocket").parent().offset();
					$("#rocket").animate({
						left: event.pageX - RocketLocation.left,
						top: event.pageY - RocketLocation.top
					}, {
						duration: 3000,
						/*complete: function(){
							add stuff for completion of movement
						}*/
					});
				});
				
				$( "#dialog" ).dialog({
					autoOpen: false,
					show: {
					effect: "blind",
					duration: 1000
					},
					hide: {
					effect: "explode",
					duration: 1000
					}
				});
				/*$( "#dialog" ).dialog( "option", "position", { my: "left top", at: "left bottom", of: opener } );*/
				
			});
			
			function planetNav(nav) {	//function for ajax handling of all planets

				var country = $('#country').val();
				if (country){
					country = country.toLowerCase();
				}
				
				var xmlHttp = xmlHttpObjCreate();
				if (!xmlHttp) {
					alert("Sorry, but your browser does not support AJAX.");
					return;
				}
			
				xmlHttp.onreadystatechange = function() {
			
					if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
						
						var contentBox = document.getElementById('contentBox');
					
						if (nav == '?content=home') {	//home button
							$("#dialog").dialog("option", "title", "Engage Hyperdrive!");
							$("body").animate({
								opacity: 0
							}, 3000, function(){
								window.location.assign("home.php")
							});
						}
				
						else if (nav == '?content=video') {		//video button
							$("#dialog").dialog("option", "title", "Grab some popcorn, sit back and enjoy!");
							contentBox.innerHTML = xmlHttp.responseText;
							$( "#dialog" ).dialog({
								position: ['center']
							});
						}
				
						else if (nav == '?content=high_five') {								//high_five button
							$('#video').hide();
							$("#dialog").dialog("option", "title", "Yeah!");
							contentBox.innerHTML = xmlHttp.responseText;
							$( "#dialog" ).dialog({
								position: ['center']
							});
						}
							
						else if (nav == '?content=cry') {								//cry button
							$('#video').hide();
							$("#dialog").dialog("option", "title", "There there...");
							contentBox.innerHTML = xmlHttp.responseText;
							$( "#dialog" ).dialog({
								position: ['center']
							});
						}
						
						else if (nav == '?content=answer'){
							if (country == 'italy'){
								$("#dialog").dialog("option", "title", "That's it!");
								$('#earth_home').show();
								$('#earth_learn').show();
								$('#tryAgain').show();
							}
							else{
								$("#dialog").dialog("option", "title", "Woops!");
							}
							contentBox.innerHTML = xmlHttp.responseText;
						}
				
					}
				
				}
		
				document.getElementById('contentBox').innerHTML = 'Loading<br><br>';
					
				xmlHttp.open('GET', 'https://45.79.10.14/ajaxHandler.php' + nav + "&country=" + country, true);
					
				xmlHttp.send();
				
			}
				
			function tryAgain(){
			
				var xmlHttp = xmlHttpObjCreate();
				if (!xmlHttp) {
					alert("Sorry, but your browser does not support AJAX.");
					return;
				}

				xmlHttp.onreadystatechange = function() {
			
					if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
						
						var resp = document.getElementById('contentBox');
						
						$('#earth_home').hide();
						$('#earth_learn').hide();
						$('#tryAgain').hide();
					
						$("#dialog").dialog("option", "title", "Hello!");
	
						resp.innerHTML = xmlHttp.responseText;
					
					}
				
				}
			
				document.getElementById('contentBox').innerHTML = 'Loading<br><br>';

				xmlHttp.open('GET', 'https://45.79.10.14/ajaxHandler.php?content=tryAgain', true);

				xmlHttp.send();
			
			}