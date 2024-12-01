<?php
if(isset($_POST['btnSubmit'])){
  $file = $_FILES['file'];
  $fileName = $file['name'];
  $tmp = $file['tmp_name'];
  $fileSize = $file['size'];
  $img = "image/";
  $kb = $fileSize / 1024;

  if($kb>400){
    echo "<br>File is too large";
  }
  else{
    move_uploaded_file($tmp, $img . $fileName);
  }

}
$images = glob("image/*.{jpg,png,gif,jpeg}", GLOB_BRACE);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>upload</title>
  </head>
  <body>
    <form action="" method="post" enctype="multipart/form-data">
      <label for="">Upload Filoe:</label>
      <input type="file" name="file" />
      <input type="submit" value="Upload" name="btnSubmit" />
    </form>
    <?php
    foreach ($images as $image) {
        echo "<img src='$image' alt='Uploaded Image' width='200px'>";
    }
    ?>
  </body>
</html>
