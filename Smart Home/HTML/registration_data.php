
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
		
			<h1><center><b>registration details </b></center></h1>
		
			<tr  class="heading">
				
				<th>id</th>
				<th>email</th>
				<th>password</th>
				<th>udsername</th>
				<th>address</th>
				
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
	
	
	
	
		$sql="SELECT `id`, `email`, `pass`, `username`, `telno`, `add` FROM `user` ";

	
	$results=$con->query($sql);
	
	if ($results->num_rows>0)
	{
		while($row = $results->fetch_assoc())
		{
				echo "<tr> <td>  "  .$row["id"]."</td>   <td>".$row["email"]."</td>       <td>" .$row["pass"]."</td>      <td>" .$row["username"]."</td>      <td>" .$row["telno"]."</td>       </tr>";
			
		}
		
	}
	else
		{
				ECHO"0 RESULTS";
		}
		
	
	
	
	
?>
			
				</table>



</body>


</html>