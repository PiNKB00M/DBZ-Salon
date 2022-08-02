<?php include '../../datalayer/bookserver.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet"  href="style5.css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
	<h1>DBZ<span>Salon</span></h1>
		<nav>
		


		
		<ul> 
			
		
		
			<li><a href="index3.php">Add/Delete Stylist</a></li>
			<li><a href="viewstylist.php">View Stylists</a></li>
			<li><a href="viewcustomers.php">View Customers</a></li>
			<li><a href="viewappointments.php">View Appointments</a></li>
			


			<li><a href="../../applicationlayer/Stylistcustomer.php">Logout</a></li>

			


	
			

		</ul>
		



	</nav>




</header>

<body>
	<h1 style="margin-left:35% ;margin-top:80px"   class="asd">Stylists Information</h1>
	<table class="table4">
		<tr>
		<th>Stylist ID</th>
		<th>Stylist Name</th>
		<th>Email</th>
		<th>Address</th>
		<th>Contact Number</th>
		<th>Password</th>
		<th>Service</th>

		</tr>

		<?php $sql3="SELECT  * FROM  stylist " ;
		$result3=$mysqli->query($sql3);
		if(mysqli_num_rows($result3)>=1){
			while ($row3=$result3->fetch_assoc()) {

				echo "<tr><td>".$row3["StylistID"]."</td><td>".$row3["Stylistname"]."</td><td>".$row3["email"]."</td><td>".$row3["Address"]."</td><td>".$row3['ContactNumber']."</td><td>".$row3['Password']."</td><td>".$row3["services"]."</td></tr>";
			}


			echo "</table";
	


		}

		?>
		
	</table>
</body>
</html>