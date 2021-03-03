<?php

$conn=new MySQLi('localhost','root','','ddl');

if($conn->connect_error){
	echo "Database Not Conncected";
	echo "$conn->connect_error";
	die("Sorry your database Connection error");
}
else{
	echo "Database Connected Succesfully";
}
?>