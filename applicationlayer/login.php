<?php include('../datalayer/server.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Customer</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
	<h2>Customer Login</h2>
</div>

<form method="post" action="login.php">

	<?php include ('../datalayer/errors.php')?>

	<div class="input-group">
		<label>User ID</label>
		<input type="text" name="UserID">

	</div>




	<div class="input-group">
		<label>Password</label>
		<input type="Password" name="Password">



	<div class="input-group">
		<button type="submit" name="Login" class="btn"> Login</button>
	</div>

	<p>
		Not a member? <a href="1st.php">Sign Up </a>
	</p>
	




</form>

</body>
</html>