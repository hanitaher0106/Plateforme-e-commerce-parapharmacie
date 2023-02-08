<?php //php start

$servername  = "localhost";
$DBuser      = "root";
$DBpassword  = "";
$DBname      = "ecommerce";

// Create connection
$conn = mysqli_connect($servername, $DBuser, $DBpassword, $DBname);



// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  
echo "Connected successfully";







//php end ?>