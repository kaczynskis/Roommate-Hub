<?php 
	$username=$_POST["name"];
	$password=$_POST["password"];

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

	$sql = "INSERT INTO user (username, password, room)
	VALUES ('$username', '$password', '0000')";

	if ($conn->query($sql) === TRUE) {
	  header("location: home.html");
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>	