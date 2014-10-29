<?php
include('config.php');

$sql = "Truncate table movies";

 if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  

    echo "Thank You, I will contact you as soon as possible.";
    }
    else
    {
        echo "Please Enter a valid email";
    }

?>