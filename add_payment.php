<?php 
    session_start();
	$paymentName=$_POST["amount"];
	$borrower=$_POST["roommate"];
    $owedTo=$_SESSION["username"];
    $paymentDescription = $_POST["paymentDescription"];

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

	$sql = "INSERT INTO payments (amount, borrower, owedto, paymentdescription)
	VALUES ('$paymentName', '$borrower', '$owedTo', '$paymentDescription')";

	if ($conn->query($sql) === TRUE) {
	  header("location: payment_tracker.php");
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>	