<?php

	function getConnection(){
		$conn = mysqli_connect('localhost', 'root', '', 'webtech');
		return $conn;
	}

?>