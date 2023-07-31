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

<?php include 'afterlogin.php';?>
<section>
<div class="container-fluid">
	<div class="col-md-12 div">
	</div>
	<div class="col-md-12 ">
		<p class="text ">Welcome <?php echo $_SESSION["name"];?></p>
	</div>

	<div class="col-md-12 pad-bp ">
		<p class="bp">Join the Photogallary community, home to 13 billion photos and 2 million groups.</p>
	</div>

	<div class="row">

	<div class="col-sm-5">
	</div>

	

	<div class="col-sm-5">
	</div>

</div>

</div>
</div>


</section>
<div style="height: 200px;">
		
	</div>
	<?php
include 'footer.php';
?>
<div class="page-bg">
</div>
<script type="text/javascript">

document.getElementById("title").addEventListener("mouseover", mouseOver);
document.getElementById("title").addEventListener("mouseout", mouseOut);

function mouseOver() {
    var x=document.getElementById("title")
    x.style.cursor="pointer";
    x.style.color = "rgba(200,200,200,1)";
	x.style.transition= "color 1s"; 
}

function mouseOut() {
    var x=document.getElementById("title")
    x.style.color = "white";
    x.style.transition="color 1s";
}
</script>
</body>
</html>

