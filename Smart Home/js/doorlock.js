function loadData(name) {
if (name=="btn1"){
	document.getElementById("para").innerHTML =document.getElementById("image1").src ="/Users/siva/Desktop/IWT pre/Images/lock1.jpg";
}
else if (name=="btn2") {
    document.getElementById("para").innerHTML = document.getElementById("image1").src ="/Users/siva/Desktop/IWT pre/Images/lock2.jpg";
}
else if(name=="btn3"){
    document.getElementById("para").innerHTML = document.getElementById("image1").src="/Users/siva/Desktop/IWT pre/Images/lock3.jpg";
}
else if(name=="btn4"){
    document.getElementById("para").innerHTML = document.getElementById("image1").src="/Users/siva/Desktop/IWT pre/Images/lock4.jpg";
}


else if(name=="btn5"){
    document.getElementById("para").innerHTML = document.getElementById("image1").src="/Users/siva/Desktop/IWT pre/Images/lock8.jpg";
}


else if(name=="btn6"){
    document.getElementById("para").innerHTML = document.getElementById("image1").src="/Users/siva/Desktop/IWT pre/Images/lock6.jpg";
}

else{
	  alert("Invalid!!!");
  }

}