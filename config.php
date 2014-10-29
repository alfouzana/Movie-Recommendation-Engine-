
<?php
// Create connection
$con=mysqli_connect("localhost","","","");

// Check connection
if (mysqli_connect_errno($con))
  {
  $error= "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>

