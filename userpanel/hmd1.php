<?php
session_start();
if( !isset($_SESSION["name"])){
	header("location:index.php");
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> 
<link rel="stylesheet" type="text/css" href="css/style1.css">
<title></title>
<link rel="shortcut icon" href="images/logo.png" />
</head>
<body>
<?php
include_once('1pg_connection.php');
$id = $_GET["pid"];
	$sql="select * from photo where pid=".$id;
$ans=$conn->query($sql);
$a=$ans->fetch_assoc();
?>
<?php include 'afterlogin.php';?>

<table   cellsapcing="15px" cellpadding="15px" style="margin-left: 20%;">	
  <tr> <td>
  <center><h4><?php echo $a["Name"];?></h4></center><br />
  <img src="<?php echo $a["Image"];?>" width="600" height="400"/><br />
</td>
</tr>
</table> 
<br>
<h4 style="margin-left: 100px;font-size: 25px;"> Description:</h4>
<p style="margin-left: 100px;font-size: 16px;">
Consumers favor products that are 
    available and highly affordable.
Improve production and distribution.
Consumers favor products that are 
    available and highly affordable.
Improve production and distribution.

</p>
<br>

	<?php
include 'footer.php';
?>
</body>
</html>



