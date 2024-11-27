<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number</title>
</head>
<body>
    <form action="#" method="post">
        <h2>Type A number</h2>
        <input type="number" name="num1" id=""><br>
        <input class="btn" type="submit" value="Submit" name="btnSubmit">
    </form>
    <div> </div>
    <?php
        if($_POST){
            $num1 = $_POST['num1'];
            $isPrime = true;

            if($num1 == 0 || $num1 == 1){
                echo "0 or 1 are not prime number.";
            }
            else{
                for($i=2; $i<$num1/2; $i++){
                    if($num1%$i === 0){
                        $isPrime = false;
                        break;
                    }
                }
                if($isPrime == true){
                    echo "<div>  $num1 is A Prime Number </div>";
                }
                else{
                    echo "<div>  $num1 is Not A Prime Number </div>";
                }
            }
        }
    
    ?>
</body>
</html>