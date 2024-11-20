<!-- get set -->
<?php

class Bike{
    public $name ="RX";
    public $model = "100";
    public $color = "Olive";

    function set_name ($name)
    {
        $this ->name= $name;
    }
    function get_name()
    {
       return $this ->name;
    }

}
$myBike = new Bike();
echo $myBike -> name , "<br><br>";
echo $myBike -> model , "<br><br>";
echo $myBike -> color , "<br><br>";



?>