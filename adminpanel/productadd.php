<?php
session_start();
if( !isset($_SESSION["name"])){
  header("location:index.php");
}
include_once('1pg_connection.php');

if(isset ($_POST['submit']))
{

$name=$_POST["txtPTitle"];
$cat=$_POST["selCat"];
$image=$_POST["image"];


$sql="INSERT Into photo (Name,Image,id) VALUES('$name','$image','$cat')";
#echo "<pre>";
#print_r($sql);
#exit;

if($conn->query($sql)){
		header("location:productmanagement.php?msg=Insert Successfull");
	} else {
		header("location:productmanagement.php?msg=Insertion Failed");
	}
}
?>



