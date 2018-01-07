<?php
	if(!($_SERVER['HTTPS'])){
		header('Location: https://45.79.10.14/login.php');
	}//endif
	
	session_start(); //start session in order to use $_SESSION variables
	
	require_once("../../../secure/database.php");
	
	$conn = pg_connect(HOST." ".DBNAME." ".USERNAME." ".PASSWORD)
	or die('Could not connect: ' . pg_last_error()); //error if could not connect to database
	if(isset($_POST['login'])){			//if submit button is pushed
		$_SESSION['login_attempt'] = 'true';
		$usn = $_POST['username']; //username to check against authentication table
		$pw = $_POST['password'];	//password to check against authentication table

		$query = 'SELECT password_hash, salt FROM f_proj.authentication WHERE username = $1'; //grabbing current password and salt from authentication table
		$result = pg_prepare($conn, "grab_salt", $query) or die ("Unable to prepare: " . pg_last_error($conn));//prepare statement
		$result = pg_execute($conn, "grab_salt", array($usn)); //execute
		
		if(!$result){ //error if no value in $result	
			die("Unable to execute: " . pg_last_error($conn));
		}
		else{

			$row = pg_fetch_assoc($result);
			$salt = $row['salt'];	//hashed salt from authentication table
			$password_hash = $row['password_hash']; //hashed pw from authentication table

			$pwhash = sha1( $pw . $salt ); //hashing user-entered password and salt from table
			if ($pwhash == $password_hash){ //check if new salted/hashed pw is the same as the hashed pw from the authentication table
				$_SESSION['username'] = $usn; //if it is, begin the user session (login)
				
				$date = date("m/d/y G:i:s");	//get date user logged in
				$ip = $_SERVER['REMOTE_ADDR']; //get ip user logged in from
				$action = 'login';				//action is login
				$query = 'INSERT INTO f_proj.log (username, log_date, action) VALUES ($1, $2, $3)'; //insert values into log table
		
				$result = pg_prepare($conn, "insert_log", $query) or die ("Unable to prepare: " . pg_last_error($conn));//prepare statement
				$result = pg_execute($conn, "insert_log", array($usn, $date, $action)); //execute
				if(!$result){ //error if no value in $result	
					die("Unable to execute: " . pg_last_error($conn));
				}
				else{ //if query is successful, redirect to home.php
					header('Location: https://45.79.10.14/home.php');
				}
			}
			else{ //if new pw is NOT the same as pw from authentication table, give error
				header('Location: https://45.79.10.14/home.php');
			}
		}
		pg_free_result($result);
        pg_close($conn);
		return;
	}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>CS2830 Final project</title>
		
		<?php include("header/header.php"); ?>
		
		<style>
		
			body {
				background-image:url("images/background/stardust.png");
			}
		
			.panel{
				text-align: center;
			}
			
			.col-centered {
				float: none !important;
				margin: 0 auto !important;
			}
			
			.panel-heading,
			.panel-default,
			.panel-body {
				border-radius: 20px !important;
			}
			
			.panel-heading {
				background: #6682b5 !important;
				color: white;
				font-size: large;
				text-align: center;
			}
			
			.panel-body,
			.panel-default {
				background: #E0EAF8;
			}
			
			h1 {
				color: white;
			}
			
		</style>
		
    </head>
    <body>

		<div class="container">  <!--file submission form-->
			<div class="row">
				<div class="col-md-6 col-centered">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h1>Login Form</h1>
						</div>
						<div class="panel-body col-centered">
								<form action="https://45.79.10.14/login.php" method="post" enctype="multipart/form-data">
								<br>
								<div class="form-group">
									<input type="text" name="username" id="username" style = "width: 200px; height: 30px;" class="form-control col-centered" maxlength = 20 placeholder="User Name" required="" autofocus>
									<br>
								</div>
								<div class="form-group">
									<input type="password" name="password" id="password" style = "width: 200px; height: 30px;" class="form-control col-centered" maxlength = 20 placeholder="Password" required="">
									<br>
								</div>
								<button type="submit" name="login" class="btn btn-primary">Login</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		
    </body>
</html>
