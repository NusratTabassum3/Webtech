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
				$message .= "Insert username to search";
				$message .= "<br>";
			}

			if($message === "")
			{	
				

				$_SESSION['search'] = search($username);

				if(isset($_SESSION['search'])){
					$_SESSION['fl']=true;
					header("Location: ../view/adminsearch.php");
				}
			}
			else
			{
				
				$_SESSION['errord'] = $message;
				header("Location: ../view/adminsearch.php");
			}
	}
	//header("Location: ../view/adminsearch.php");

?>