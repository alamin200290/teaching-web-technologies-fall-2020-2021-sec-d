<?php
	if(!isset($_COOKIE['flag'])){
		header('location: login.php?msg=login_first');
	}
?>
