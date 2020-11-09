<?php
	//session_start();

	if(isset($_REQUEST['submit'])){
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];

		if(empty($username) || empty($password)){
			//echo "null submission";
			header('location: login.php?msg=null');
		}else{

			if($username == $password){
				//$flag = true;
				//$_SESSION['flag'] = "true";
				//$_SESSION['username'] = $username;

				setcookie('flag', 'alamin', time()+3600, '/');
				//setcookie('rm', 'ok', time()+3600, '/');
				//setcookie('uname', 'alamin', time()+3600, '/');

				header('location: home.php');
			}else{
				header('location: login.php?msg=invalid');
			}
		}
	}else{
		header('location: login.php');
	}
	

?>