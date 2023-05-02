<?php

	include('../Controller/AdminLoginAction.php');
	//include('../Controller/header.php');
	
	if(isset($_SESSION['status']))
	{
		echo $_SESSION['status'];
		$_SESSION['status'] = "";
	}
	

	$msg="";
    
    /*setcookie("user_detect","visited",time()+86400*7, "/");
    
    setcookie("location","some location",time()+86400*7, "/");
    
    if(isset($_COOKIE["user_detect"]))
    
    {
    
        $msg= "You have visited this site before.";
    
    }
    
    else{$msg= "Hi! This is the first time you visiting this site.";}*/

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
	<script src="JS/loginvalidation.js"></script>
	<title>Login</title>
	
</head>
<body >
	<br><br><br><br><br><br>
<h2><?php echo $msg; ?></h2>

    <br><br>
	<?php 


		if(isset($_SESSION['error'])){
			echo $_SESSION['error'] ;
			$_SESSION['error'] = "";
		}

		if(isset($_SESSION['as'])){
			echo $_SESSION['as'] ;
			$_SESSION['as'] = "";
		}
	 ?>
	<div class="login-form"  >
	<form style="margin-left:0rem;" method="post" action="../Controller/AdminLoginAction.php" novalidate onsubmit="return validate(this);">
	<table align='center'>
        <td>	
	<fieldset>
			<legend>Login page</legend>
			<label for="username">Username</label>
			<input type="text" name="username" id = "username" >
			<span id="errorusername"></span>
			<br><br>
			<label for="password">Password</label>
			<input type="text" name="password" id="password">
			<span id="errorpassword"></span>

			<br><br>
			<h3><input type="checkbox" name="rememberMe" id="rememberMe">Remember me</h3>

			<br><br>
			
			<br><br>
			
			<p><input type="submit" value="LogIn" name='submit'></p>
			<br><br>
			
		</fieldset>
	</td>
	</table>
	<p>Don't have an account?<a href="adminregistration.php">Registration Here</a></p>
	</form>
	</div>
</body>
</html>
<?php

//require('../Controller/footer.php');

?>

