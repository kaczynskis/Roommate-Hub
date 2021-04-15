<?php 
	session_start();
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

	$sql = "INSERT INTO user (username, password, room)
	VALUES ('$username', '$password', '0000')";
	$sql = "SELECT * FROM user WHERE username = '".$username."' AND password = '".$password."'";

	$result = $conn->query($sql);

	if (mysqli_num_rows($result) > 0) {
	  echo "New record created successfully";
	  $_SESSION["username"] = $username;
	  header("location: home.php");
	} 
	else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>	