
<?php  
require('../model/User.php');

	$fname = $lname = $address = $email = $phone = $qua = $work = "";

	if ($_SERVER['REQUEST_METHOD'] === "POST"){

			function test_input($data){
				$data = trim($data);
				$data = stripcslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}

			$fname = test_input($_POST['fname']);
			$lname = test_input($_POST['lname']);
			$address = test_input($_POST['address']);
			$email = test_input($_POST['email']);
			$phone = test_input($_POST['phone']);			
			$qua = test_input($_POST['qua']);
			$work = test_input($_POST['work']);
			

			$message = "";
			if(empty($fname)) {

				$message .= "First Name is Empty";
				$message .= "<br>";
			}
			else{
				if (!preg_match("/^[a-zA-Z-' ]*$/",$fname)) {
					$message .= " Frist name Only letters and spaces";
					$message .= "<br>";
				}
			}
			if (empty($lname)) {
				$message .= "Last Name is Empty";
				$message .= "<br>";
			}
			else{
				if (!preg_match("/^[a-zA-Z-' ]*$/",$lname)) {
					$message .= "Last name Only letters and spaces";
					$message .= "<br>";
				}
			}
			
			if (empty($address)) {
				$message .= "Street/House/Road is Empty";
				$message .= "<br>";
			}
			if (empty($email)) {
				$message .= "Email is Empty";
				$message .= "<br>";
			}
			else {
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					$message .= "Please correct your email";
					$message .= "<br>";
				}
			}
			if (empty($phone)) {
				$message .= "Mobileno is Empty";
				$message .= "<br>";
			}
			if (empty($qua)) {
				$message .= "Qualification is Empty";
				$message .= "<br>";
			}
			if (empty($work)) {
				$message .= "Work Experience is Empty";
				$message .= "<br>";
			}

			
		
			if ($message === ""){



				$user = $_SESSION['username'];

				$flag = updateprofile($fname, $lname, $address, $email, $phone, $qua, $work, $user);
				
				

				if($flag) {

					$_SESSION['update'] = "Profile Updated Successfully";
					header("Location: ../view/admineditprofile.php");
				}
			}
			else{
				$_SESSION['update'] = $message;
				header("Location: ../view/admineditprofile.php");
			}
	}
	


			
			
		

?>