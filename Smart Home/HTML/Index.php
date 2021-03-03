
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Digital Dream Life.lk</title>
<link rel="stylesheet" type="text/css" href="../CSS/general.css">
<link rel="stylesheet" type="text/css" href="../CSS/index_style.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


</head>
<body >
<div class="header">
	<div class="header-content">
		<div class="header-items">
        	<div class="logo">
		<img src="../Images/ddl.jpg" >
            	Digital Dream Life
            </div>
        </div>
<br/>
<?php include "header.php" ?>
    <div class="slider" style="width:100%">
<ul class="slides">
        <input type="radio" name="radio-btn" id="img-1" checked />
        <li class="slide-container">
                <div class="slide">
                        <img src="http://farm9.staticflickr.com/8072/8346734966_f9cd7d0941_z.jpg" />
                </div>
                <div class="nav">
                        <label for="img-6" class="prev">&#x2039;</label>
                        <label for="img-2" class="next">&#x203a;</label>
                </div>
        </li>

        <input type="radio" name="radio-btn" id="img-2" />
        <li class="slide-container">
                <div class="slide">
                        <img src="http://farm9.staticflickr.com/8504/8365873811_d32571df3d_z.jpg" />
                </div>
                <div class="nav">
                        <label for="img-1" class="prev">&#x2039;</label>
                        <label for="img-3" class="next">&#x203a;</label>
                </div>
        </li>

        <input type="radio" name="radio-btn" id="img-3" />
        <li class="slide-container">
                <div class="slide">
                        <img src="http://farm9.staticflickr.com/8068/8250438572_d1a5917072_z.jpg" />
                </div>
                <div class="nav">
                        <label for="img-2" class="prev">&#x2039;</label>
                        <label for="img-4" class="next">&#x203a;</label>
                </div>
        </li>

        <input type="radio" name="radio-btn" id="img-4" />
        <li class="slide-container">
                <div class="slide">
                        <img src="http://farm9.staticflickr.com/8061/8237246833_54d8fa37f0_z.jpg" />
                </div>
                <div class="nav">
                        <label for="img-3" class="prev">&#x2039;</label>
                        <label for="img-5" class="next">&#x203a;</label>
                </div>
        </li>

        <input type="radio" name="radio-btn" id="img-5" />
        <li class="slide-container">
                <div class="slide">
                        <img src="http://farm9.staticflickr.com/8055/8098750623_66292a35c0_z.jpg" />
                </div>
                <div class="nav">
                        <label for="img-4" class="prev">&#x2039;</label>
                        <label for="img-6" class="next">&#x203a;</label>
                </div>
        </li>

        <input type="radio" name="radio-btn" id="img-6" />
        <li class="slide-container">
                <div class="slide">
                        <img src="http://farm9.staticflickr.com/8195/8098750703_797e102da2_z.jpg" />
                </div>
                <div class="nav">
                        <label for="img-5" class="prev">&#x2039;</label>
                        <label for="img-1" class="next">&#x203a;</label>
                </div>
        </li>

        <li class="nav-dots">
                <label for="img-1" class="nav-dot" id="img-dot-1"></label>
                <label for="img-2" class="nav-dot" id="img-dot-2"></label>
                <label for="img-3" class="nav-dot" id="img-dot-3"></label>
                <label for="img-4" class="nav-dot" id="img-dot-4"></label>
                <label for="img-5" class="nav-dot" id="img-dot-5"></label>
                <label for="img-6" class="nav-dot" id="img-dot-6"></label>
        </li>
</ul>
  
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 4000); // Change image every 2 seconds
}
</script>

<<div class="footer">
	<div class="footer-content">
        <div class="footer-items">
        	<div class="footer-menu">
            	<div class="menu-items"><a class="about-link" href="about.html">About</i></a></div>
                <div class="menu-items"><a class="company-link" href="company.html">The Company</a></div>
        		<div class="menu-items"><a class="terms-link" href="terms.html">Terms & Conditions</a></div>
                
                
                
                <div class="menu-items"> <a class="quick-link" href="quick_link.html">Quick Links</a> 
                        <p class="footer-link">Home</p>
       				 	<p class="footer-link">FAQ</p>
                </div>
                
                
                
                <div class="menu-items"><a class="follow-link" href="follow.html">Follow Us</a>
                        <p class="footer-link"><i class="fab fa-facebook"></i> Facebook</p>
        				<p class="footer-link"><i class="fab fa-instagram"></i> Instagram</p>
       					<p class="footer-link"><i class="fab fa-twitter"></i> Twitter</p>
      					<p class="footer-link"><i class="fab fa-youtube"></i> YouTube</p>
                </div>
                
            </div>
        </div>
	</div>
</div>
	
</div>



</body>
</html>