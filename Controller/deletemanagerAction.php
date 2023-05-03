<?php  

	require('../model/User.php');


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
				$message .= "Insert username to delete";
				$message .= "<br>";
			}

			if($message === "")
			{	
				$_SESSION['delete'] = deletem($username);

				if(isset($_SESSION['delete'])){
					$_SESSION['deleteman']='Delete successfully';
					header("Location: ../view/deletemanager.php");
				}
			}
			else
			{
				$_SESSION['deleteman'] = $message;
				header("Location: ../view/deletemanager.php");
			}
	}

?>