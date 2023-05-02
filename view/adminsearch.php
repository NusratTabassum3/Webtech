<?php 

	require('../Controller/AdminSearchAction.php');
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
	<script src="JS/searchnursevalidation.js"></script>
	<title>Search Operation</title>
	
</head>
<body >
<br><br>

	<div class="login-form">
		<form method="post" action="../Controller/AdminSearchAction.php" novalidate onsubmit="return validate(this);">
		<fieldset>
		<h1 align="center">Search Admin</h1>
				<h3>Search by Username</h3>
				
				<label for="username">Enter Username to search.</label>	
				<input type="text" id="username" name="username">
				<input type="submit" name="submit" value="Search">
				<span id="erroruname"></span>
				

				<br><br>
				
				<a href="admindashboard.php">Go to dashboard </a>
			</fieldset>
		</form>
		<br>


		<?php 	
			if(isset($_SESSION['errord'])){
					echo $_SESSION['errord'];
					$_SESSION['errord']=' ';
				}
		?>

		<?php 	
			if(isset($_SESSION['searcha'])){
					echo $_SESSION['searcha'];
					$_SESSION['searcha']=' ';
				}
		?>


	</div>
	<br><br><br>
	<hr><br>

	
	<?php 
		if($_SESSION['fl']){
			if(isset($_SESSION['search']))
			{
				$x = $_SESSION['search'];
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
				echo "<th>Qualification</th>";
				echo "<th>Work Experience</th>";
				echo "<th>Type</th>";	
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
					echo "<td>" . $x[0]['qua'] . "</td>";
					echo "<td>" . $x[0]['work'] . "</td>";
					echo "<td>" . $x[0]['role'] . "</td>";
					echo "</tr>";
				}
				echo "</table>";
				echo "<br><br>";
			}
		
		else
		{
			
		}
	
	?>
	<br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>
<?php include('../Controller/footer.php')  ?>
