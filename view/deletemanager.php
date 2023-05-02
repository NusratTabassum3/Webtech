<?php 

	require('../Controller/deletemanagerAction.php');
	include('../Controller/header.php');
	
	include('../Controller/authentication.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="CSS/stylee.css">
	<link rel="stylesheet" type="text/css" href="CSS/homestyle.css">	
	<title>DELETE Operation</title>
	
</head>
<body >
<br><br>

	<div class="login-form">
		<form method="post" action="../Controller/deletemanagerAction.php" novalidate onsubmit="return validate(this);">
		<fieldset>
		<h1 align="center">Delete Manager</h1>
				<h3>Search by Username</h3>
				
				<label for="username">Enter Username to delete</label>	
				<input type="text" id="username" name="username">
				<input type="submit" name="submit" value="Delete">
				

				<br><br>
				
				<a href="admindashboard.php">Go to dashboard </a><br>
                <a href="allmanagerView.php">View All manager </a><br>
                <a href="managemanager.php">Go Back </a>
			</fieldset>
		</form>
		<br>


		<?php 	
			if(isset($_SESSION['deleteman'])){
					echo $_SESSION['deleteman'];
					$_SESSION['deleteman']=' ';
				}
		?>

		


	</div>
	<br><br><br>
    </body>
</html>
<?php include('../Controller/footer.php')  ?>
