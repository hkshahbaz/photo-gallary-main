<?php
include("1pg_connection.php");
	$uid = $_GET["id"];
	
		
	$sql = "Delete from cat where id=$uid";
	//echo $sql; exit;
	
	if($conn->query($sql)){
		header("location:catmanagement.php?msg=Delete Successfull");
	} else {
		header("location:catmanagement.php?msg=Deletion Failed");
	}
?>