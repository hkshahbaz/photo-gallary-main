<?php
	include("includes/dbconfig.php");
	$cid = $_POST["catid"];
	$cname = $_POST["catname"];
	
	$pid=$_POST["pid"];
	$sql = "Update category  Set catid='$cid', catname='$cname' Where catid='$pid'";
	
	if($con->query($sql)){
		header("location:catmanagement.php?msg=Update Successfull");
	} else {
		header("location:catmanagement.php?msg=Update Failed");
	}
?>