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
	<h1>Welcome to Manager Management</h1>
	<br><br>

	<a href="../Controller/Allmanagerviewaction.php">View All Manager</a>
	<br><br>
	<a href="searchmanager.php">Search Manager</a>
	
	<br><br>
	<a href="addmanager.php">Add Manager</a>
	<br><br>

	<a href="deletemanager.php">Delete Manager</a>
	<br><br>

	

	<a href="admindashboard.php">Goto Homepage</a>
</fieldset>
	<br><br>
	
	


</body>
</html>
<?php

require('../Controller/footer.php');

?>

