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
        .container {
            background: #fff;
            padding: 25px;
            border-radius : 15px
        }
        h2 {
            color: #fff
        }
    </style>
  </head>
  <body>
      <h2 class="text-center mt-5">Display Images</h2>
   <div class="container w-50 m-auto mt-3">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Download</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    
                    $dir = __DIR__ . '/images/';

                    // images extensions
                    $ext = array ('jpg', 'JPG', 'png' ,'PNG' ,'jpeg' ,'JPEG');

                    foreach(scandir($dir) as $gitImages) {
                        if (in_array(pathinfo($gitImages, PATHINFO_EXTENSION), $ext)){
                            echo "<tr>";
                            echo "<td>$gitImages</td>";
                            echo "<td><img src='images/$gitImages' style='width:150px'/></td>";
                            echo "<td> <a href='images/$gitImages' class='btn btn-sm btn-danger'  download > download</a></td>";
                            echo "</tr>";
                        }
                    }
                ?>
            </tbody>
        </table>
        <div class="text-center">
         <p>Upload More Images <a href="upload.php">Upload</a></p>
        </div>
   </div>
    <!-- Bootstrap Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>