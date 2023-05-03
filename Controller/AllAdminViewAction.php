<?php


	require('../model/User.php');
	if (session_status() === PHP_SESSION_NONE) {

		session_start();
	}
	$_SESSION['info'] = getAll();

	if(isset($_SESSION['info'])){
		header("Location: ../view/alladminview.php");
	}














?>