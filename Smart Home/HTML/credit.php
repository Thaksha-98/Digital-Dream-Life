<!DOCTYPE html>

<head>
<title>Digital Dream Life.lk</title>

<link rel="stylesheet" type="text/css" href="../CSS/general.css">
<link rel="stylesheet" type="text/css" href="../CSS/index_style.css">
<link rel="stylesheet" type="text/css" href="../CSS/credit.css">

<style>
.box{
	text-align:center;
	left:500px;
    }

</style>

</head>
<body>

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

<div class="box">

	<h2>Payment details for Credit / Debit card:</h2><br>
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        
        <div class="modal-body" style="padding:40px 50px;">
          
		 <div class="credit" style="min-height:850px; text-align:center;">
	<form style="padding: 20px;" action="credit.php" method="post"> 
	
	
	<style="font-size: 20px; font-weight: 500"> Credit Card/Debit Card  <br> <input  class="inputs" type="text" name="credit" required><br> <br>

	<style="font-size: 20px; font-weight: 500"> MM/YY <br> <input  class="inputs" type="date" name="mmyy" required><br><br>

	<style="font-size: 20px; font-weight: 500"> SecurityCode <br> <input class="inputs" type="text" name="security" pattern="[0-9]{3}" required><br><br>
	
	<style="font-size: 20px; font-weight: 500"> First Name <br> <input class="inputs" type="text" name="fname" required><br><br>
	
	<style="font-size: 20px; font-weight: 500"> Last Name <br> <input class="inputs" type="text" name="lname" required><br><br>


	<button type="submit" name="btnsubmit" style=background-color: lightgrey; margin-left:500px; width:200px; height: 50px"> SEND </button>

	</form>
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
		echo"";
	}

		
		
		
		
		
		
		if(isset($_POST["btnsubmit"]))
	{
	
	
		if(isset( $_POST["credit"]))
		{
			$credit = $_POST["credit"];
		}
		
		if(isset( $_POST["mmyy"]))
		{
			$mmyy = $_POST["mmyy"];
		}
		
		
		
			if(isset( $_POST["security"]))
		{
			$security = $_POST["security"];
		}
		
		if(isset( $_POST["fname"]))
		{
			$fname = $_POST["fname"];
		}
		
			if(isset( $_POST["lname"]))
		{
			$lname = $_POST["lname"];
		}
		
		
		
			
				$sql="INSERT INTO `credit`(`card`, `date`, `code`, `fname`, `lname`) VALUES ('$credit','$mmyy','$security','$fname','$lname')";
		
			
		
			
	
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
	
















		
		  

    </div>  
    </div>
  </div> 
</div>
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


<body>
</body>
</html>