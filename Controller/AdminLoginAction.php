<?php 
	session_start();
	require('../model/User.php');
	$username = "";
	$password = "";
	$role = "";

	$expire="";
	setcookie("username","user",time()+30,"/");
    setcookie("exusername" ,30 , time()+30);


     if(isset($_COOKIE["username"]))
	 {
             
      $expire=$_COOKIE["exusername"];
	  if($expire<time())
	  {
         unset($_COOKIE["username"]);
		 unset($_COOKIE["exusername"]);
		
		 header("Location: ../view/admindashboard.php");


	  }
	  else
	   {

		echo $expire;

	  }


	 }


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

				if(!empty($_POST['remember'])){

					setcookie('username',$_POST['username'],time() + 60*60*24);

					setcookie('password',$_POST['password'],time() + 60*60*24);
					
					header("Location: ../view/admindashboard.php");
				}
				else{

					setcookie('username', "");
					setcookie('password', "");
					header("Location: ../view/admindashboard.php");

				}
				

				
			}			
			else
			{
				$_SESSION['error'] = "Please correct your username/password";
				header("Location: ../view/adminlogin.php");
			}
		}
		else
		{
			$_SESSION['error'] = $message;
			header("Location: ../view/adminlogin.php");
		}	
	}
?>