<?php

	//print_r($_GET);
	//echo $_GET['name'];
	
	//$_GET
	//$_POST
	//$_REQUEST
	
	if(isset($_REQUEST['submit'])){

		$name = $_REQUEST['name'];
		
		if($name == ""){
			echo " field required...";
		}else{
			echo $name;
		}
	}
	
?>