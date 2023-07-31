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

<header>
<div class="container">
<div class="row">
	<div class="col-md-3">
	<input id="title" class="hp" onclick="window.location.href=''" name="submit"  type="submit"  value="PhotoGallery">
	</div>

<div class="col-md-6 col-sm-12  ">
 	<input class="form-control srch center " type="text" placeholder="Search for photos" />
 </div>

 <div class="col-md-3 ">
	<input  class="btn" type="button" name="login" value="Login" onclick="window.location.href='Login.php'" />
	<input class="btn" type="button" name="signup" value="Signup" onclick="window.location.href='signup.php'" />
</div>	

</div>
</header>

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
