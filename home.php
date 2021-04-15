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