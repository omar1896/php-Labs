<?php
$current_index=isset($_GET["next"]) &&is_numeric($_GET["next"])?(int) $_GET["next"]:0;
$next_index=($current_index+__RECORDS_PER_PAGE__<17)?$current_index+__RECORDS_PER_PAGE__:0;
$previous_index=($current_index - __RECORDS_PER_PAGE__>0) ? $current_index- __RECORDS_PER_PAGE__:0;

 $items=$db->get_data(array(),$current_index);
  //  var_dump($items);
// ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<table class="table table-success table-hover">
  <thead>
    <tr>
     
      <th scope="col">Item id</th>
      <th scope="col">Name</th>
      <th scope="col">Details</th>
    </tr>
  </thead>
  <tbody>
 
    
    <?php


foreach($items as $item){
 

 echo "<tr><td>".$item["id"]."</td>" ;
   echo"<td>".$item["product_name"]."</td>";
 
  echo"<td><a href='" . $_SERVER["PHP_SELF"]."?id=".$item["id"]. "' >Show details</a></td></tr>";
 


}

     

  
      ?>
    

  </tbody>
</table>

<a href="<?php echo $_SERVER["PHP_SELF"]."?next=".$next_index; ?>" class="">next</a>
<a href="<?php echo $_SERVER["PHP_SELF"]."?next=".$previous_index; ?>" class="">previous</a>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
 

