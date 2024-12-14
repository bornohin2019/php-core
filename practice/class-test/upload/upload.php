<?php
if(isset($_POST['btnSubmit'])){
    $file= $_FILES['picture'];
    $fileName = $file['name'];
    $size = $file['size'];
    $tmp = $file['tmp_name'];
    $img='image/';
    $kb = $size/1024;
    if($kb>4556345135){
        echo "Image is too large 😡😡";
    }else{
        move_uploaded_file($tmp, $img.$fileName);
        echo '😍😍';
    }

}
$images = glob("image/*.{jpg,png,gif,jpeg}", GLOB_BRACE);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload-image</title>
</head>
<body>
    <form action="#" method="post" enctype="multipart/form-data">
        <label for="upload">Upload-image :</label>
        <input type="file" name="picture">
        <input type="submit" value="upload" name="btnSubmit">
    </form>
    <?php
    foreach($images as $image)
    {
        echo "<img src='$image' alt='it's Picture' height='300px'>";
    }
    ?>
</body>
</html>