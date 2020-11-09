<?php
	
	//session_start();
	//session_destroy();

	setcookie('flag', 'true', time()-100, '/');
	header('location: login.php');

?>