William Moors

CS2830 Final Project Document

******************************************************************************************************************
NOTES: 

- NO LONGER MAINTAINED

- Line numbers in this document represent line numbers in Notepad++ text editor

- Pictures on homepage will appear AFTER scrolling text has finished, but you can navigate to other pages
  with the navbar instead of waiting to click on them.

******************************************************************************************************************

Project Criteria:

1)	* HTML 5 - the doctype and 5 required tags can be seen in the files for each separate webpage (ex: home.php)
	* no tables were used for content layout
	* CSS - most CSS styling can be seen here: css/cs2830FinalProject.css

2)	* consistent design/interface - the navbar that can be seen on every page of the website is located here: header/header.php

3)	* common element - the navbar is a good example for this criterion too.
						- changes to the navbar can be made here: header/header.php 
						- or here: css/cs2830FinalProject.css 
							- (starting at line 173)
					 - other common elements like the dialog boxes or the alien space ship can also be changed here: (css/cs2830FinalProject.css)
						- (dialog at line 106, spaceship at line 99)
		
4)	* content functions that are publicly available - everything except the black hole page: blackhole.php
	* content functions that are only available when logged in - blackhole.php 
		- (shows up on navbar after login as well as interactive image on home page)
	* visual cue that indicates user is logged in - alert on top right of home.php shows up upon successful or failed login attempt
		- code for the alert can be found in: home.php (starting at line 38)
	* ability to logout - appears on navbar after user is logged in
		- code can be found in: header.php (starting at line 60)
	* if user is not logged in, they cannot access protected page - blackhole.php
		- code is found in blackhole.php (at the top - it checks if the user is logged in)

5)	* username: test and password: pass must work to login - check
		- the authentication is done here: login.php
		- the database is created here: f_proj.sql
		- the database is filled with username: test and password: pass here: fill_authentication_table.php
			- (test and pass are set at lines 9 and 10)

6)	* the web application must utilize php - this is done in several places
		- one instance of php is used to check if user is logged in here: home.php (starting at line 37)
		- another instance is a separate php script for ajax handling here: ajaxHandler.php (the whole file)
		
7)	* use GET - this is done in the javascript for the ajax calls found in: cs2830FinalProject.js
		- You can find the use of GET by scrolling to the very bottom of the javascript file (line 334)
	* use POST - this is done in the form on the login page: login.php
		- (line 115)
		
8)	* use form elements beyond what is needed for the login form - this is done in: earth.php
		- (starting on line 35)
		
9)	* give user feedback on any user input - user input is given in two places: login.php and earth.php
		- feedback for login.php is found in the upper right hand corner after being redirected to home.php for login success or failure
			- (starting at line 37 in home.php)
		- feedback for earth.php is done through ajax
			- (ajaxHandler.php line starting at line 46)
			
10)	* a page with multiple photos presented on the page: home.php
		- photos of planets will appear after star wars scrolling text finishes
			- ***NOTE: PLANETS MAY NOT APPEAR ON BROWSERS OTHER THAN FIREFOX!***
			
11)	* a page with embed video - this is done on each planet page by first clicking on the alien space ship - then clicking on the "Learn More" button
		- my favorite is the embedded video of the live camera feed on spaceStation.php (line 47)
			- this is accessed via the Web GUI by clicking on the rocket on home.php
			
12) * must utilize javascript - although I mainly used jQuery, this is done here: jslibs/cs2830FinalProject.js
		- a specific instance of actual javascript is the use of the setTimeout function
			- (line 181)
			
13)	* must use jQuery - this is done here: jslibs/cs2830FinalProject.js
		- (most of the page is jQuery)
		
14)	* jQuery UI elements - this is done mainly through the dialog boxes on each planet's page 
		- html: (on earth.php line 33)
		- css: (starting on css/cs2830FinalProject.css line 106)
		- js: (starting on jslibs/cs2830FinalProject.js line 246)
		- (bootstrap was also used in the navbar on header.php as well as the form elements)
		
15) * must utilize AJAX - this is done through each planet's page
		- ajax php script here: ajaxHandler.php
		- ajax calls here: jslibs/cs2830FinalProject.js
			- (at bottome of page - starting at line 261)
