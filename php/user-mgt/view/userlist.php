<?php
	require_once('../php/header.php');
	require_once('../db/usersService.php');

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
			while($data = mysqli_fetch_assoc($result)){
		?>
				<tr>
					<td><?= $data['id'] ?></td>
					<td><?= $data['username'] ?></td>
					<td><?= $data['password'] ?></td>
					<td><?= $data['email'] ?></td>
					<td><?= $data['type'] ?></td>
					<td>
						<a href="edit.php?id=<?= $data['id'] ?>"> EDIT</a> |
						<a href="delete.php?id=<?= $data['id'] ?>"> DELETE</a> 
					</td>
				</tr>

		<?php } ?>

	</table>
</body>
</html>

