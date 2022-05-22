<?php
    if(isset($_POST['submit'])){
        $name  = $_POST['name'];
        $image = $_FILES['img'];
        $image_name = $image['name'];
        $tmp_name = $image['tmp_name'];
        $e = pathinfo($image_name, PATHINFO_EXTENSION);;

        if(!empty($name)){
            $new_name = "$name.$e";
            move_uploaded_file($tmp_name , "images/$new_name");
        }else {
            $rand = substr(str_shuffle("0123456789abcdefghijklmnopqrstvwxyz"), 0, 6);
            $new_name = "$rand.$e";
            move_uploaded_file($tmp_name , "images/$new_name");
        }
      //  $errors = [];

       
         
    }
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Upload images</title>
    <style>
        body {
            background: #c97474;
        }
        form {
            background: #fff;
            padding: 25px;
            border-radius : 15px
        }
    </style>
  </head>
  <body>
   <div class="container w-50 m-auto mt-3">
    <form action="" method="post" class="login mt-5" enctype="multipart/form-data">
       <h3 class="text-center">Upload Images</h3>
        <div class="my-4 row">
          <label for="inputmail" class="col-sm-2 col-form-label">Name</label>
          <div class="col-md-10">
            <input type="text" class="form-control" id="inputmail" name="name">
          </div>
        </div>
        <div class="my-4 row">
          <label for="inputmail" class="col-sm-2 col-form-label">Image</label>
          <div class="col-md-10">
            <input type="file" class="form-control-file" id="inputmail" name="img">
          </div>
        </div>
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-10">
            <button type="submit" name="submit" class="btn btn-primary btn-block mb-4 w-100">Upload</button>
          </div>
        </div>
        <div class="text-center">
        <p>Show All Images Upload <a href="index.php">All Images</a></p>
      </div>
    </form>
   </div>
    <!-- Bootstrap Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>