<?php
	
	session_start();
	//echo $_FILES['mypic']['name']."<br>";
	//echo $_FILES['mypic']['size']."<br>";
	//echo $_FILES['mypic']['tmp_name']."<br>";

	$dirpath = "../assets/".$_FILES['mypic']['name'];

	if(move_uploaded_file($_FILES['mypic']['tmp_name'], $dirpath)){
		$_SESSION['pic'] = $_FILES['mypic']['name'];
		header('location: ../view/profile.php');
	}else{
		echo "error";
	}

?>