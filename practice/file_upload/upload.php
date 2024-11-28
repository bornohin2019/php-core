<?php
if(isset($_POST['btnSubmit'])){
  $file= $_FILES['myFile'];
  // var_dump($file);
  $filename= $file['name'];
  $tmpfile = $file['tmp_name'];
  $img= 'image/';
  move_uploaded_file($tmpfile,$img.$filename);
}


?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>file-upload</title>
  </head>
  <body>
    <section>
      <form method="post" enctype="multipart/form-data">
        <label for="">Image</label>
        <input type="file" name="myFile" />
        <input type="submit" value="Upload" name="btnSubmit" />
      </form>
    </section>

    <?php
        if(isset($_POST['btnSubmit'])){
          echo "<image src='$img/$filename' width='300px' alt=''>";
        }

    ?>
  </body>
</html>
