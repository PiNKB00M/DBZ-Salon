<?php include '../../datalayer/bookserver.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Customer</title>
	<link rel="stylesheet"  href="style2.css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
	<h1>DBZ<span>Salon</span></h1>
		<nav>
		


		
		<ul> 
			
		
			<li><a href=" index.php">MyInfo</a></li>
			<li><a href=" book.php">Book Appointment</a></li>
			<li><a href=" view.php">View Appointment</a></li>
			<li><a href="cancel.php">Cancel Booking</a></li>
			
			<li><a href="../../applicationlayer/Stylistcustomer.php">Logout</a></li>
			



	
			

		</ul>
		



	</nav>




</header>

<body>
	<h1 class="my">My<span class="mys">Appointment</span></h1>

	<table class="table2">
		<tr>
		<th>Appointment ID</th>
		<th>Date</th>
		<th>Time</th>
		<th>Stylist ID</th>
		<th>Stylist Name</th>
		<th>Address</th>
		<th>Contact Number</th>
		<th>Service</th>

		</tr>
		<?php $sql3="SELECT  * FROM bookapp , stylist   WHERE customerID=('$userprofile') AND  StyID=StylistID "  ;
		$result3=$mysqli->query($sql3);
		if(mysqli_num_rows($result3)>=1){
			while ($row3=$result3->fetch_assoc()) {

				echo "<tr><td>".$row3["AppoID"]."</td><td>".$row3["Date"]."</td><td>".$row3["Time"]."</td><td>".$row3["StyID"]."</td><td>".$row3['Stylistname']."</td><td>".$row3['Address']."</td><td>".$row3['ContactNumber']."</td><td>".$row3["services"]."</td></tr>";
			}


			echo "</table";
	


		}

		?>
		
	</table>


	

		</tr>
		<?php $sql4="SELECT stylist.Stylistname,stylist.Address,stylist.ContactNumber,stylist.service FROM stylist " ;
		$result4=$mysqli->query($sql4);
		if(mysqli_num_rows($result4)>1){
			while ($row4=$result4->fetch_assoc()) {

				echo "<tr><td>".$row4["Stylistname"]."</td><td>".$row4["Address"]."</td><td>".$row4["ContactNumber"]."</td><td>".$row4["service"]."</td></tr>";
			}
			echo "</table";


	


		}

		?>
		
	</table>





</body>
</html>

