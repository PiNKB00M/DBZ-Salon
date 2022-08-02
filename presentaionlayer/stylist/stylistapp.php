<?php include '../../datalayer/bookserver.php '; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Stylist</title>
	<link rel="stylesheet"  href="style3.css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
	<h1>DBZ<span>Salon</span></h1>
		<nav>
		


		
		<ul> 
			
		
			<li><a href="index2.php">My Info</a></li>
			<li><a href="stylistapp.php">My Appointments</a></li>
			
			<li><a href="../../applicationlayer/Stylistcustomer.php">Logout</a></li>



	
			

		</ul>
		



	</nav>




</header>

<body>
	<h1 class="my1">My<span class="mys">Appointments</span></h1>

	<table class="table2">
		<tr>
		<th>Appointment ID</th>
		<th>Date</th>
		<th>Time</th>
		<th>Customer ID</th>
		<th>Customer Name</th>
		<th>Customer Address</th>
		<th>Customer Email</th>
		<th>Customer Contact Number</th>
		
		</tr>

		<?php $sqlsty="SELECT  * FROM bookapp , customers   WHERE StyID=('$stylistprofile') AND  customerID=UserID "  ;
		$resultsty=$mysqli->query($sqlsty);
		if(mysqli_num_rows($resultsty)>= 1){
			while ($rowsty=$resultsty->fetch_assoc()) {
				echo "<tr><td>".$rowsty["AppoID"]."</td><td>".$rowsty["Date"]."</td><td>".$rowsty["Time"]."</td><td>".$rowsty["UserID"]."</td><td>".$rowsty['Name']."</td><td>".$rowsty['Address']."</td><td>".$rowsty['Email']."</td><td>".$rowsty["ContactNumber"]."</td></tr>";
			}


			echo "</table";
	


		}

		?>
		
	</table>





</body>
</html>

