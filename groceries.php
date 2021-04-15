<html>
<head>
	<link rel="stylesheet" href="roommate_hub.css">
</head>
<body>
	<h1 id="title">Groceries</h1>

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
			<newItemContainer>
				<form method="post" action="add_groceries.php" id="addGroceries" style="background-color: #aaa">
					<h3>Add groceries:</h3>
					<p>
						<label>Item name:</label>
						<input type="text" name="itemName" required/>
						<label>Count:</label>
                        <input type="number" name="itemCount" required/>
					</p>
					<p>
						<label for="itemDescription">Description (140 characters):</label>
						<textarea id="itemDescription" name="itemDescription" rows="3" cols="50"></textarea>
					</p>
					<input type="submit"/>
				</form>
			</newItemContainer>

			<?php
				$applyToMe = "";
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