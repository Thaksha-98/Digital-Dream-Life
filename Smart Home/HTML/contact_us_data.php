
<html>

<head>

<style>

body{
	background-color:blue;
	
}


table{
	margin-left:350px;
	
	
}

td{
	background-color:white;
	
}

th{
color:white;
	
}

</style>

</head>
<body>

	
		<table border="3">
		
			<h1><center><b>contact us details </b></center></h1>
		
			<tr  class="heading">
				
				<th>name</th>
				<th>email</th>
				<th>mobile_number</th>
				<th>message</th>
				
				
			</tr>
		
	
	
	
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
		echo" ";
	}

?>
	
	
	<?php
	
	
	
	
		$sql="SELECT `name`, `email`, `mobile_number`, `message` FROM `contact_us`  ";

	
	$results=$con->query($sql);
	
	if ($results->num_rows>0)
	{
		while($row = $results->fetch_assoc())
		{
				echo "<tr> <td>  "  .$row["name"]."</td>   <td>".$row["email"]."</td>       <td>" .$row["mobile_number"]."</td>      <td>" .$row["message"]."</td>        </tr>";
			
		}
		
	}
	else
		{
				ECHO"0 RESULTS";
		}
		
	
	
	
	
?>
			
				



</body>


</html>