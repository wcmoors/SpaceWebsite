<?php
		////begin authentication insert
	
		require_once("../../../secure/database.php");
	
		$conn = pg_connect(HOST." ".DBNAME." ".USERNAME." ".PASSWORD)
		or die('Could not connect: ' . pg_last_error()); //error if could not connect to database
		
		$usn = "test"; //username to check against authentication table
		$pw = "pass";	//password to check against authentication table
		
		$salt = sha1(mt_rand());	//create a random/hashed salt
		$pwhash = sha1( $pw . $salt ); //hash the user-given password with the random salt	
		
		$query = 'INSERT INTO f_proj.authentication (username, password_hash, salt) VALUES ($1, $2, $3)';
		
		$result = pg_prepare($conn, "insert_authentication", $query) or die ("Unable to prepare: " . pg_last_error($conn));//prepare statement
		$result = pg_execute($conn, "insert_authentication", array($usn, $pwhash, $salt)); //execute
		
		if(!$result){ //error if no value in $result
			echo "Unable to add user account information.  Please try again.<br />";
		}
		else{
			
				//if inserts into user_info and authentication were successful, insert into log
			
			$date = date("m/d/y G:i:s"); //get registration date
			$action = 'registration';	//action is registration
			$query = 'INSERT INTO f_proj.log (username, log_date, action) VALUES ($1, $2, $3)'; //insert values into log table for this user
		
			$result = pg_prepare($conn, "insert_log", $query) or die ("Unable to prepare: " . pg_last_error($conn));//prepare statement
			$result = pg_execute($conn, "insert_log", array($usn, $date, $action)); //execute
		
			if(!$result){ //error if no value in $result
				echo "Unable to add user account information.  Please try again.<br />";
			}
			else{ //if all inserts were successful redirect to home.php (login page)
				echo "insert successful";
			}
		}
				
				
		////end authentication insert
?>