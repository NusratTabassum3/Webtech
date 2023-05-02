<?php 

	require 'Connect.php';

	function registration($fname , $lname , $gen, $db, $blood, $add, $e, $ph, $qu, $wor, $user, $pass, $rol){
		$conn = connect();
		if($conn){
			$stmt = $conn->prepare("Insert INTO admininfo (firstname , lastname , gender, dob, bg, address, email, phone, qua, work, username, password, role ) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)");
			$stmt->bind_param("sssssssssssss", $firstname , $lastname , $gender, $dob, $bg, $address, $email, $phone, $qua, $work, $username, $password, $role);

			$firstname = $fname;
			$lastname = $lname;
			$gender = $gen;
			$dob = $db;
			$bg = $blood;
			$address = $add;
			$email = $e;
			$phone = $ph;
			$qua = $qu;
			$work = $wor;
			$username = $user;
			$password = $pass;
			$role = $rol;
			
			$stmt->execute();
			// die($stmt->error);
			return true;
		}
		else{
			return false;
		}
	}
	function addcustomer($fname , $lname , $gen, $db, $blood, $add, $e, $ph, $user){
		$conn = connect();
		if($conn){

			$stmt = $conn->prepare("Insert INTO customerinfo (firstname , lastname , gender, dob, bg, address, email, phone, username ) VALUES(?,?,?,?,?,?,?,?,?)");
			$stmt->bind_param("sssssssss", $firstname , $lastname , $gender, $dob, $bg, $address, $email, $phone, $username);

			$firstname = $fname;
			$lastname = $lname;
			$gender = $gen;
			$dob = $db;
			$bg = $blood;
			$address = $add;
			$email = $e;
			$phone = $ph;
			
			$username = $user;
			
			
			
			$stmt->execute();
			
			return true;
		}
		else{
			return false;
		}
	}

	function addmanager($fname , $lname , $gen, $db, $blood, $add, $e, $ph, $user, $pass){
		$conn = connect();
		if($conn){

			$stmt = $conn->prepare("Insert INTO employeeinfo (firstname , lastname , gender, dob, bg, address, email, phone, username, password ) VALUES(?,?,?,?,?,?,?,?,?,?)");
			$stmt->bind_param("ssssssssss", $firstname , $lastname , $gender, $dob, $bg, $address, $email, $phone, $username, $password);

			$firstname = $fname;
			$lastname = $lname;
			$gender = $gen;
			$dob = $db;
			$bg = $blood;
			$address = $add;
			$email = $e;
			$phone = $ph;
			
			$username = $user;
			$password = $pass;
			
			
			$stmt->execute();
			
			return true;
		}
		else{
			return false;
		}
	}

	/*function Checklogin($username, $password) {

		$conn = connect();
		if($conn){

		$sql = "Select id from `admininfo` WHERE  username= ? AND password= ? ";
			$stmt = $conn -> prepare($sql);
		$stmt->bind_param("ss", $username,$password );

		if($stmt -> execute() > 0){     
				$stmt->bind_result($username,$password);
	
				$rows = array();
				while ($stmt->fetch()) {
					$rows[] = array('username' => $username, 'password' => $password);
				}
				
				
				
				$stmt->close(); 
					return true;
			}
				
		}else{
				return false;
				
		}
			
			

		
	}*/

	
	/*function passwordchange($username, $oldpass, $newpass){

		$conn = connect();
		if($conn){

			$sql = "UPDATE `admininfo` SET $newpass = ? WHERE username = ?  AND password = ? ";
		
		 	$stmt=$conn->prepare($sql);
		 	$stmt->blind_param("sss" ,$newpass , $uname , $oldpass);

			 if($stmt->execute() > 0){ 
				
				
				$stmt->close();
		
				return true;
			 }
			}
			
			
		

		return false;
	}*/
	
	

function Checklogin($username, $password) {
		$conn = connect();
		if ($conn) {

			$sql = "SELECT id FROM admininfo WHERE username = '" . $username . "' and password = '" . $password . "'";

			$res = mysqli_query($conn, $sql);

			if ($res->num_rows === 1)
				return true;
			return false;
		}
	}

	

	function passwordchange($username, $oldpass, $newpass){

		$conn = connect();
		if($conn){
			$sql = "UPDATE `admininfo` SET `password` = '$newpass' WHERE username = '" . $username . "' and password = '" . $oldpass . "'";
			mysqli_query($conn, $sql);

			return true;

			
		}

		return false;
	}

	
	


	function getAll() {
		$conn = connect();
		if ($conn) {
			$sql = "SELECT * FROM admininfo";
			$res = mysqli_query($conn, $sql);
			$users = array();

			if ($res->num_rows > 0) {
				while($row = $res->fetch_assoc()) {
					array_push($users, $row);
				}
				return $users;
			}
		}
		return array();
	}


	function getallemployee()
	{
		$conn = connect();
		if ($conn) {
			$sql = "SELECT * FROM employeeinfo";
			$res = mysqli_query($conn, $sql);
			$users = array();

			if ($res->num_rows > 0) {
				while($row = $res->fetch_assoc()) {
					array_push($users, $row);
				}
				return $users;
			}
		}
		return array();
	}

	

	function getallcustomer(){
		$conn = connect();
		if ($conn) {
			$sql = "SELECT * FROM customerinfo";
			$res = mysqli_query($conn, $sql);
			$users = array();

			if ($res->num_rows > 0) {
				while($row = $res->fetch_assoc()) {
					array_push($users, $row);
				}
				return $users;
			}
		}
		return array();
	}



	

	function updateprofile($fname, $lname, $add, $mail, $ph, $qu, $wo, $uname){
		$conn = connect();

		if($conn){
			$sql = "UPDATE `admininfo` SET `firstname` = '$fname' , `lastname` = '$lname' , `address` = '$add' , `email` = '$mail' , `phone` = '$ph' , `qua` = '$qu' , `work` = '$wo' WHERE `username` = '$uname'";

			mysqli_query($conn, $sql);
			return true;
		}
		else{
			return false;
		}
	}

	

	function deletec( $uname){
		$conn = connect();

		if($conn){
			$sql = "Delete FROM customerinfo  WHERE `username` = '$uname'";

			mysqli_query($conn, $sql);
			return true;
		}
		
			else{
				$_SESSION['deletecus'] = "No data found";
				//$_SESSION['flagp'] = false;
				return false;
				
				header("Location: ../view/deletecustomer.php");
			}
			
		
	}
	function deletem( $uname){
		$conn = connect();

		if($conn){
			$sql = "Delete FROM employeeinfo  WHERE `username` = '$uname'";

			mysqli_query($conn, $sql);
			return true;
		}
		
			else{
				$_SESSION['deleteman'] = "No data found";
				//$_SESSION['flagp'] = false;
				return false;
				
				header("Location: ../view/deletemanager.php");
			}
			
		
	}


	function viewprofile($username, $password) {
		$conn = connect();
		if ($conn) {
			$sql = "SELECT firstname , lastname , gender, dob, bg, address, email, phone, qua, work, role FROM admininfo WHERE username = '" . $username . "' and password = '" . $password . "'";
			$res = mysqli_query($conn, $sql);
			$users = array();
			if ($res->num_rows > 0) {

				while($row = $res->fetch_assoc()) {
					array_push($users, $row);
				}
				return $users;
			}
		}
		return array();
	}



	

	function search($username) {
		$conn = connect();
		if ($conn){
			$sql = "SELECT firstname , lastname , gender, dob, bg, address, email, phone, qua, work, role FROM admininfo WHERE username = '$username'";
			$res = mysqli_query($conn, $sql);
			$users = array();

			if ($res->num_rows > 0) {

				while($row = $res->fetch_assoc()) {
					array_push($users, $row);
				}
				return $users;
			}
			else{
				
				$_SESSION['searcha'] = "No data found. Please insert correct username";
				$_SESSION['fl'] = false;
				return false;
				//("Location: ../view/adminsearch.php");
			}
		}
		//return array();
	}

	function searchcustomer($username) {
		$conn = connect();
		if ($conn){
			$sql = "SELECT firstname , lastname , gender, dob, bg, address, email, phone, username FROM customerinfo WHERE username = '$username'";
			$res = mysqli_query($conn, $sql);
			$users = array();
			echo "$users";
			if ($res->num_rows > 0) {

				while($row = $res->fetch_assoc()) {
					array_push($users, $row);
				}
				return $users;
			}
			else{
				$_SESSION['searchcustomer'] = "No data found";
				$_SESSION['flagp'] = false;
				
				header("Location: ../view/searchcustomer.php");
			}
		}
		
	}



	function searchemployee($username) {
		$conn = connect();
		if ($conn){
			$sql = "SELECT firstname , lastname , gender, dob, bg, address, email, phone, username FROM employeeinfo WHERE username = '$username'";
			$res = mysqli_query($conn, $sql);
			$users = array();
			echo "$users";
			if ($res->num_rows > 0) {

				while($row = $res->fetch_assoc()) {
					array_push($users, $row);
				}
				return $users;
			}
			else{
				$_SESSION['searchemployee'] = "No data found";
				$_SESSION['flag'] = false;
				header("Location: ../view/searchmanager.php");
			}
		}
	
	}

	


	













?>