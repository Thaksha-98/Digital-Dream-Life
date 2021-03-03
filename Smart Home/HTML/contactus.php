<!DOCTYPE html>

<head>

<title>Digital Dream Life.lk</title>

<link rel="stylesheet" type="text/css" href="../CSS/general.css">
<link rel="stylesheet" type="text/css" href="../CSS/index_style.css">
<link rel="stylesheet" type="text/css" href="../CSS/contactus.css">
<style>
.content{
	color:black;
}
</style>


</head>

<body>
<?php include "header.php" ?>

<script src="valid.js">
</script>
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
                <div class="menu-items"><a class="product-link" href="listnew.html">Product</a></div>
        	<div class="menu-items"><a class="aboutus-link" href="aboutus.html">About Us</a></div>
                <div class="menu-items"> <a class="contactus-link" href="contactus.html">Contact Us</a> </div>
                <div class="menu-items"><a class="feedback-link" href="feedback.html">Feedback</a></div>
                
            </div>
        </div>
	</div>
</div>

<div>
 

  <div class="content">
	<form style="padding: 40px;" action="contactus.php" method="post"> 
	
	<h2> Send us message </h2>
	<h3> We'd love to hear from you </h3> <br><br><br><br>

	
	<style="font-size: 20px; font-weight: 500"> Name <br> <input  class="inputs" type="text" name="name" required><br><br>

	<style="font-size: 20px; font-weight: 500"> E-mail <br> <input  class="inputs" type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}" required><br><br>

	<style="font-size: 20px; font-weight: 500"> Mobile Number <br> <input class="inputs" type="phone" name="mobilenumber" pattern="[0-9]{10}" required><br><br>

	<style="font-size: 20px; font-weight: 200"> Enter your Message <br> <textarea type="text" class="inputs1" rows="10" cols="50" name="message"></textarea> <br><br>

	<button type="submit" name="btnsubmit" style=background-color: lightgrey; margin-left:500px; width:200px; height: 50px"> SEND </button>

	</form>
	</div>


	 	<div class="map">
	 		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.694078186326!2d79.85610671477295!3d6.927123394994979!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae259112f739d89%3A0x353284d829a3d901!2sColombo%20Lotus%20Tower%2C%20Colombo%2001000!5e0!3m2!1sen!2slk!4v1569745784445!5m2!1sen!2slk" width="1550" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

		
</div>






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
		echo" connected";
	}



















	if(isset($_POST["btnsubmit"]))
	{
	
	
		if(isset( $_POST["name"]))
		{
			$name = $_POST["name"];
		}
		
		
		if(isset( $_POST["email"]))
		{
			$email = $_POST["email"];
		}
		
		
		if(isset( $_POST["mobilenumber"]))
		{
			$mobilenumber = $_POST["mobilenumber"];
		}
		
		if(isset( $_POST["message"]))
		{
			$message = $_POST["message"];
		}
		
		
		
				$sqlw = "INSERT INTO `contact_us`(`name`, `email`, `mobile_number`, `message`) VALUES ('$name','$email','$mobilenumber','$message')";
		
			
		
		
			
		
			if(!mysqli_query($con,$sqlw))
			{
				echo"not inserted";
			}
			else
			{
			echo"inserted";
			}
	}

			?>	
	





























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



</body>
</html>

