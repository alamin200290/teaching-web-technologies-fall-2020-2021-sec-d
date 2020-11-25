<?php

	/*$a = 12;
	$b = 33;

	function sum (){
		global $a;
		global $b;

		//return $GLOBALS['a']+$GLOBALS['b'];
		return $a+$b;
	}

	echo sum();*/
	//print_r($_SERVER);

	$conn = mysqli_connect('localhost', 'root', '', 'webtech');
	$sql = "select * from users";
	$result = mysqli_query($conn, $sql);
	//$data = mysqli_fetch_assoc($result);
	//$data1 = mysqli_fetch_assoc($result);

	//print_r($data);
	//print_r($data1);

	/*echo "<table border=1>
			<tr>
				<td>ID</td>
				<td>USERNAME</td>
				<td>PASSWORD</td>
				<td>EMAIL</td>
				<td>TYPE</td>
			</tr>";

	while($data = mysqli_fetch_assoc($result)){
		echo "<tr>
				<td>".$data['id']."</td>
				<td>".$data['username']."</td>
				<td>".$data['password']."</td>
				<td>".$data['email']."</td>
				<td>".$data['type']."</td>
			</tr>";

	}

	echo "</table>";

	mysqli_close($conn);*/
?>


<!DOCTYPE html>
<html>
<head>
	<title>User Info</title>
</head>
<body>

	<h1>User Info</h1>

	<table border="1">
		<tr>
			<td>ID</td>
			<td>Username</td>
			<td>Password</td>
			<td>Email</td>
			<td>Type</td>
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
		</tr>

<?php } ?>

	</table>
</body>
</html>