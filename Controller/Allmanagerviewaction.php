<?php

	session_start();

	require('../model/User.php');

	$_SESSION['info'] = getallemployee();

	if(isset($_SESSION['info'])){
		header("Location: ../view/allmanagerview.php");
	}














?>