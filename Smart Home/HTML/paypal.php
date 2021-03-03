<!DOCTYPE html>

<head>

<title>Digital Dream Life.lk</title>

<link rel="stylesheet" type="text/css" href="../CSS/general.css">
<link rel="stylesheet" type="text/css" href="../CSS/index_style.css">
<link rel="stylesheet" type="text/css" href="../CSS/paypal.css">

<style>
function validateForm() {
  var x = document.forms["e-mail"]["pass"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }

</style>

</head>
<div class="header">
	<div class="header-content">
		<div class="header-items">
        	<div class="logo">
		<img src="../Images/ddl.jpg" style="width:10%">
            	Digital Dream Life
            </div>
        </div>

        <div class="header-items">
        	<div class="menu">
            	<div class="menu-items"><a class="home-link" href="index.html">Home</a></div>
                <div class="menu-items"><a class="product-link" href="product.html">Product</a></div>
        	<div class="menu-items"><a class="aboutus-link" href="aboutus.html">About Us</a></div>
                <div class="menu-items"> <a class="contactus-link" href="contactus.html">Contact Us</a> </div>
                <div class="menu-items"><a class="feedback-link" href="feedback.html">Feedback</a></div>
                
            </div>
        </div>
	</div>
</div>
  <body>






	<?php

	$con = mysqli_connect('127.0.0.1','root','');
	
	if (!$con)
	{
			echo"not connected to server";
	}
	else{
	
	echo"";
	}
	
	
	if( !mysqli_select_db  ($con,'ddl') )
	{
		echo "databace not selected";
	}else{
		echo"";
	}

		
		
		
		
		
		
		if(isset($_POST["btnsubmit"]))
	{
	
	
		if(isset( $_POST["email"]))
		{
			$email = $_POST["email"];
		}
		
		if(isset( $_POST["pass"]))
		{
			$pass = $_POST["pass"];
		}
		
		
		
		
			
			
		$sql ="INSERT INTO `paypal`(`email`, `passwod`) VALUES ('$email','$pass')";
			
		
			
	
	if(!mysqli_query($con,$sql))
	{
		echo"not inserted";
	}
	else
	{
		echo"";
	}

	}

		?>
	






















	
	<div class="box" style="min-height:850px; text-align:center; background: linear-gradient(to top right, #33ccff 0%, #ff99cc 100%);"><br><br><br><br>
	<form style="padding: 40px;"  method="post" > 
	
	<p style="font-size:60px;" > Paypal </p> <br><br><br>
	

  	<h1>E-mail:</h1><br>
	<input type="email" name="email" id="pwd" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}" placeholder="abc@gmail.com" required><br> <br>

	<h1>Password:</h1><br>
	<input type="password"  name="pass" id="pwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[a-z]).{5,10}" placeholder="Password" required><br> <br><br><br>
	
	<input type="submit" name="btnsubmit" style="color:blue; width:100px;"  value="SUBMIT"><br><br>

	<input type="checkbox" style="text-size:20px;">Remember Password<br><br>

	
</form>
	
</div>
  

</body>

<div class="footer">
	<div class="footer-content">
        <div class="footer-items">
        	<div class="footer-menu">
            	<div class="menu-items">
		<p >Address:23,St John's Road,Colombo-04</p>
                <p >TP:0112358612</p>
        	<p>Fax:+94112596922</p>
        	<p>Email:info@digitaldreamlife.lk</p>
                </div>
		</div>
                </div>
		<div class="footer-last">               
                <div class="menu-items"><a class="follow-link" href="follow.html">Follow Us</a>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
                        		<div class="fab fa-facebook"></div> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
        				 <div class="fab fa-instagram"></div> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp                                              
       					 <div class="fab fa-twitter"></div>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
      					 <div class="fab fa-youtube"></div>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
                </div>
                
            
        </div>
	</div>
</div>

</html>