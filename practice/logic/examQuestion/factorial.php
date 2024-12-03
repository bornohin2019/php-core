<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>factorial</title>
  </head>
  <body>
    <section>
      <form action="" method="post">
        <label for="">Type A Number :</label>
        <input type="text" name="number" />
        <input type="submit" name="submit" />
      </form>
    </section>
    <?php
          $num = $_POST['number'];
          $fact = 1;

       if($num<0){
        echo "$num Enter +VE Number";
       }
       else{
        for($i=2; $i<=$num; $i++){
          $fact *=$i; 
        }
        echo "$fact Factorial of $num";
       }
    ?>
  </body>
</html>
