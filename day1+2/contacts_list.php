<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><h1>Clients list</h1></center>
    <?php   $clients= file_to_array(); 
   
    foreach($clients as $client){
      $s=  explode(",",$client);
     
        echo "<h2 style='text-align:center;'>visit date :  $s[0] </h2>" ;
        echo "<h2 style='text-align:center;'>ip address: $s[1] </h2>" ;
        echo "<h2 style='text-align:center;'>Name : $s[2] </h2>" ;
        echo "<h2 style='text-align:center;'>email : $s[3] </h2><hr>" ; 
       
    }
    
    ?>
</body>
</html>