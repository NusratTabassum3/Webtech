<?php

	session_start();

	require('../model/User.php');

	$_SESSION['info'] = getallcustomer();

	if(isset($_SESSION['info'])){
		header("Location: ../view/allcustomerview.php");
	}














?>