<?php

// This system is part of my code in 5 mintues project.
// This is a simple example of MySQLi with Prepared Statments.
// It simply is supposed to give the user a basic understanding of a email valibation and send system.
// This code it under the GNU Public Licence Version 3.
// Written in 5 minutes by LaughingQuoll.

	// Connection details
	$servername = "localhost";
	$username = "username";
	$password = "password";
	$dbname = "database";

	// Initiate the MySQLi connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection exists
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	}

	// Prepare the query and bind the params.
	$stmt = $conn->prepare("INSERT INTO users (firstname, lastname, email) VALUES (?, ?, ?)");
	$stmt->bind_param("sss", $firstname, $lastname, $email);

	// Set params and execute them.
	$firstname = "John";
	$lastname = "Smith";
	$email = "john@example.com";
	$stmt->execute();

	$firstname = "Bob";
	$lastname = "Jane";
	$email = "bob@example.com";
	$stmt->execute();

	echo "Sucessfully created the new records";

	// Close connections
	$stmt->close();
	$conn->close();

?>