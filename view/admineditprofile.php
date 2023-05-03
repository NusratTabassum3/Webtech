<?php 
	include('../Controller/authentication.php');
	require('../Controller/AdminUpdateProfileAction.php');
	include('../Controller/header.php');

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Update Profile</title>
	<link rel="stylesheet" type="text/css" href="CSS/stylee.css">
	<link rel="stylesheet" type="text/css" href="CSS/homestyle.css">	
	<script src="JS/editvalidation.js"></script>
		
</head>
<body>
	<div class="login-form">
		<form method="post" action="../Controller/AdminUpdateProfileAction.php" novalidate onsubmit="return validate(this);">
			<fieldset>
				<legend>Edit Profile Form</legend>
				<label>First Name:</label>
				<input type="text" name="fname" id='fname' value = "<?php echo $fname; ?>">
				<br><br>
				<label>Last Name:</label>
				<input type="text" name="lname" id= "lname" value = "<?php echo $lname; ?>">
				<br><br>
				<label form="address">Address:</label>
				<input type="text" id="address" name="address" value = "<?php echo $address; ?>">
				<span id="erroraddress"></span>
				<br><br>
				<label for="email">Email:</label>
				<input type="text" id="email" name="email" value = "<?php echo $email; ?>">
				<span id="erroremail"></span>
				<br><br>
				<label for="phone">Phone Number</label>
				<input type="Number" id="phone" name="phone" value = "<?php echo $phone; ?>">
				<span id="errorphone"></span>
				<br><br>
				<label for="qua">Qualification:</label>
				<input type="text" id="qua" name="qua" value = "<?php echo $qua; ?>">
				<span id="errorqua"></span>
				<br><br>
				<label for="work">Work Experience</label>
				<input type="text" id="work" name="work" value = "<?php echo $work; ?>" >
				<span id="errorwork"></span>
				<br><br>		
				<label>Username</label>
				<input type="username" name="username" value = "<?php echo $_SESSION['username']; ?>" >
				<br><br>
				<input type="submit" name="submit" value="Update">
				<br><br>
				<a href="admindashboard.php">Go to dashboard </a><br>
				<a href="../Controller/AdminViewProfileAction.php">View profile </a>
			</fieldset>
		</form>
	</div>
	<!-- <?php 
		if(isset($_SESSION['update'])){
			echo $_SESSION['update'] ;
			//$_SESSION['update']=' ';

		}
	?> -->
</body>
</html>
<?php include('../Controller/footer.php')  ?>