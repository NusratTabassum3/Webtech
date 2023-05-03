<?php 
	if (session_status() === PHP_SESSION_NONE) {
		// start the session
		session_start();
	}
	require('../model/User.php');
	
	$username = "";
	$password = "";
	$role = "";
	if(!isset($_COOKIE["username"]) && !isset($_SESSION['auth']))
	{
		if($_SERVER['REQUEST_METHOD'] === "POST"){
			function test_input($data) {
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}
			$username = test_input($_POST['username']);
			$password = test_input($_POST['password']);
			$message = "";
			if(empty($username)){
					$message .= "Username can't be Empty";
					$message .= "<br>";
				}
			if(empty($password)){
					$message .= "Password can't be Empty";
					$message .= "<br>";
			}
			if($message === ""){
				$flag = Checklogin($username, $password);
				
				$name = viewprofile($username, $password);
				$x = $name[0]['lastname'];
				$y = $name[0]['firstname'];
				
				if($flag){
	
					$_SESSION['auth'] = "Admin";
					$_SESSION['username'] = $username;
					$_SESSION['password'] = $password;
					$_SESSION['lastname'] = $x;
					$_SESSION['firstname'] = $y;
					setcookie("username",$username,time()+30,"/","localhost");
					setcookie("exusername" ,time()+30 , time()+30,"/","localhost");
					
					header("Location: ../view/admindashboard.php");
				}			
				else
				{
					$_SESSION['error'] = "Please correct your username/password";
			
				}
			}
			else
			{
				$_SESSION['error'] = $message;
				//header("Location: ../view/adminlogin.php");
			}	
		}
	}
	else{
		 header("Location: ../view/admindashboard.php");
		 return;
	}
	
?>