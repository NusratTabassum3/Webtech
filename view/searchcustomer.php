<?php 
    include('../Controller/authentication.php');
	require('../Controller/AdminSearchcustomerAction.php');
	include('../Controller/header.php');
	
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src = JS/searchcustomervalidation.js></script>
	<link rel="stylesheet" type="text/css" href="CSS/stylee.css">
	<link rel="stylesheet" type="text/css" href="CSS/homestyle.css">	
	<title>Search Operation</title>
	
</head>
<body >
<div class="login-form">
	<form method="post" action="../Controller/AdminSearchcustomerAction.php" novalidate onsubmit="return validate(this);">
	<fieldset >
<h1 align="center">Search Customer</h1>

				<h3 >Search by Username</h3>
				<br>


			<label for="username">Enter Username to search.</label>	
			<input type="text" id='username' name="username" value="<?php echo isset($username) ? $username : ""; ?>"  >
			<input type="submit" name="submit" value="Search">
			<span color="red" id="errorusername"></span>
			<br>
			<br><br>
			<a href="managecustomer.php">Go Back</a>

		</fieldset>
	</form>

</div>

	<br><br><br>
	<hr><br>

	<?php 

	if(isset($_SESSION['flagp'])){


		if($_SESSION['flagp']){


			if(isset($_SESSION['searchcustomer']))
			{

				$x = $_SESSION['searchcustomer'];

				echo "<table border=1>";
				echo "<tr>";
				echo "<th>Firstname</th>";
				echo "<th>LastName</th>";
				echo "<th>Gender</th>";
				echo "<th>Date of Birth</th>";
				echo "<th>Blood Group</th>";
				echo "<th>Address</th>";
				echo "<th>Email</th>";
				echo "<th>Phone No</th>";
				echo "<th>Username</th>";
				
				
				echo "</tr>";

				echo "<tr>";
				echo "<td>" . $x[0]['firstname'] . "</td>";
				echo "<td>" . $x[0]['lastname'] . "</td>";
				echo "<td>" . $x[0]['gender'] . "</td>";
				echo "<td>" . $x[0]['dob'] . "</td>";
				echo "<td>" . $x[0]['bg'] . "</td>";
				echo "<td>" . $x[0]['address'] . "</td>";
				echo "<td>" . $x[0]['email'] . "</td>";
				echo "<td>" . $x[0]['phone'] . "</td>";
				echo "<td>" . $x[0]['username'] . "</td>";
				echo "</tr>";
			


			echo "</table>";

			echo "<br><br>";
			}
		}

		else
		{
			echo "No data Found.";
		}

	}
	
	

	if(isset($_SESSION['errordatap'])){
		echo $_SESSION['errordatap'];
		$_SESSION['errordatap']=' ';
	}
	?>


</body>
</html>
<?php

require('../Controller/footer.php');

?>
