<?php
	//Databse (DB) Information Here
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "december";

	//Create and Check DB connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
		die("Connection failed: ".$conn->connect_error);
	}

	//Create variables for each piece of information to be added to the DB table
	$title = $_POST["title"];
	$genre = $_POST["genre"];
	$rating = $_POST["rating"];

	//Create SQL string
	$sql = "INSERT INTO movie (title,genre,rating)
		VALUES ('$title', '$genre', '$rating')";

	//Send query, and check to ensure there are no errors
	if ($conn->query($sql) === TRUE){
		echo "New record created successfully";
	}
	else {
		"Error: ".$sql."<br>".$conn->error;
	}

	//Close DB connection
	$conn->close();
?>