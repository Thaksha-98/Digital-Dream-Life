
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
		
			<h1><center><b>FEEDBACK </b></center></h1>
		
			<tr  class="heading">
				
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
	
	
	
	
		$sql="SELECT `message` FROM `feedback`  ";

	
	$results=$con->query($sql);
	
	if ($results->num_rows>0)
	{
		while($row = $results->fetch_assoc())
		{
				echo "<tr> <td>  "  .$row["message"]."</td>           </tr>";
			
		}
		
	}
	else
		{
				ECHO"0 RESULTS";
		}
		
	
	
	
	
?>
			
				



</body>


</html>