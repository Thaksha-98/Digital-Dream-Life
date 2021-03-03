function loadData(name) {
if (name=="btn1"){
	document.getElementById("para").innerHTML =document.getElementById("image1").src ="../Images/scout2.jpg";
}
else if (name=="btn2") {
    document.getElementById("para").innerHTML = document.getElementById("image1").src ="../Images/scout1.jpg";
}
else if(name=="btn3"){
    document.getElementById("para").innerHTML = document.getElementById("image1").src="../Images/scout3.jpg";
}
else if(name=="btn4"){
    document.getElementById("para").innerHTML = document.getElementById("image1").src="../Images/scout4.jpg";
}

else if(name=="btn5"){
    document.getElementById("para").innerHTML = document.getElementById("image1").src="../Images/scout5.jpg";
}


else if(name=="btn6"){
    document.getElementById("para").innerHTML = document.getElementById("image1").src="../Images/scout6.jpg";
}

else{
	  alert("Invalid!!!");
  }

}