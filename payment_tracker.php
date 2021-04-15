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
				<form method="post" action="add_payment.php" id="addPayment" style="background-color: #aaa">
					<h3>Add a debt:</h3>
					<p>
						<label>Amount owed: $</label>
						<input type="text" name="amount" required/>
						<label>borrower:</label>
						<select name="roommate" id="roommateDropdown" required>
							<?php
								$isDropdown = true;
								include 'get_roommates.php';
							?>
						</select>
					</p>
					<p>
						<label for="paymentDescription">For what?:</label>
						<textarea id="paymentDescription" name="paymentDescription" rows="1" cols="50"></textarea>
					</p>
					<input type="submit"/>
				</form>
			</newItemContainer>

			<?php
				$applyToMe = "";
				include 'get_payments.php';
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