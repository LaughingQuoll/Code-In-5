<?php

// This system is part of my code in 5 mintues project.
// This mail system contains very basic validation..
// It simply is supposed to give the user a basic understanding of a email valibation and send system.
// This code it under the GNU Public Licence Version 3.
// Written in 5 minutes by LaughingQuoll.

	// Check the form was submitted
	if(isset($_POST['submit'])){

		// Set the variables for easy intentification.
		$message = $_POST['message'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];

		// Check if the message variable was set.
		if(isset($message)){

			$check = 1;
			
		} else {

			$check = 0;
			echo 'Please enter a message';

		}

		// Check if the email variable was set.
		if(isset($email)){

			$check = 1;

		} else {

			$check = 0;
			echo 'Please enter your email';

		}

		// Check if the subject variable was set.
		if(isset($subject)){

			$check = 1;

		} else {

			$check = 0;
			echo 'Please enter a subject for the message';

		}

		// Now check if there were errors
		if($check == 0){

			die();

		} else {

			// Now email the question.
			mail($email, $subject, $message);

		}

	}

?>