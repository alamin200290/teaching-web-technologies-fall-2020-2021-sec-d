<?php
	if(!isset($_COOKIE['flag'])){
		header('location: login.php?msg=login_first');
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Home Page, <?php echo $_COOKIE['flag'];?></title>
</head>
<body>
	<h1>Welcome Home! </h1>
	<a href="profile.php">Profile</a> |
	<a href="logout.php">logout</a>
</body>
</html>

