<?php
if(isset($_POST['btnSubmit'])){
    $file= $_FILES['file'];
    $fileName = $file['name'];
    $size = $file['size'];
    $tmp = $file['tmp_name'];
    $img='image/';
    $kb = $size/1024;
    if($kb>400){
        echo "Image is too large 😡😡";
    }else{
        move_uploaded_file($tmp, $img.$fileName);
        echo '😍😍';
    }

}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload-image</title>
</head>
<body>
    <form action="" method="post">
        <label for="upload">Upload-image :</label>
        <input type="file" name="file" enctype="multipart/form-data">
        <input type="submit" value="upload" name="btnSubmit">
    </form>
</body>
</html>