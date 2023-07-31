<?php
	include("1pg_connection.php");
	$cTitle = $_POST["id"];
	$cname = $_POST["name"];
	
	
	$sql = "INSERT INTO cat (ID,Name)
	VALUES('$cTitle','$cname')";
	//echo $sql; exit;
	
	if($conn->query($sql)){
		header("location:catmanagement.php?msg=Insert Successfull");
	} else {
		header("location:catmanagement.php?msg=Insertion Failed");
	}
?>