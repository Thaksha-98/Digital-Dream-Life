function loadData(name) {
if (name=="btn1"){
	document.getElementById("para").innerHTML =document.getElementById("image1").src ="/Users/siva/Desktop/IWT pre/Images/lg5.jpg";
}
else if (name=="btn2") {
    document.getElementById("para").innerHTML = document.getElementById("image1").src ="/Users/siva/Desktop/IWT pre/Images/lg4.jpg";
}
else if(name=="btn3"){
    document.getElementById("para").innerHTML = document.getElementById("image1").src="/Users/siva/Desktop/IWT pre/Images/lg1.jpg";
}
else if(name=="btn4"){
    document.getElementById("para").innerHTML = document.getElementById("image1").src="/Users/siva/Desktop/IWT pre/Images/samsung.jpg";
}


else if(name=="btn5"){
    document.getElementById("para").innerHTML = document.getElementById("image1").src="/Users/siva/Desktop/IWT pre/Images/vizio.jpg";
}


else if(name=="btn6"){
    document.getElementById("para").innerHTML = document.getElementById("image1").src="/Users/siva/Desktop/IWT pre/Images/sony.jpg";
}

else{
	  alert("Invalid!!!");
  }

}