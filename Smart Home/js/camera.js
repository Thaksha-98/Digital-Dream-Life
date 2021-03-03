function loadData(name) {
if (name=="btn1"){
	document.getElementById("para").innerHTML =document.getElementById("image1").src ="/Users/siva/Desktop/IWT pre/Images/cam1.jpg";
}
else if (name=="btn2") {
    document.getElementById("para").innerHTML = document.getElementById("image1").src ="/Users/siva/Desktop/IWT pre/Images/cam2.jpg";
}
else if(name=="btn3"){
    document.getElementById("para").innerHTML = document.getElementById("image1").src="/Users/siva/Desktop/IWT pre/Images/cam3.jpg";
}
else if(name=="btn4"){
    document.getElementById("para").innerHTML = document.getElementById("image1").src="/Users/siva/Desktop/IWT pre/Images/cam4.jpg";
}


else if(name=="btn5"){
    document.getElementById("para").innerHTML = document.getElementById("image1").src="/Users/siva/Desktop/IWT pre/Images/cam5.jpg";
}


else if(name=="btn6"){
    document.getElementById("para").innerHTML = document.getElementById("image1").src="/Users/siva/Desktop/IWT pre/Images/cam6.jpg";
}

else{
	  alert("Invalid!!!");
  }

}