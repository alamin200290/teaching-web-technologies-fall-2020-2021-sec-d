<?php
	
	$data = $_REQUEST['mydata'];
	$json = json_decode($data);
	//sleep(3);

	/*$content = "
				<table border=1>
					<tr>
						<td>Name </td>
						<td>ID </td>
					</tr>
					<tr>
						<td>{$name}</td>
						<td>0</td>
					</tr>
				</table>";*/

	//$studnet = ['name'=>'alamin', 'dept'=>'CS', 'type'=>'Student'];

	echo $json->dept;
?>