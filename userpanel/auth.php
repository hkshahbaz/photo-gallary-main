<?php
	session_start();
	$uEmail=$_POST["email"];
	$uPass =$_POST["pass"];
	
	//Database Connection
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "photogallary";

	$conn= mysqli_connect($servername, $username, $password,$dbname);
if (!$conn)
{
	die ("Connection faild:").$conn;
}
#else {echo "Connecnted";}
mysqli_select_db($conn,$dbname);

	$sql = "Select * from users_record where Email='$uEmail' AND Password='$uPass'";
	
	$result = $conn->query($sql);
	
	if($result->num_rows == 1)
	{
		$row = $result->fetch_assoc();

		$_SESSION["name"] = $row["First_Name"];
		
		header("location:home.php");
	} 

	else {
		header("location:login.php");
	}

?>



