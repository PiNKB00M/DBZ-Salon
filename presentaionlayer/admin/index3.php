<?php include ('../../datalayer/bookserver.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet"  href="style5.css" type="text/css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
	<h1>DBZ<span>Salon</span></h1>
		<nav>
		


		
		<ul> 
			
		
			<li><a href="index3.php">Add/Delete Stylist</a></li>
			<li><a href="viewstylist.php">View Stylists</a></li>
			<li><a href=" viewcustomers.php">View Customers</a></li>
			<li><a href="viewappointments.php">View Appointments</a></li>
			
  			<li><a href="../../applicationlayer/Stylistcustomer.php">Logout</a></li>

			



	
			

		</ul>
		



	</nav>




</header>
<body>

		<div class="headerA">
	<h2>Add Stylist</h2>
</div>

<form method="post" action="index3.php">

	<?php include ('../../datalayer/errors.php'); ?>

	<div class="input-groupA">
		<label>Stylist ID</label>
		<input type="text" name="addID" >

	</div>


	<div class="input-groupA">
		<label>Stylist Name</label>
		<input type="text" name="addname" >


	</div>

	<div class="input-groupA">
		<label>Address</label>
		<input type="text" name="addAddress">

	</div>

	<div class="input-groupA">
		<label>Contact Number</label>
		<input type="text" name="addContactNumber">


	</div>


	<div class="input-groupA">
		<label>Email Address</label>
		<input type="text" name="addEmail">

	</div>

	<div class="input-groupA">
		<label>Password</label>
		<input type="text" name="addpassword">

	</div>
<div class="input-groupA">
	<label>Service</label>
	   	<select name="addService" class="xd">
	   		<option value="Shampoo" >Shampoo</option>
	   		<option value="Relxer">Relxer</option>
	   		<option value="Smoothing">Smoothing</option>
	   		<option value="Color">Color</option>
	   		<option value="Haircut">Haircut</option>

	   		


	   	</select>
	   	</div>

	<div class="input-groupA">
		<button type="submit" name="Add" class="btnA">Add Stylist</button>
	</div>


	




</form>
	<div class="headerAD">
	<h2>Delete Stylist</h2>
</div>

<form method="post" action="index3.php" class="delete">

	<div class="input-groupA">
		<label>Stylist ID</label>
		<input type="text" name="deleteID" >

	</div>

	<div class="input-groupA">
		<button type="submit" name="Delete" class="btnA">Delete</button>
	</div>

</form>





	

</body>
</html>