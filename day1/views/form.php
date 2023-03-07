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
<body class="p-3 m-0 border-0 bd-example">
    <!-- Example Code -->

                                      <center><h3><?php echo $error;?></h3> </center>
<div class="container pt-5">
    <div class="row col-12">
    <form class="py-2 bg-dark-subtle rounded-3 col-4 offset-md-4" method="post" action="index.php">


      <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-12 col-form-label">Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputEmail3" name="name"  value="<?php echo remember("name");?>" />
        </div>
      </div>


      <div class="row mb-3">
        <label for="inputPassword3" class="col-sm-12 col-form-label " 
          >Email</label
        >
        <div class="col-sm-10">
          <input type="email" class="form-control" id="inputPassword3" name="email" value="<?php echo remember("email");?>"/>
        </div>
      </div>



      <div class=" pt-4 col-12">
        <span class="">your message</span>
        <textarea class="form-control " id="ta" aria-label="With textarea" name="msg" value="<?php echo remember("msg")?>"></textarea>
      </div>

      <div class="pt-2">
        <button type="submit" class="btn btn-primary">send</button>
        <input id="clear" name="clear" type="reset" value="clear form" class="btn btn-primary" />

      </div>
    </form>
    </div>
    </div>
    <!-- End Example Code -->
    <script>
      document.getElementById("ta").value="<?php echo remember("msg")?>"
    </script>
  </body>





    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>
</html>