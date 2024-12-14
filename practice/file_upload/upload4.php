<?php
if(isset($_POST['btn'])){
    $file = $_FILES['file'];
    $fileName =$file['name'];
    $tmp = $file['tmp_name'];
    $fileSize = $file['size'];
    $img = 'image/';
    $kb = $fileSize / 1024 ;

    if($kb>400){
        echo 'file is too large';
    }
    else{
        move_uploaded_file($tmp, $img.$fileName);
    }
}
$images = glob('image/*{jpg, png, jpeg,gif}', GLOB_BRACE);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="">Upload Image:</label>
        <input type="file" value="Upload" name="file">
        <button type="submit" name="btn">Upload</button>
    </form>
    <?php
    foreach($images as $image){
        echo "<img src='$image' alt='it's image' width='300px'>";
    }
    ?>
</body>
</html>