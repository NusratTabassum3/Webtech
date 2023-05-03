<?php 
	require('../controller/authentication.php');
	require('../Controller/AdminRegistrationAction.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="JS/registrationvalidation.js"></script>
	<link rel="stylesheet" type="text/css" href="CSS/registration.css">
	<title>Registration</title>

</head>
<body>

    
   <?php 

		if(isset($_SESSION['as'])){
			echo $_SESSION['as'] ;

			$_SESSION['as'] = "";
		}

	 ?>
	  <table align='center'>
        <td>

<div class="registration-page">

	<div class="form">
		<form class="registration-form" method="post" action="../Controller/AdminRegistrationAction.php" novalidate onsubmit="return validate(this);">

			<fieldset>
				<legend class="reg-leg">Registration Form</legend>

				
				<label for="fname">First Name</label>
				<input type="text" id="fname" name="fname" value = "<?php echo $firstname; ?>">
				<span id="errorfname"></span>
				<br>
				

				<br><br>

				<label for="lname">Last Name</label>
				<input type="text" id="lanme" name="lname" value = "<?php echo $lastname; ?>">
				<span id="errorlname"></span>
				
				<br>
				

				<br><br>

				<label for="gender">Gender</label>
				<br>
				<input type="radio" id="gender" name="gender" value="Female">
				<label>Female</label>
				<br>
				<input type="radio" id="gender" name="gender" value="Male">
				<label>Male</label>
				
				<br>
				<span id="errorgender"></span>
				

				<br><br>

				<label for="dob">Date of Birth</label>
				<input type="Date" id="dob" name="dob" value = "<?php echo $dob; ?>">
				<br>
				

				<br><br>

				<label for="bg">Blood Group</label>
				<select name="bg" id="bg" value = "<?php echo $bg; ?>">
					<option>Apos</option>
					<option>Aneg</option>
					<option>Bpos</option>
					<option>Bneg</option>
					<option>Opos</option>
					<option>Oneg</option>
					<option>ABpos</option>
					<option>ABneg</option>
				</select>
				<br>
				<span id="errorbg"></span>
			
				
			
				<br><br>

				<label for="address">Address</label>
				<input type="text" id="address" name="address" value = "<?php echo $address; ?>">
				<br>
				<span id="erroraddress"></span>
				
				<br><br>

				<label for="email">Email</label>
				<input type="text" id="email" name="email" value = "<?php echo $email; ?>">
				<br>
				<span id="erroremail"></span>
			

				<br><br>

				<label for="phone">Phone Number</label>
				<input type="Number" id="phone" name="phone" value = "<?php echo $phone; ?>">
				<br>
				<span id="errorphone"></span>
				

				<br><br>

				<label for="qua">Qualification</label>
				<input type="text" id="qua" name="qua" value = "<?php echo $qua; ?>">
				<span id="errorqua"></span>
			
				<br><br>

				<label for="work">Work Experience</label>
				<input type="text" id="work" name="work" value = "<?php echo $work; ?>">
				<span id="errorwork"></span>
				
				<br><br>

				<label for="uname">Username</label>
				<input type="text" id="uname" name="uname" value = "<?php echo $uname; ?>">
				<span id="erroruname"></span>
				
				<br><br>


				<label for="pass">Password</label>
				<input type="text" id="pass" name="pass" value = "<?php echo $pass; ?>">
				<span id="errorpass"></span>
			
				<br><br>

				<label for="role">Role</label>
				<select name="role" id="role"> value = "<?php echo $role; ?> ">
					<option>Admin</option>
					<option>Manager</option>
					<option>Customer</option>
				</select>
				<br>
				<span id="errorroll"></span>
					
				</select>
				
				<br><br>

				<div class="submit">
				<p align="center"><input type="submit" value="Registration" name='submit'></p>
				</div>

				<br><br>
				<br><br>

				

			

			</fieldset>

		</form>
	
	</div>
</div>
</td>
	</table>

	<p align="center">Already have an account?<br>
    <a href="adminlogin.php">Click here for Log in!</a></p>
				
</body>
</html>