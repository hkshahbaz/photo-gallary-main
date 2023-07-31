document.getElementById("demo").addEventListener("mouseover", mouseOver);
document.getElementById("demo").addEventListener("mouseout", mouseOut);

function mouseOver() {
    var x=document.getElementById("demo")
    x.style.cursor="pointer";
    x.style.color = "red";
    x.style.height= "60px";
	x.style.width = "170px";
	x.style.color = "black";
	x.style.backgroundColor = "transparent";
	x.style.borderRadius = "10px";
	x.style.fontSize = "20px";
	x.style.transition = "background-color 2s,border-radius 2s,font-size 2s,height 2s,width 2s";
}

function mouseOut() {
    var x=document.getElementById("demo")
    x.style.color = "black";
    x.style.height= "55px";
    x.style.backgroundColor = "white";
	x.style.width = "140px";
    x.style.borderRadius = "4px";
    x.style.transition="height 2s,width 2s,font-Size 2s,color 2s,border-radius 2s,background-color 2s";
}

function validateForm() {
    var x = document.forms["myForm"]["email","fname","lname","pass"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
}