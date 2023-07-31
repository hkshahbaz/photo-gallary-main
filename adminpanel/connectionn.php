<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "photogallary_admins";


$conn= mysqli_connect($servername, $username, $password,$dbname);
if (!$conn)
{
	die ("Connection faild:").$conn;
}

//else {echo "Connecnted";}

mysqli_select_db($conn,$dbname);

?>
