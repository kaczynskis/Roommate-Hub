<?php 
	$username=$_POST["name"];
	$password=$_POST["password"];

	echo "User's Login Info:<br/><br/>";
	echo "Name = ".$username."<br/>";
	echo "Password = ".$password."<br/>";

	$servername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "roommate_hub";

	// Create connection
	$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "INSERT INTO users (username, password, room)
	VALUES ($username, $password, 0000)";

	if ($conn->query($sql) === TRUE) {
	  echo "New record created successfully";
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>	