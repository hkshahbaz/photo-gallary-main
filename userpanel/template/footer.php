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

<footer class="container-fluid footer";>

<div class="row">
	<img class="center-block" src="images\logo.png" ></img>
</div>

<br>


<div class="row">
	<ul>
	<div class="col-sm-2">
	</div>
		<li class="col-sm-1"><a href="#" >About</a></li>
		<li class="col-sm-1"><a href="#" >Jobs</a></li>

		<li class="col-sm-1"><a href="#" >Developer</a></li>
		<li class="col-sm-1"><a href="#" >Guidlines</a></li>

		<li class="col-sm-1"><a href="#" >Blogs</a></li>
		<li class="col-sm-1"><a href="#" >Mobile</a></li>
	
		<li class="col-sm-1"><a href="#" >Terms</a></li>
		<li class="col-sm-2"><a href="#" >Contact Us</a></li>
	<div class="col-sm-1">
	</div>
	</ul>

</div>
	
<hr>
<div class="row">
<div class=" col-sm-4 ">

	<input id="sub" class="sub"  type="submit"  value="SUBSCRIBE">
</div>
<div class=" col-sm-4 ">
	<p class="fp">&copy; UMU DIGITAL 2015</p>
</div>

<div class=" col-sm-4 ">
	<a href="#twitter";>	<img id="img" class="imgg_social"  src="images\twitter.png"></a>

	<a href="#facebook";>	<img id="img" class="imgg_social"  src="images\fb.png"></a>

	<a href="#In";>	 		<img id="img" class="imgg_social"  src="images\in.png"></a>

	<a href="#insta";>		<img id="img" class="imgg_social"  src="images\insta.png"></a>

	<a href="#gmail";>		<img id="img" class="imgg_social"  src="images\gmail.png"></a>

	<a href="#p";>			<img id="img" class="imgg_social"  src="images\p.png"></a>
</div>
</div>

</footer>
<div class="page-bg">
</div>
<script type="text/javascript">

document.getElementById("sub").addEventListener("mouseover", mouseOver);
document.getElementById("sub").addEventListener("mouseout", mouseOut);

function mouseOver() {
    var x=document.getElementById("sub")
	x.style.backgroundColor = "white";
	x.style.color = "black";
	x.style.padding = "8px 40px";
	x.style.transition = "padding 2s, background-color 2s, color 2s";
}

function mouseOut() {
    var x=document.getElementById("sub")
    x.style.color = "white";
    x.style.backgroundColor = "transparent";
    x.style.padding = "8px 20px";
    x.style.transition="background-color 2s, padding 2s,color 1s";
}
</script>
</body>
</html>