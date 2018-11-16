<?php
	//include('conn.php');
 
  $conn = mysqli_connect("localhost","Programm3r1","Programm3r1","db_graphene");
 
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

	$client_name=$_POST['client_name'];
	//$lastname=$_POST['lastname'];
 
	mysqli_query($conn,"insert into `client` (client_name) values ('$client_name')");
	//header('location:index.php');
 
?>