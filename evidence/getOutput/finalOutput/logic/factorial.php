<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>
<body>
    <section>
        <form action="" method='post'>
            <h1>Input Intiger number</h1>
            <input type="text" name='number'>
            <input type="submit" value="Submit">
        </form>
    </section>
    <?php
        if($_POST){
                $input=$_POST["number"];
                $fact=1;
                if($input<0){
                    echo "$input inter positive number";
                }
                else{
                        for($i=2; $i<=$input; $i++){
                        $fact *= $i;
                }
                echo "$input is factorial $fact";

                }



        }
    ?>
</body>
</html>