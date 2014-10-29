<html>
   <head>
       <?php 
       include("config.php");
       
       
       ?>
       <title>What Movie to Watch?</title>
     <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.css" rel="stylesheet">
       
        <script type="text/javascript"
        src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script type="text/javascript"
        src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
        <link rel="stylesheet" type="text/css"
        href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" />
 
        <script type="text/javascript">
                $(document).ready(function(){
                    $("#name").autocomplete({
                        source:'getautocomplete.php',
                        minLength:1
                    });
                });
        </script>
   </head>
 
   <body style="width: 1000px;margin: 0 auto;">
    
       <div class="page-header">
  <h1>What Movie to Watch?</h1>    <ul class="breadcrumb">
    <li class="active">Home <span class="divider">/</span></li>
    <li><a href="#">with ad space</a> <span class="divider">/</span></li>
    <li ><a href="#">Data</a></li>
    </ul>
</div>
       <div class="row">
       
           <div class="span12">
      <div class="well well-large">
 <form method="post">
  <div class="input-append">
    <input type="text" id="name" name="movie" size="115" placeholder="type name of a movie you watched before..." class="input-block-level">
    <button type="submit" class="btn btn-primary">Search</button>
  </div>
    </form>
</div>
       
     </div>      
  </div>
       
   
       <div class="container">
    <div class="row">
        <div class="span12">
        <div class="thumbnails">
            <?php 
       
        $movie = mysqli_real_escape_string($con,$_POST['movie']);

        $sql = "SELECT genre FROM movies WHERE name = '$movie'";
        
        
        $result = mysqli_query($con,$sql);



        $row = mysqli_fetch_array($result);

        $keyword = preg_match_all('/([a-zA-Z]|\xC3[\x80-\x96\x98-\xB6\xB8-\xBF]|\xC5[\x92\x93\xA0\xA1\xB8\xBD\xBE]){4,}/', $row['genre'],$match_arr);

        $keyword = $match_arr[0];
        
$i = 0;
        $query ="";
        foreach($keyword as $value)
        {
          if($i==0)
          {
              $query = "'%$value%'";
              $i=1;
          }
            else
            {
         $query = $query . " AND genre LIKE '%$value%'";  
            }
        }
        
       
   
        $genre = $query;

        

        $sql = "SELECT * FROM movies WHERE genre LIKE $genre";

        $result = mysqli_query($con,$sql);

        while($row = mysqli_fetch_array($result))
        {
       
        echo '<div class="thumbnail"><img class="img-polaroid" height="100" width="100" src="';
        echo $row['picture'];
        echo '" alt=""><p align="center">';
        echo $row['name'];
        echo '</p><p align="center"><a href="';
        echo $row['youtube'];
        echo '"><botton class="btn  btn-warning">Trailer</botton></a>&nbsp;&nbsp;<a href="https://www.google.com/#q=watch ';
        echo $row['name'];
        echo ' free online"><botton class="btn  btn-info">Watch Online</botton></a><a href="http://www.imdb.com/find?q=';
        echo $row['name'];
        echo '"><botton class="btn  btn-link">IMDb</botton></a></p></div>';
        }    
       ?>
           
  
</div>
            </div>
        </div>
           <div class="row">
               <div class="span12">
               
        <div class="row">
  <div class="span3">
    <a href="#" class="thumbnail">
      <img data-src="holder.js/200x180" alt="...">
        <p align="center">Ad space "1"</p>
    </a>
      
  </div>
            <div class="span3">
    <a href="#" class="thumbnail">
      <img data-src="holder.js/200x180" alt="...">
        <p align="center">Ad space "2"</p>
    </a>
      
  </div>
            <div class="span3">
    <a href="#" class="thumbnail">
      <img data-src="holder.js/200x180" alt="...">
        <p align="center">Ad space "3"</p>
    </a>
      
  </div>
            <div class="span3">
    <a href="#" class="thumbnail">
      <img data-src="holder.js/200x180" alt="...">
        <p align="center">Ad space "4"</p>
    </a>
      
  </div>
            </div>
</div>
</div>
        
        </div>
           
  
       
        <script src="assets/js/holder.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
       
   </body>
<html>