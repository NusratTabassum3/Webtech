<?php 
	require('../controller/authentication.php');
	require('../Controller/addcustomeraction.php');
    include('../Controller/header.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="CSS/stylee.css">
	<link rel="stylesheet" type="text/css" href="CSS/homestyle.css">	
	<title>Registration</title>

</head>
<body>
</head>
<body>
	<div class="login-form">
		<form method="post" action="../Controller/addcustomeraction.php" novalidate onsubmit="return validate(this);">
			<fieldset>
				<legend>Add Customer</legend>
				<label>First Name:</label>
				<input type="text" name="fname" id='fname' >
				<br>
				<label>Last Name:</label>
				<input type="text" name="lname" id= "lname" >
				<br>

                <label for="gender">Gender</label>
				<br>
				<input type="radio" id="gender" name="gender" value="Female">
				<label>Female</label>
				<br>
				<input type="radio" id="gender" name="gender" value="Male">
				<label>Male</label>
                <br>
				
				<label for="dob">Date of Birth</label>
				<input type="Date" id="dob" name="dob" value = "<?php echo $dob; ?>">
				<br>
				

				<br>

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
				
			
				<br><br>

				<label for="address">Address</label>
				<input type="text" id="address" name="address" value = "<?php echo $address; ?>">
				<br>
				
				<br><br>

				<label for="email">Email</label>
				<input type="text" id="email" name="email" value = "<?php echo $email; ?>">
				<br>
			

				<br>

				<label for="phone">Phone Number</label>
				<input type="Number" id="phone" name="phone" value = "<?php echo $phone; ?>">
				<br>
				

				<br>

				<label>Username</label>
				<input type="text" name="uname" id='uname' value = "<?php echo $uname; ?>" >
				<br><br>
                

				<input type="submit" name="submit" value="Add">
				<br>
				<a href="admindashboard.php">Go to dashboard </a><br>
				<a href="allcustomerView.php">View All customer </a><br>
                <a href="managecustomer.php">Go Back </a>
			</fieldset>
            <br>
		</form>
	</div>
	<?php 
		if(isset($_SESSION['addcus'])){
			echo $_SESSION['addcus'] ;
			$_SESSION['addcus']=' ';

		}
	?>
</body>
</html>
<?php include('../Controller/footer.php')  ?>