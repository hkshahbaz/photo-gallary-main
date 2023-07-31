<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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
	border-radius:40px;
	border:3px solid red;
	font-family:Georgia, "Times New Roman", Times, serif;
	float:left;
	text-align:center;
	padding-top:0px;	
}
#product{
	/*background-color:#30F;*/
	width:100%;
	/*height:1000px;*/
	float:left;
	
	
}
#lft{
	/*background-color:#0F6;*/
	width:250px;
	height:355px;
	margin:10px;
	/*padding:5px;*/
	float:left;
	margin-left:15px;
	border:4px solid white;
	border-radius:10px;
	
	
}

#cntr
{
	/*background-color:#0F6*/;
	width:845px;
	height:500px;
	float:left;
	
}
#rgt{
	/*background-color:#0F6;*/
	width:250px;
	height:355px;
	margin:5px;
	/*padding:5px;*/
	float:left;
	margin-left:5px;
	border:4px solid white;
	border-radius:10px;
	
	
}


#rgt ul
{
	list-style:none;
	color:#000;
	font-size:20px;
	text-align:justify;
	font-style:italic;

	
}




</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Product</title>
</head>

<body>
<?php
include("includes/dbconfig.php");
include("site/Category.php");    
$sql = "Select * from category where catid=".$_GET["catid"];
	$resultCat = $con->query($sql);
	$rowCat= $resultCat->fetch_assoc();
	$sql = "Select * from product where catid=".$_GET["catid"];
	$result = $con->query($sql);
	
?>
<br />
<div id="displaypro" >
<div id="hmd">
<h1><?php echo $rowCat["catname"];?></h1>
</div>
</div><br />

<div id="product">
<div id="lft"> 

<div class="w3-content w3-section"  >
 <img class="mySlides" src="slider/1.jpg"  style="width:100%" style="height:200px"> 
  <img class="mySlides" src="slider/2.jpg" style="width:100%" style="height:200px">
  <img class="mySlides" src="slider/3.jpg" style="width:100%" style="height:200px">
  <img class="mySlides" src="slider/4.png"  style="width:100%" style="height:200px">
  <img class="mySlides" src="slider/5.jpg" style="width:100%" style="height:200px">
  <img class="mySlides" src="slider/6.jpg" style="width:100%" style="height:200px">
  <img class="mySlides" src="slider/7.jpg"  style="width:100%" style="height:200px">
  <img class="mySlides" src="slider/8.jpg" style="width:100%" style="height:200px">
  <img class="mySlides" src="slider/9.jpg" style="width:100%" style="height:200px">
  <img class="mySlides" src="slider/10.jpg"  style="width:100%" style="height:200px">
  <img class="mySlides" src="slider/11.jpg" style="width:100%" style="height:200px">
  <img class="mySlides" src="slider/12.jpg" style="width:100%" style="height:200px">
  <img class="mySlides" src="slider/13.jpg"  style="width:100%" style="height:200px">
  <img class="mySlides" src="slider/14.jpg" style="width:100%" style="height:200px">
  <img class="mySlides" src="slider/15.jpg" style="width:100%" style="height:200px">
  <img class="mySlides" src="slider/16.jpg"  style="width:100%" style="height:200px">
  <img class="mySlides" src="slider/17.jpg" style="width:100%" style="height:200px">
  <img class="mySlides" src="slider/18.jpg" style="width:100%" style="height:200px">
  
  
</div>
<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 1500); // Change image every 1 seconds
}
</script>

</div>

<div id="cntr">

<table  border= "5" cellsapcing="15px" cellpadding="15px"  bordercolor="#333333" bgcolor="#00FFFF" style="border-radius:20px;">
<?php while($row = $result->fetch_assoc()){?>
    	<tr>
        	<td align="center" style="border-radius:20px;" bgcolor="#FFFFFF">
        <a href=""><?php echo  $row["pname"];?><br />
        <img src="<?php echo $row["image"];?>" width="200" height="200"><br />
  <?php echo $row["pprice"];?></a></td>
        </tr>
    <?php } ?>	
  
</table> 
</div>



<div id="rgt">
<ul><br />
<li> <b>Enjoy the widest variety of products 
at the best prices in pakistan.</b></li><br />
<li><b> Buy and sell safely from thousands 
of sellers around you.</b></li><br />
<li> <b>Chat Follow and like your favourite sellers.</b></li>
</ul>
</div>
</div>


  
</body>
</html>