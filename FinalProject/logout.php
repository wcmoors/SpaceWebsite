<?php
	session_start(); //start session so we can destroy it
	
	require_once("../../../secure/database.php");
	
	$conn = pg_connect(HOST." ".DBNAME." ".USERNAME." ".PASSWORD)
	or die('Could not connect: ' . pg_last_error()); //error if could not connect to database
	
	$usn = $_SESSION['username'];
	$date = date("m/d/y G:i:s");	//get date user logged in
	$action = 'logout';				//action is login
	
	$query = 'INSERT INTO f_proj.log (username, log_date, action) VALUES ($1, $2, $3)'; //insert values into log table
		
	$result = pg_prepare($conn, "insert_log", $query) or die ("Unable to prepare: " . pg_last_error($conn));//prepare statement
	$result = pg_execute($conn, "insert_log", array($usn, $date, $action)); //execute
	if(!$result){ //error if no value in $result	
		die("Unable to execute: " . pg_last_error($conn));
	}
	else{ //if query is successful, redirect to home.php
		session_destroy(); //destroy session (logout)
		header('Location: https://45.79.10.14/home.php');
	}
?>