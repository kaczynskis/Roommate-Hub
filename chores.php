<html>
<head>
	<link rel="stylesheet" href="roommate_hub.css">
</head>
<body>
	<h1 id="title">Chores</h1>

	<div class="row">
		<div class="column left" >
			<h2>Navigation</h2>
			<ul>
				<li>
					<a href="home.php" id="home">Home</a>
				</li>
				<li>
					<a href="my_room.php" id="my_room">My Room</a>
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
			<h2>Sample Text</h2>
			<p>More Sample Text</p>
		</div>
		
		<div class="column right">
			<h2>Roommate List</h2>
			
			<?php include 'get_roommates.php';?>
		</div>
	</div>

</body>
</html>