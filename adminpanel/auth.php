<?php
	session_start();
	$uEmail=$_POST["email"];
	$uPass =$_POST["pass"];
	
	//Database Connection
	
	include_once('connectionn.php');

	mysqli_select_db($conn,$dbname);

	$sql = "Select * from admins_record where Email='$uEmail' AND Password='$uPass'";
	
	$result = $conn->query($sql);
	
	if($result->num_rows == 1)
	{
		$row = $result->fetch_assoc();

		$_SESSION["name"] = $row["First_Name"];
		
		header("location:home.php");
	} 

	else {
		header("location:index.php");
	}

?>



