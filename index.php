<?php
$message ="";
if(isset($_FILES['image'])){
$file = $_FILES['image'];
$name = $file['name'];
$exploded_name = explode('.', $name);
$extension = end($exploded_name );
if(!file_exists('uploads')){
mkdir('uploads');
}
$destination = 'uploads/'.$name;
$image_extensions = ['jpg','png','jpeg','gif'];
$filename = $file['tmp_name'];
if(in_array($extension, $image_extensions)){
move_uploaded_file($filename, $destination);
}else {
echo  $message = "this is not an image";
}
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Simple Image Uploads</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
        <form class="mt-5" method="post" enctype="multipart/form-data">

          <div class="form-group">
            <label for="image">Example file input</label>
            <input type="file" class="form-control-file" name="image" id="image">
          </div>

          <div class="form-group">
              <button type="submit" class="btn btn-warning">button</button>
          </div>
        </form>
    </div>
  </body>
</html>
