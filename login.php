<?php

// This system is part of my code in 5 mintues project.
// This system is very insecure and could be greatly improved.
// It simply is supposed to give the user a basic understanding of a login system.
// In no way do I reccomend anyone use this for a website. Just use parts of it.
// This code it under the GNU Public Licence Version 3.
// Written in 5 minutes by LaughingQuoll.

	// Check if login page was submitted
	if(isset($_POST['submit'])){

		// Simplify the variables
		$username = $_POST['username'];
		$password = $_POST['password'];

		// Check the username is valid to the username provided.
		if($username == 'User'){
		$check = 0;
		} else {
		$check = 1;
		$error = "Username is not in database";
		}

		// If the username is valid continue
		if($check == 1){
		die();
		}

		// Now check the password
		if($password == 'Password'){
		$check = 0;
		} else {
		$check = 1;
		}

		// Now see if the password was valid
		if($check == 1){
		die();
		}

		// Now if all things are fine redirect to the system

		header('Location: http://www.example.com/');

	}

?>