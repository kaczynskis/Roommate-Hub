<?php
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

	$sql = "SELECT username, room FROM user";
    $result = $conn->query($sql);

    if (mysqli_num_rows($result) > 0) {
        //put each row into its own card
        while($row = $result->fetch_assoc()) {
            echo "<div class=\"card\">
                        <h5>".$row["username"]."</h5>
                        <h6>Room".$row["room"]."</h6>
            </div>
            ";
        }
    }

	$conn->close();
?>