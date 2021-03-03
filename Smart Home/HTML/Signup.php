<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type"  charset=utf-8" />
<title>Digital Dream Life.lk</title>
<link rel="stylesheet" type="text/css" href="../CSS/general.css">
<link rel="stylesheet" type="text/css" href="../CSS/index_style.css">

<style>
</style>

</head>
<body>

<?php include "header.php" ?>

<script src="valid.js">
</script>

 <div class="box" style="min-height:850px; text-align:center; background: linear-gradient(to top right, #33ccff 0%, #ff99cc 100%);"><br><br><br><br>
    
		<div class="outbox">
            <h1>Register Now!</h1><br><br>
            
                    <form method="post" id="myForm">
                        <input class="text" type="text" name="Username" placeholder="Username" id="ii" required autocomplete="off"><br> <br><br>
                        <input class="text email" type="email" name="email" id="ii" placeholder="Email" required autocomplete="off"><br> <br><br>
                        <input class="text" type="password" name="password" id="ii" placeholder="Password" required=""><br><br> <br>
                        <input class="text" type="password" name="cpassword" id="ii" placeholder="Confirm Password" required=""><br> <br><br>
                        <span id="pass_err" class="sp1"></span>
                        <input class="text" type="text"   name="pnumber" id="ii" placeholder="Phone number" required autocomplete="off"><br> <br><br>
                        <span id="pnum_err" class="sp1"></span>
                        <input class="text" type="text" name="Address" id="ii" placeholder="Address" required autocomplete="off"><br><br><br>
                         
                                
                                <span>I Agree To The Terms & Conditions</span><br><br>
                             
                        
                        <?php 
                    if(isset($_POST["signupbtn"])){
                        $username = $_POST["Username"];    
                        $email = $_POST["email"];              
                        $password = $_POST["password"];
                        $TelNo = $_POST["pnumber"];
                        $Address = $_POST["Address"];
                    

                    $con = mysqli_connect("localhost","root","","ddl");
                    if(!$con)
                    {
                        die("Cannot connect to Database");
                    }
                    $sql="INSERT INTO `user` (`id`, `username`, `email`, `pass`, `telno`, `add`) VALUES (NULL, '".$username."', '".$email."', '".$password."', '".$TelNo."', '".$Address."');";

                    if(  mysqli_query($con,$sql))
                    {
                        echo "Registered Successfully, Please Login";
                    }
                    else
                    {
                        echo "Opps something is wrong, Please check again";
                    }

                    }

                    ?>
                    <input type="submit" value="SIGNUP" id="#sub_btn" name="signupbtn">
                    </form>
                    
                    <p>Do you have an Account? <a href="Login.html" style="color:white";> Login Now!</a></p><br>
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