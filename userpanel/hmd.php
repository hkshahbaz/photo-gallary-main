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
<style>
#displaypro{
	/*background-color:#009;*/
	height:60px;
	width:100%;
}
#hmd
{
	/*background-color:#0F9;*/
	height:40px;
	width:400px;
	font-family:Georgia, "Times New Roman", Times, serif;
	float:left;
	text-align:center;
	padding-top:0px;	
}
#cntr
{
	/*background-color:#0F6*/;
	
	height:400px;
	float:left;
	
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Product</title>
</head>

<body>

<?php include 'afterlogin.php';?>

<?php
include_once('1pg_connection.php');
$id = $_GET["catid"];
$sql = "Select * from cat where Id=".$id;
	$resultCat = $conn->query($sql);
	$rowCat= $resultCat->fetch_assoc();
	$sql = "Select * from photo where Id=".$id;
	$result = $conn->query($sql);
	
?>
<br />
<div class="col-md-3"></div>
<div id="displaypro" >
<div id="hmd" >
<h1><?php echo $rowCat["Name"];?></h1>
</div>
</div><br />


</div>

<div id="cntr">

<table style="margin-left: 30px;" border= "1" cellsapcing="25px" cellpadding="25px" >	
  <?php 

	       $count = -1;
	        while($row = $result->fetch_assoc()){
		     $count++;
		   if($count == 0)

		   {

			echo "<tr>";
			?>
        <td align="center" style="padding: 15px" >
        <a href="hmd1.php?pid=<?php echo $row["pid"];?>">
        <?php echo  $row["Name"];?><br />
        <img src="<?php echo $row["Image"];?>" width="200" height="200"><br />
  </a></td> 
            <?php

			}


		else if($count == 3)

		{
			?>
       <td align="center" style="padding: 15px" >
       <a  style="text-decoration: none; font-size: 16px;" href="hmd1.php?pid=<?php echo $row["pid"];?>">
	   <?php echo  $row["Name"];?><br />
       <img src="<?php echo $row["Image"];?>" width="200" height="200"><br />
	</a></td>
            <?php
			echo "</tr>";
			$count = -1;
		}

    	else 
    		{

    	?>
        <td align="center" style="padding: 15px" >
        <a href="hmd1.php?pid=<?php echo $row["pid"];?>">
		<?php echo  $row["Name"];?><br />
        <img src="<?php echo $row["Image"];?>" width="200" height="200"><br />
		</a></td>
        <?php

		}
	}
	?> 
</table>
</div>


</div>
</div>

<div class="container-fluid" style="height: 700px;">
</div>
	<?php
include 'footer.php';
?>
</body>
</html>