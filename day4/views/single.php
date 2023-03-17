<?php 
$id=(isset($_GET["id"]))?(int)$_GET["id"]: '';

$current_item=$db->get_record_by_id($id)[0];
// var_dump($current_item);


?>
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



  <div class="card-body">
    <?php
    echo"<h1 class='card-title text-center'>".$current_item["product_name"]."</h1>";
    echo "<h2 class='card-text text-center'>".$current_item["category"]."</h2>";
   echo "<h2 class='card-text text-center'>"."product id: ".$current_item["id"]."</h2>";
   echo "<h2 class='card-text text-center'>"."product code: ".$current_item["product_code"]."</h2>";
   echo "<h2 class='card-text text-center'>"."units in stock:" .$current_item["units_in_stock"]."</h2>";
   echo "<h2 class='card-text text-center'>"."price :" .$current_item["list_price"]."EGP"."</h2>";

  
    // <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    ?>
    <div class="card mb-3">
 <img src="<?php echo"images/".$current_item["photo"] ?>"class="card-img-top">
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>