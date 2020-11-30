<?php
	require_once('../php/header.php');
	require_once('../models/usersService.php');

	$userlist = getAllUsers();

?>


<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
	<h1>Welcome Home! <?php echo $_COOKIE['flag'];?></h1>
	
	<a href="home.php">Back</a> |
	<a href="../php/logout.php">logout</a>

	<h3>User list</h3>

	<table border="1">
		<tr>
			<td>ID</td>
			<td>Username</td>
			<td>Password</td>
			<td>Email</td>
			<td>Type</td>
			<td>Action</td>
		</tr>

		<?php 
			for($i=0; $i < count($userlist); $i++) {
		?>
				<tr>
					<td><?= $userlist[$i]['id'] ?></td>
					<td><?= $userlist[$i]['username'] ?></td>
					<td><?= $userlist[$i]['password'] ?></td>
					<td><?= $userlist[$i]['email'] ?></td>
					<td><?= $userlist[$i]['type'] ?></td>
					<td>
						<a href="edit.php?id=<?= $userlist[$i]['id']  ?>"> EDIT</a> |
						<a href="delete.php?id=<?= $userlist[$i]['id']  ?>"> DELETE</a> 
					</td>
				</tr>

		<?php } ?>

	</table>
</body>
</html>

