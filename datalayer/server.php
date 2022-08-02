<?php 


session_start();
$errors=array();

$mysqli = new mysqli("localhost","root","","dbz_salon");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}




if (isset($_POST['Register'])) {

	



	$UserID 	= $mysqli -> real_escape_string($_POST['UserID']);
	$Username 	= $mysqli -> real_escape_string($_POST['Name']);
	$Address 	= $mysqli -> real_escape_string($_POST['Address']);
	$ContactNumber	 = $mysqli -> real_escape_string($_POST['ContactNumber']);
	$Email 		=  $mysqli -> real_escape_string($_POST['Email']);
	$Password 	= $mysqli -> real_escape_string($_POST['Password']);
	// $bloodtype 	= $mysqli -> real_escape_string($_POST['bloodtype']);
    
   




	if (empty($UserID)) {
	array_push($errors,"UserID is required");
	# code...
}

if (empty($Username)) {
	array_push($errors,"UserName is required");
	# code...
}


if (empty($Address)) {
	array_push($errors,"Address is required");
	# code...
}

if (empty($ContactNumber)) {
	array_push($errors,"Contact Number is required");
	# code...
}


if (empty($Email)) {
	array_push($errors,"Email is required");
	# code...
}

if (empty($Password)) {
	array_push($errors,"Password is required");
	# code...
}









if(count($errors)==0){


	$Password=md5($Password);

	$sql = "INSERT INTO  customers (UserID, Name, Address, ContactNumber, Email, Password) VALUES ('$UserID','$Username','$Address','$ContactNumber','$Email','$Password') ";
    
   


	if (!$mysqli -> query($sql)) {
  printf("%d Row inserted.\n", $mysqli->affected_rows);
    
 
}
    if(move_uploaded_file($_FILES['']))


  $_SESSION['UserID']=$UserID;
  $_SESSION['success']="you are now logged in";
  header('location:../presentaionlayer/customer/index.php');


}
	


	# code...
}




if (isset($_POST['Login'])) {

		$UserID 	= $mysqli -> real_escape_string($_POST['UserID']);
		$Password 	= $mysqli -> real_escape_string($_POST['Password']);
if (empty($UserID)) {
	array_push($errors,"UserID is required");
	# code...
}
if (empty($Password)) {
	array_push($errors,"Password is required");
	

		# code...
	}


	if (count ($errors)== 0) {

		$Password=md5($Password);
		
	

	$query="SELECT * FROM customers WHERE UserID=('$UserID')AND Password=('$Password')";
	$result=mysqli_query($mysqli,$query);
	if (mysqli_num_rows($result) ==1 )  {
	
	

	
	$_SESSION['UserID']=$UserID;
  	$_SESSION['success']="you are now logged in";
  header('location:../presentaionlayer/customer/index.php');
}  else{
		array_push($errors,"The ID/Password not correct");
		
	}
}
}


	# code...


if (isset($_GET['logout'])) {

	session_destroy();
	usset($_SESSION['UserID']);
	header('location:login.php');
	}


	if (isset($_GET['My info'])) {
	header('location:login.php');
	}



	$userprofile=isset($_SESSION['UserID']);
$query="SELECT * FROM customers WHERE UserID=('$userprofile')";
 $result= mysqli_query($mysqli, $query);
 $col= mysqli_fetch_assoc($result);







		






 if (isset($_POST['Login2'])) {

		$StylistID2	= $mysqli -> real_escape_string($_POST['stylistID']);
		$StylistPassword2= $mysqli -> real_escape_string($_POST['StylistPassword']);
if (empty($StylistID2)) {
	array_push($errors,"Stylist ID is required");
	# code...
}
if (empty($StylistPassword2)) {
	array_push($errors,"Password is required");
	

		# code...
	}


	if (count ($errors)== 0) {

	
		
	

	$queryD="SELECT * FROM stylist WHERE StylistID=('$StylistID2')AND Password=('$StylistPassword2')";
	$resultD=mysqli_query($mysqli,$queryD);
	if (mysqli_num_rows($resultD) ==1 )  {
	
	

	
	$_SESSION['StylistID']=$StylistID2;
  	$_SESSION['success']="you are now logged in";
  	header('location:../presentaionlayer/stylist/index2.php'); 
}  else{
		array_push($errors,"The ID/Password not correct");
		
	}
}
}




$stylistprofile=isset($_SESSION['StylistID']);
$querystylist="SELECT * FROM stylist WHERE StylistID=('$stylistprofile')";
 $resultdoctor= mysqli_query($mysqli, $querystylist);
 $colD= mysqli_fetch_assoc($resultdoctor);


 if (isset($_GET['logout'])) {

	session_destroy();
	usset($_SESSION['UserID']);
	header('location:login.php');
	}




?>

 </table>



<?php  

if (isset($_POST['Login3'])) {

		$adminID	= $mysqli -> real_escape_string($_POST['adminID']);
		$adminpassword= $mysqli -> real_escape_string($_POST['adminpassword']);
if (empty($adminID)) {
	array_push($errors,"Admin ID is required");
	# code...
}
if (empty($adminpassword)) {
	array_push($errors,"Password is required");
	

		# code...
	}


	if (count ($errors)== 0) {

	
		
	

	$queryA="SELECT * FROM admin WHERE AdminID=('$adminID')AND adminpassword=('$adminpassword')";
	$resultA=mysqli_query($mysqli,$queryA);
	if (mysqli_num_rows($resultA) ==1 )  {
	
	

	
	$_SESSION['AdminID']=$adminID;
  	$_SESSION['success']="you are now logged in";
  	header('location:../presentaionlayer/admin/index3.php'); 
}  else{
		array_push($errors,"The ID/Password not correct");
		
	}
}
}


 $mysqli -> close();



   
 ?>