<?php
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $dbname = "green_trade";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  
  if(!$conn){
	  
	    die("Connection failed: " . mysqli_connect_error());
  }
  
  else{
  //echo "connected";
  }
  
?>
