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
    //applyToMe will be a WHERE clause in the Home page, and blank everywhere else.
    //The resulting groceries will only be those that apply to the logged in user.
    $sql = "SELECT itemname, itemdescription, itemcount, requestedby FROM groceries".$applyToMe;

    $result = $conn->query($sql);

    if (mysqli_num_rows($result) > 0) {
        //put each row into its own card
        while($row = $result->fetch_assoc()) {
            echo "<div class=\"card\">
                        <h5>".$row["itemcount"]." ".$row["itemname"]."(s)</h5>
                        <label>Description:</label>
                        <p>".$row["itemdescription"]."</p>
                        <p>Requested by: ".$row["requestedby"]."</p>
            </div>
            ";
        }
    }

	$conn->close();
?>