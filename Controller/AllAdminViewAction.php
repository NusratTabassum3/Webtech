<?php

	session_start();

	require('../model/User.php');

	$_SESSION['info'] = getAll();

	if(isset($_SESSION['info'])){
		header("Location: ../view/alladminview.php");
	}














?>