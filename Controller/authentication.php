<?php 
if (session_status() === PHP_SESSION_NONE) {
    // start the session
    session_start();
}
$_SESSION['status'] = "";



	if(isset($_COOKIE["username"]) && isset($_SESSION['auth']))
	 {

      $expire=strtotime($_COOKIE["exusername"]);
	  
	  if($expire>time())
	  {
         unset($_COOKIE["username"]);
		 unset($_COOKIE["exusername"]);	 
		 $_SESSION["auth"]=null;
		 session_unset();
		 session_destroy();
	
		 echo 'expired';
      }
	  
	}
	else
	{
		unset($_COOKIE["username"]);
		unset($_COOKIE["exusername"]);	 
		$_SESSION["auth"]=null;
		session_unset();
		session_destroy();
		header("Location: ../view/adminlogin.php");
		return;
	}  

	 
?>
