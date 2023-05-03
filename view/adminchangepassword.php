<?php 
    include('../Controller/authentication.php');
	require('../Controller/AdminChangePasswordAction.php');
	include('../Controller/header.php');
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="CSS/stylee.css">
	<link rel="stylesheet" type="text/css" href="CSS/homestyle.css">
	<script src="JS/changepassword.js"></script>
	<title>Change Password</title>
	
</head>
<body  >

	


	<div class="change-pass">
		
		<form method="post" action="../Controller/AdminChangePasswordAction.php" novalidate onsubmit="return validate(this);">
			<fieldset >
				<h1 align ="center">Change Password</h1>
				<br><br>
				<label for="uname">Username</label>
				<input type="text" id="uname" name="username" required value="<?php echo $_SESSION['username']; ?>">
				<span id="erroruname"></span>

				<br><br>

				<label for="oldpass">Old Password</label>
				<input type="text" id="oldpass" name="oldpass" required value="<?php echo $_SESSION['password']; ?>">
				<span id="erroroldpass"></span>
				
				<br><br>

				<label for="newpass">New Password</label>
				<input type="text" id="newpass" name="newpass">
				<span id="errornewpass"></span>
				<br><br>

				<input type="submit" name="submit" value="Change Password">
				<br><br>
				<a href="admindashboard.php">Go to dashboard </a>
			</fieldset>
		</form>

	</div>

<br><br>

</body>
</html>
<?php

require('../Controller/footer.php');

?>

