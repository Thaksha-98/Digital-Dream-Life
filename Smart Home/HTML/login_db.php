<?php 
session_start();
if(isset($_POST['submitbtn'])){
$email=$_POST['email'];
$pass=$_POST['pass'];

if($email!=""&&$pass!=""){
	
$sql="SELECT * FROM user WHERE  email='$email' AND pass='$pass'";
	
	$resulrs=$conn->query($sql);
	
	
	$row=mysqli_fetch_array($resulrs);
	
	$user=$row['username'];

	
	

	if($resulrs->num_rows>=1){
		
		
		$_SESSION['user']=$user;
		header("location:index.php?user=$user");
		
		
		}
		else{
            echo "<p class='msg'>Email Address Or Password Wrong</p>";
            
		}
	
	}	


	}
	

?>
	
