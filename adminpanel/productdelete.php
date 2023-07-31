<?php
	include("1pg_connection.php");
	$uid = $_GET["id"];
	
		
	$sql = "Delete from photo where pid=$uid";
	//echo $sql; exit;
	
	if($conn->query($sql)){
		header("location:productmanagement.php?msg=Delete Successfull");
	} else {
		header("location:productmanagement.php?msg=Deletion Failed");
	}
?>