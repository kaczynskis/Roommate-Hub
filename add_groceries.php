<?php 
    session_start();
	$itemName=$_POST["itemName"];
	$itemDescription=$_POST["itemDescription"];
    $itemCount = $_POST["itemCount"];
    $requestedBy = $_SESSION["username"];

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

	$sql = "INSERT INTO groceries (itemname, itemdescription, itemcount, requestedby)
	VALUES ('$itemName', '$itemDescription', '$itemCount', '$requestedBy')";

	if ($conn->query($sql) === TRUE) {
	  header("location: groceries.php");
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>	