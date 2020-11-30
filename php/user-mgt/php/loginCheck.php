<?php
	//session_start();
	require_once('../models/usersService.php');

	if(isset($_REQUEST['submit'])){
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];

		if(empty($username) || empty($password)){
			//echo "null submission";
			header('location: ../view/login.php?msg=null');
		}else{

			$user = [
				'username'=> $username,
				'password'=> $password
			];

			$status = validate($user);

			if($status){
				setcookie('flag', $username, time()+3600, '/');
				header('location: ../view/home.php');
			}else{
				header('location: ../view/login.php?msg=invalid');
			}
		}
	}else{
		header('location: ../view/login.php');
	}
	

?>