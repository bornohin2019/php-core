<?php
if (isset($_POST['btn'])) {
    $file = $_FILES['file'];
    $file_name = $file['name'];  
    $tmp = $file['tmp_name'];    
    $fileSize = $file['size'];   
    $img = "image/";               
    $kb = $fileSize / 1024;      

    var_dump($kb);  


    if ($kb > 400) {
        echo "<br><br><b>File is too large.</b><br><br>";
    } else {

        move_uploaded_file($tmp, $img . $file_name);
    }
}


$images = glob("image/*.{jpg,png,gif,jpeg}", GLOB_BRACE);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload and Display Images</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit" name="btn" value="Upload">
    </form>

    <h2>Uploaded Images:</h2>
    <?php
    foreach ($images as $image) {
        echo "<img src='$image' alt='Uploaded Image' style='width:200px; height:auto; margin:10px;'>";
    } //that echo all image in window at the same time.
    ?>
</body>
</html>
