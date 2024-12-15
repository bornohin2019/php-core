<?php
session_start();
if (!isset($_SESSION["mySession"])) {
    header('location:logout.php');
}
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
        <a href="logout.php">Logout</a>
    </form>
    <?php
    foreach($images as $image){
        echo "<img src='$image' alt='it's image' width='300px'>";
    }
    ?>
</body>
</html>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
</head>
<body>
           <h2>Registration Form</h2>
        <form method="post">
            <div>
                <label for="fullname">Full Name:</label>
                <input type="text"name="name">
            </div>
            <div class="input-group">
                <label for="email">Email:</label>
                <input type="email" name="email">
            </div>
            <div>
                <label for="username">Username:</label>
                <input type="text" name="username">
            </div>
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" name="password">
            </div>
            <button type="submit" name="btnSubmit">Register</button>
            <a href="logout.php">Logout</a>
        </form>
</body>
</html> -->