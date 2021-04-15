<?php 
	$choreName=$_POST["choreName"];
	$roommate=$_POST["roommate"];
    $choreDescription = $_POST["choreDescription"];

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

	$sql = "INSERT INTO chores (chorename, choredescription, assignedto)
	VALUES ('$choreName', '$choreDescription', '$roommate')";

	if ($conn->query($sql) === TRUE) {
	  header("location: chores.php");
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>	