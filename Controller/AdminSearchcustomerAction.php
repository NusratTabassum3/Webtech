<?php  

	require('../model/User.php');
	session_start();
	include('authentication.php');

	$username = "";

	if($_SERVER['REQUEST_METHOD'] === "POST")
	{
		function test_input($data){
				$data = trim($data);
				$data = stripcslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}

			$username = test_input($_POST['username']);

			$message = "";
			if(empty($username)){
				$message .= "Insert username to search";
				$message .= "<br>";
			}

			if($message === "")
			{	
				$_SESSION['searchcustomer'] = searchcustomer($username);

				if(isset($_SESSION['searchcustomer'])){
					$_SESSION['flagp']=true;
					header("Location: ../view/searchcustomer.php");
				}
			}
			else
			{
				$_SESSION['errordatap'] = $message;
				header("Location: ../view/searchcustomer.php");
			}
	}

?>