<?php 
	include('../Controller/authentication.php');
	//require('../Controller/AdminLoginAction.php');
	include('../Controller/header.php');
	
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="CSS/stylee.css">
	<link rel="stylesheet" type="text/css" href="CSS/homestyle.css">	
	<title>Manage Customer</title>
	
</head>
<body >
				
	<br><br>
	<fieldset>
	<br><br><br><br><br><br><br><br>
	<h1>Welcome to Customer Management</h1>
	<br><br>

	<a href="../Controller/AllcustomerViewAction.php">View All Customer</a>
	<br><br>
	<a href="searchcustomer.php">Search Customer</a>
	
	<br><br>
	<a href="addcustomer.php">Add Customer</a>
	<br><br>

	<a href="deletecustomer.php">Delete Customer</a>
	<br><br>

	<a href="admindashboard.php">Goto Homepage</a>
</fieldset>
	<br><br>
	
	


</body>
</html>
<?php

require('../Controller/footer.php');

?>

