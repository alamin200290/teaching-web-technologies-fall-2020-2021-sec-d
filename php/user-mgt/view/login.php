<?php

	if(isset($_REQUEST['msg'])){
		if($_REQUEST['msg'] == 'null'){
			echo "null submission...";
		}

		if($_REQUEST['msg'] == 'invalid'){
			echo "invalid username/password";
		}

		if($_REQUEST['msg'] == 'login_first'){
			echo "please login first...";
		}
	}
?>



<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<form method="post" action="../php/loginCheck.php">
		<fieldset>
			<legend>Login</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Submit"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>