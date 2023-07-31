<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> 
<link rel="stylesheet" type="text/css" href="css/style1.css">
<title></title>
<style >
	
.dropbtnn {
    background-color: transparent;
    color: white;
    padding: 7px;
    font-size: 16px;
 	border: 1px solid grey;
    cursor: pointer;
    border-radius: 3px;
    font-family: Georgia, "Times New Roman", Times, serif;
    margin-top: 13px;
	display: inline-block;
	width: 200px;

}

.dropbtnn:hover, .dropbtnn:focus {
    background-color:rgba(255, 255, 255,0.7);
	color: black;
	cursor: pointer;
	transition: background-color 2s , color 2s ;

}

.dropdownn {
    position: relative;
    display: inline-block;

}

.dropdownn-content {
	padding-top: 10px;
    display: none;
    position: absolute;
    background-color:rgba(255, 255, 255,0.8);
    width: 200px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdownn-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    font-family: Georgia, "Times New Roman", Times, serif;
}

.dropdownn a:hover {
	background-color: #f1f1f1;
	text-decoration: none;
}

.show {display:block;}
</style>
</head>

<body>


<section >

<header>
<div class="container">
<div class="row">
	<div class="col-md-3">
	<input id="title" class="hp" onclick="window.location.href=''" name="submit"  type="submit"  value="PhotoGallery">
	</div>

<div class="col-md-6 col-sm-12 ">
 
<div class="dropdownn">
<button onclick="myFunction()" class="dropbtnn">Photo Category</button>

  <div id="myDropdown" class="dropdownn-content">
    <a href="hmd.php?catid=1">Animals</a>
    <a href="hmd.php?catid=2">Plants</a>
    <a href="hmd.php?catid=3">Flowers</a>
    <a href="hmd.php?catid=4">Cars</a>
  </div>
</div>
 </div>

 <div class="col-md-3 ">
	
	<input class="btn" type="button" name="signup" value="Signout" onclick="window.location.href='logout.php'" />
</div>	

</div>
</div>
</header>
</section>
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

/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
</body>
</html>
