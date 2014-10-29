<?php

include("config.php");
 
 $term=$_GET["term"];
 

 $query = mysqli_query($con,"SELECT * FROM movies where name like '%".$term."%' order by name ");

 $json=array();
 
    while($student=mysqli_fetch_array($query)){
         $json[]=array(
                    'value'=> $student["name"],
                    'label'=>$student["name"]
                        );
    }
 
 echo json_encode($json);
 
?>