<?php
include_once('1pg_connection.php');

if(isset ($_POST['submit']))
{

$email	= $_POST['email'];
$fname	= $_POST['fname'];
$lname	= $_POST['lname'];
$pass	= $_POST['pass'];
$sql="INSERT INTO users_record(Email,First_Name,Last_Name,Password) 
VALUES ('$email','$fname','$lname','$pass')";
mysqli_query ($conn,$sql);

?>