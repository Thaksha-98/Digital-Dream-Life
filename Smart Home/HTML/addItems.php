		
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
	
	
	?>
	








<!DOCTYPE html>

<html>
<head>

<title>Digital Dream Life.lk</title>
<link rel="stylesheet" type="text/css" href="../CSS/general.css">
<link rel="stylesheet" type="text/css" href="../CSS/index_style.css">
<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<style>




table{
	margin-left:670px;
	
	
}
h1{
	margin-left:670px;
	font-size:20px;
}

#grad1{
	margin-right:700px;
	margin-top:-100px;
	
	
}

body {
	margin:0;
  height: 900px;
  background-image: linear-gradient(darkblue,lightblue);
}

.form-style-9{
	max-width: 450px;
	background: #FAFAFA;
	padding: 30px;
	margin: 50px auto;
	box-shadow: 1px 1px 25px rgba(0, 0, 0, 0.35);
	border-radius: 10px;
	border: 6px solid #305A72;
}
.form-style-9 ul{
	padding:0;
	margin:0;
	list-style:none;
}
.form-style-9 ul li{
	display: block;
	margin-bottom: 10px;
	min-height: 35px;
}
.form-style-9 ul li  .field-style{
	box-sizing: border-box; 
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box; 
	padding: 8px;
	outline: none;
	border: 1px solid #B0CFE0;
	-webkit-transition: all 0.30s ease-in-out;
	-moz-transition: all 0.30s ease-in-out;
	-ms-transition: all 0.30s ease-in-out;
	-o-transition: all 0.30s ease-in-out;

}.form-style-9 ul li  .field-style:focus{
	box-shadow: 0 0 5px #B0CFE0;
	border:1px solid #B0CFE0;
}
.form-style-9 ul li .field-split{
	width: 49%;
}
.form-style-9 ul li .field-full{
	width: 100%;
}
.form-style-9 ul li input.align-left{
	float:left;
}
.form-style-9 ul li input.align-right{
	float:right;
}
.form-style-9 ul li textarea{
	width: 100%;
	height: 100px;
}
.form-style-9 ul li input[type="button"], 
.form-style-9 ul li input[type="submit"] {
	-moz-box-shadow: inset 0px 1px 0px 0px #3985B1;
	-webkit-box-shadow: inset 0px 1px 0px 0px #3985B1;
	box-shadow: inset 0px 1px 0px 0px #3985B1;
	background-color: #216288;
	border: 1px solid #17445E;
	display: inline-block;
	cursor: pointer;
	color: #FFFFFF;
	padding: 8px 18px;
	text-decoration: none;
	font: 12px Arial, Helvetica, sans-serif;
}
.form-style-9 ul li input[type="button"]:hover, 
.form-style-9 ul li input[type="submit"]:hover {
	background: linear-gradient(to bottom, #2D77A2 5%, #337DA8 100%);
	background-color: #28739E;
}
</style>
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
		<div class="menu-items"><a class="help-link" href="help.html">Help</a></div>
                <div class="menu-items"> <a class="contactus-link" href="contactus.html">Contact Us</a> </div>
                <div class="menu-items"><a class="feedback-link" href="feedback.html">Feedback</a></div>
		<div class="menu-items"><a class="feedback-link" href="list.html">Search</a></div>
                
            </div>
        </div>
	</div>
</div>

<body>






	
		<table border="3">
		
			<h1><center><b>AVAILABLE PRODUCTS</b></center></h1>
		
			<tr  class="heading">
				
				<th>ITEM_CODE</th>
				<th>ITEM_NAME</th>
				<th>PRICE</th>
				<th>QUANTITY</th>
				<th>DESCRIPTION</th>
				
			</tr>
		
	
	
	
	
	<?php
	
	
	
	
	$sql="SELECT `item_code`, `item_name`, `price`, `quantity`, `description` FROM `product`";
	
	$results=$con->query($sql);
	
	if ($results->num_rows>0)
	{
		while($row = $results->fetch_assoc())
		{
				echo "<tr> <td>  "  .$row["item_code"]."</td>   <td>".$row["item_name"]."</td>       <td>" .$row["price"]."</td>      <td>" .$row["quantity"]."</td>      <td>" .$row["description"]."</td>       </tr>";
			
		}
		
	}
	else
		{
				ECHO"0 RESULTS";
		}
		
	
	
	
	
?>
			
				
		
		</table><br><br>

	














<div id="grad1">
<form class="form-style-9" method="POST" >
<ul>
<li>
    <input type="text" name="field1" class="field-style field-split align-left" placeholder="Item Name" />
    <input type="text" name="field2" class="field-style field-split align-right" placeholder="Item Code" />

</li>
<li>
    <input type="text" name="field3" class="field-style field-split align-left" placeholder="Price" />
    <input type="text" name="field4" class="field-style field-split align-right" placeholder="Quantity" />
</li>
<li>
<textarea name="field5" class="field-style" placeholder="Description"></textarea>
</li>
<li>





<input type="submit" value="Add Item"   name="add_item" />
<input type="submit" value="update" name="update" />
<input type="submit" value="delete" name="delete"  />
</li>
</ul>
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






























		<?php



	if(isset($_POST["add_item"]))
	{
	
	
		if(isset( $_POST["field1"]))
		{
			$item_name = $_POST["field1"];
		}
		
		
		if(isset( $_POST["field2"]))
		{
			$item_code = $_POST["field2"];
		}
		
		
		if(isset( $_POST["field3"]))
		{
			$price = $_POST["field3"];
		}
		
		if(isset( $_POST["field4"]))
		{
			$quantity = $_POST["field4"];
		}
		
		
		if(isset( $_POST["field5"]))
		{
			$description = $_POST["field5"];
		}
		
		
		
			$sqlw="INSERT INTO `product`(`item_code`, `item_name`, `price`, `quantity`, `description`) 
					VALUES ('$item_code','$item_name','$price','$quantity','$description')";
		
		
			
		
			if(!mysqli_query($con,$sqlw))
			{
				echo"not inserted";
			}
			else
			{
			echo"";
			}
	}

			?>	
	






























<?php
		
	if(isset($_POST['update']))
	{
	
	
	
		if(isset( $_POST["field1"]))
		{
			$item_name = $_POST["field1"];
		}
		
		
		if(isset( $_POST["field2"]))
		{
			$item_code = $_POST["field2"];
		}
		
		
		if(isset( $_POST["field3"]))
		{
			$price = $_POST["field3"];
		}
		
		if(isset( $_POST["field4"]))
		{
			$quantity = $_POST["field4"];
		}
		
		
		if(isset( $_POST["field5"]))
		{
			$description = $_POST["field5"];
		}
		





					


				$sql="	UPDATE `product` SET `item_name`=  '".$item_name."'     ,`price`= '".$price."'   ,`quantity`='".$quantity."'   ,`description`= '".$item_name."'      WHERE `item_code` = '$item_code' ";

			
				
				$results=mysqli_query($con,$sql);
				
				if($results)
				{
						echo"";
				} 
				else
				{
					echo "data not updated" ;
				}
			
	}




?>
























	

<?php


	if(isset($_POST['delete']))
	{
	
		
		
				
		if(isset( $_POST["field1"]))
		{
			$item_name = $_POST["field1"];
		}
		
		
		if(isset( $_POST["field2"]))
		{
			$item_code = $_POST["field2"];
		}
		
		
		if(isset( $_POST["field3"]))
		{
			$price = $_POST["field3"];
		}
		
		if(isset( $_POST["field4"]))
		{
			$quantity = $_POST["field4"];
		}
		
		
		if(isset( $_POST["field5"]))
		{
			$description = $_POST["field5"];
		}
		


		
		
		
		
		
		
		
		
		

					


				$sql="DELETE FROM `product` WHERE `item_code`='$item_code' ";

			

			
				
				$results=mysqli_query($con,$sql);
				
				if($results)
				{
						echo"";
				} 
				else
				{
					echo "data not deleted" ;
				}
			
	}

?>
	






















</html>