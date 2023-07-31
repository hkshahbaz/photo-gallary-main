<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> 
<link rel="stylesheet" type="text/css" href="css/style1.css">
<title>Home</title>
<link rel="shortcut icon" href="images/logo.png" />
</head>

<body>

<section >

<div class="container-fluid">
	<div class="col-md-12 div">
	</div>
	<div class="col-md-12 ">
		<p class="text ">Find Your Inspiration!!</p>
	</div>

	<div class="col-md-12 pad-bp ">
		<p class="bp">Join the Photogallary community, home to 13 billion photos and 2 million groups.</p>
	</div>

	<div class="row">

	<div class="col-sm-5">
	</div>

	<div class="col-sm-2 text-center">
<input id="demo" name="submit" onclick="window.location.href='signup.php'" class="home-sbtn" type="submit"  value="Sign Up">
</div>

	<div class="col-sm-5">
	</div>

</div>

</div>
</div>
<div class="diiv">
	
</div>
</section>
<div class="page-bg">
</div>
<script type="text/javascript">

document.getElementById("demo").addEventListener("mouseover", mouseOver);
document.getElementById("demo").addEventListener("mouseout", mouseOut);

function mouseOver() {
    var x=document.getElementById("demo")
    x.style.cursor="pointer";
    x.style.color = "red";
    x.style.height= "60px";
	x.style.width = "150px";
	x.style.color = "black";
	x.style.backgroundColor = "transparent";
	x.style.borderRadius = "10px";
	x.style.fontSize = "20px";
	x.style.transition = "background-color 1s,border-radius 1s,font-size 1s,height 1s,width 1s";
}

function mouseOut() {
    var x=document.getElementById("demo")
    x.style.color = "black";
    x.style.height= "55px";
    x.style.backgroundColor = "rgba(255, 255, 255,0.7)";
	x.style.width = "140px";
    x.style.borderRadius = "4px";
    x.style.fontSize = "18px";
    x.style.transition="height 1s,width 1s,font-Size 1s,color 1s,border-radius 1s,background-color 1s";
}
</script>
</body>
</html>