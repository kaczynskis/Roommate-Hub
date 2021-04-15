<?php
	session_start();
?>
<html>
<head>
	<link rel="stylesheet" href="roommate_hub.css">
</head>
<body>
	<!-- header -->
	<div class="header">
		<img src="user.png" id="user_image">
		<!-- Icons made by <a href="https://www.flaticon.com/authors/bqlqn" title="bqlqn">bqlqn</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div> -->
		<h1 id="title">Roommate Hub</h1>
	</div>
	<div class="row">
		<div class="column left" >
			<h2>Navigation</h2>
			<ul>
				<li>
					<a href="home.php" id="home">Home</a>
				</li>
				<li>
					<a href="chores.php" id="chores">Chores</a>
				</li>
				<li>
					<a href="groceries.php" id="groceries">Groceries</a>
				</li>
				<li>
					<a href="payment_tracker.php" id="payment_tracker">Payment Tracker</a>
				</li>
			</ul>
		</div>

		<div class="column middle">
			<?php
				echo "<h1 style=\"float: center\">Hello, ".$_SESSION["username"].".</h1>\n<h3 style=\"float: center\">This is everything related to you.</h3>";
			?>
			<h2>Payments:</h2>
			<?php
				$applyToMe = " WHERE ((borrower = '".$_SESSION["username"]."') OR (owedto = '".$_SESSION["username"]."'))";
				include 'get_payments.php';
			?>
			<h2>Chores:</h2>
			<?php
				$applyToMe = " WHERE assignedto = '".$_SESSION["username"]."'";
				include 'get_chores.php';
			?>
			<h2>Groceries:</h2>
			<?php
				$applyToMe = " WHERE requestedby = '".$_SESSION["username"]."'";
				include 'get_groceries.php';
			?>

		</div>
		
		<div class="column right">
			<h2>Roommate List</h2>
			
			<?php 
				$isDropdown = false;
				include 'get_roommates.php';
			?>
		</div>
	</div>
</body>
</html>