<?php
	
	$name = $_POST['name'];
	//sleep(3);

	$content = "
				<table border=1>
					<tr>
						<td>Name </td>
						<td>ID </td>
					</tr>
					<tr>
						<td>{$name}</td>
						<td>0</td>
					</tr>
				</table>";

	echo $content;
	echo "test";
?>