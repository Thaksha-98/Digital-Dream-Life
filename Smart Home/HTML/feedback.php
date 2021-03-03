<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type"  charset=utf-8" />
<title>Digital Dream Life.lk</title>
<link rel="stylesheet" type="text/css" href="../CSS/general.css">
<link rel="stylesheet" type="text/css" href="../CSS/index_style.css">

<style>

.feed{
	width:700px;
	margin: auto;
	padding:50px 400px 50px 200px;
	background:linear-gradient(to right, #800080 0%, #0000ff 100%);
	
	
	color:white;
}

</style>

</head>

<body>

<?php include "header.php" ?>
<script src="valid.js">
</script>



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
	
	
		if(isset( $_POST["message"]))
		{
			$message = $_POST["message"];
		}
		
		
		
			
			
		$sql ="	INSERT INTO `feedback`( `message`) VALUES ('$message')";
			
		
			
	
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
	









<div class="box" style="min-height:850px; text-align:center; background: linear-gradient(to top right, #33ccff 0%, #ff99cc 100%);">


<div class="outbox">


<div class="feed">
	<p align="center" style="font-size:200%; font-weight:bold;">Leave us your valuable Feedback</p> <br>

	<form method="post">
        <p style="margin-left:30%;font-size:130%;">Your Feedback / Your Comments:</p><br>
		
	<textarea rows="5" cols="60"  name="message" style="margin-left:30%;font-size:130%;">
	</textarea>
   	<br><br>
	<input type="submit" name="btnsubmit"  style="margin-left:30%;font-size:130%;"><br><br><br><br>
	</form>
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

</html>