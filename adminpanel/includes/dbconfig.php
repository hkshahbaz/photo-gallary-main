<?php
$dbserver="localhost";
	$dbuser="root";
$dbpass="";
$dbname="test";

$con=new mysqli($dbserver,$dbuser,$dbpass,$dbname);

if($con->connect_error)
{
	echo"connection error";
	exit;
}
?>