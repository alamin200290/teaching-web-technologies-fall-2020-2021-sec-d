<?php
	//include('header.php');
	//include_once('header.php');
	//require('header.php');
	require_once('../php/header.php');
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Profile page</title>
</head>
<body>

	<h3>Profile Page</h3>
	
	<a href="home.php">Back</a> |
	<a href="../php/logout.php">logout</a>
	<br><br>
	
	<img src="../assets/<?=$_SESSION['pic']?>" width="100px" height="100px">
	<br>
	
	<form method="post" action="../php/profileCheck.php" enctype="multipart/form-data">
		Update Image: <input type="file" name="mypic"><br>
		CV: <input type="file" name="mycv"><br>
		<input type="submit" name="submit" value="upload">
	</form>
</body>
</html>
