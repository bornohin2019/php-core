<?php
if(isset($_POST['btn'])){
  $file = $_FILES['file'];
  $file_name = $file['name'];
  $tmp = $file['tmp_name'];
  $file_size = $file['size'];
  $img = "image/";
  $kb = $file_size / 1024;

if($kb>204008){
  echo '</br> file is too large </br>';
}
else{
  move_uploaded_file($tmp , $img . $file_name);
}
}
$images = glob('image/*.{jpg,png,gif}',GLOB_BRACE);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Upload Image</title>
  </head>
  <body>
    <form action="#" method="post" enctype="multipart/form-data">
      <label for="">Upload image:</label>
      <input type="file" name="file" />
      <input type="submit" name="btn" value="Upload" />
    </form>
    <?php
  foreach($images as $image){
    echo "<img src='$image' alt='it's image' width='300px'>";
  }
    ?>
  </body>
</html>
