<?php

include_once('1pg_connection.php');


$id = $_GET['id'];
$sql="DELETE from users_record WHERE ID='$id'";

$result = mysqli_query($conn,$sql);

if($result)
{
        header("location:usermanagement.php"); 
    }
    else {
    //    echo "ERROR";
    }
?>
