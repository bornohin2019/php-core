<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <?php
    if(isset($_POST["btn"])){
      $id=$_POST["id"];
      $name=$_POST["name"];
    
     }
    
    
    
    ?>
    <div>
      <form action="" method="post">
        <label for="">ID</label><br />
        <input type="text" name="id" id="" /> <br />
        <label for="">Name</label> <br />
        <input type="text" name="name" id="" />
        <input type="submit" value="submit" name="btn" />
      </form>
    </div>
  </body>
</html>
