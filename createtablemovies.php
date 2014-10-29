<?php
include("config.php");

// Create table
$sql="CREATE TABLE movies(PID INT NOT NULL AUTO_INCREMENT,PRIMARY KEY(PID),name TEXT,genre TEXT,picture TEXT,youtube TEXT)";

// Execute query
if (mysqli_query($con,$sql))
  {
  echo "Table movies created successfully";
  }
else
  {
  echo "Error creating table: " . mysqli_error($con);
  }
?>