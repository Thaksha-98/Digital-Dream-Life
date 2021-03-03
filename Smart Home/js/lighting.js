function loadData(name) {
if (name=="btn1"){
	document.getElementById("para").innerHTML =document.getElementById("image1").src ="/Users/siva/Desktop/IWT pre/Images/light1.jpg";
}
else if (name=="btn2") {
    document.getElementById("para").innerHTML = document.getElementById("image1").src ="/Users/siva/Desktop/IWT pre/Images/light2.jpg";
}
else if(name=="btn3"){
    document.getElementById("para").innerHTML = document.getElementById("image1").src="/Users/siva/Desktop/IWT pre/Images/light3.jpg";
}
else if(name=="btn4"){
    document.getElementById("para").innerHTML = document.getElementById("image1").src="/Users/siva/Desktop/IWT pre/Images/light4.jpg";
}


else if(name=="btn5"){
    document.getElementById("para").innerHTML = document.getElementById("image1").src="/Users/siva/Desktop/IWT pre/Images/light5.jpg";
}


else if(name=="btn6"){
    document.getElementById("para").innerHTML = document.getElementById("image1").src="/Users/siva/Desktop/IWT pre/Images/light7.jpg";
}

else{
	  alert("Invalid!!!");
  }

}