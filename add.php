<?php
include('config.php');

$error='';
$sucsses='';

$results = mysqli_query($con,"SELECT * FROM movies");

$num_rows = mysqli_num_rows($results);

if(isset($_POST['name']))
{
 $name = mysqli_real_escape_string($con,$_POST['name']);
 $picture = mysqli_real_escape_string($con,$_POST['picture']); 
 $genre =  mysqli_real_escape_string($con,$_POST['genre']);
 $youtube = mysqli_real_escape_string($con,$_POST['youtube']);

    $results = mysqli_query($con,"SELECT * FROM movies WHERE name ='$name'");
    
  if(mysqli_num_rows($results) > 0)
  {
   $error = "Sorry the $name is already in database";   
  }
else
{
    
    $sql = "INSERT INTO movies (name,genre,picture,youtube)VALUES('$name','$genre','$picture','$youtube')";

    if (!mysqli_query($con,$sql))
  {
  $error = 'Error: ' . mysqli_error($con);
  }
    else
    {
$sucsses = "$name added to database";
    }
}
mysqli_close($con);
}


?>

<html>
    <header>
    <title>Movies</title>
     <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrapv1.css" rel="stylesheet">
    </header>
<body>
    
    <div class="jumbotron">
  <div class="container">
    <h1 align="center">Movie Recommendation</h1>
    
</div>
</div>
    
    <div class="row">
        <div class="col-md-11">
        
 <div class="panel panel-primary">
     <p>Number of Movies in database:<span class="badge"><?php echo $num_rows;  ?></span></p>
<form  role="form" action="" method="post">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" class="form-control" id="name" placeholder="Movie Name">
  </div>
  <div class="form-group">
    <label for="Picture">Picture</label>
    <input type="text" name="picture" class="form-control" id="pitcuter" placeholder="picture">
  </div>
  <div class="form-group">
    <label for="Genre">Genre</label>
    <input type="text" name="genre" class="form-control" id="genre" placeholder="genre">
  </div>
    <div class="form-group">
    <label for="youtube">Youtube</label>
    <input type="text" name="youtube" class="form-control" id="youtube" placeholder="youtube">
  </div>
  
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
            
<span class="label label-success"><?php echo $sucsses?></span>
<span class="label label-danger"><?php echo $error?></span>


        </div>
  
    </div>
    
    
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/holder.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
</body>

</html>