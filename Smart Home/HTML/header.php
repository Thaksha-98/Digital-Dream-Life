<nav role="navigation">
        <div id="menuToggle">
                <input type="checkbox" />

              <span></span>
                <span></span>
                <span></span>

     
                <ul id="menu">
                        <?php 
                				if(isset($_GET['user'])){
                					$us=$_GET['user'];
                					echo "<a href='#'><li>Welcome  ".strtoupper($us)."</li></a>";
                				}else{
                					echo '<a href="Signup.php"><li>Register</li></a>';
                				}
                				?>
                        <a href="index.php">
                                <li>Home</li>
                        </a>
                        <a href="listnew.html">
                                <li>Product</li>
                        </a>
                        <a href="aboutus.html">
                                <li>About Us</li>
                        </a>
                        
                        <a href="contactus.html">
                                <li>Contact Us</li>
                        </a>
                        <a href="feedback.php">
                                <li>Feedback</li>
                        </a>
                        <?php
                				if(isset($_GET['user'])){
                					echo '<a href="logout.php"><li>Log Out</li></a>';
                				}else{
                					echo '<a href="Login.php"><li>Log in</li></a>';
                				}
                				?>
                
                </ul>
        </div>
</nav>
	</div>
</div>