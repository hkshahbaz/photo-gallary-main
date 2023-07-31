<?php
	include("includes/dbconfig.php");
	$uTitle = $_POST["pname"];
	$uEmail = $_POST["pprice"];
	$uPass = $_POST["pcat"];
	$uid = $_POST["pid"];
	
	$sql = "Update product Set pname='$uTitle', pprice='$uEmail', catid='$uPass' Where pid='$uid'";
	//echo $sql;
	if($con->query($sql)){
		header("location:productmanagement.php?msg=Update Successfull");
	} else {
		header("location:productmanagement.php?msg=Update Failed");
	}
?>