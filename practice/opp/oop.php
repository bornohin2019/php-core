
<?php

// class Bike{
//     public $name ="RX";
//     public $model = "100";
//     public $color = "Olive";

//     function bornohin (){
//         return "It's Yahma";
//     }

// }
// $myBike = new Bike();
// echo $myBike -> name , "<br><br>";
// echo $myBike -> model , "<br><br>";
// echo $myBike -> color , "<br><br>";
// echo $myBike -> bornohin() , "<br><br>";


// class Bike{
//     public $name;
//     public $model;
//     public $color;

//     function bornohin (){
        
//         return $this->name="Yamaha";
//     }

// }
// $myBike = new Bike();
// echo $myBike->bornohin();

class Bike{
    public $name;
    public $model;
    public $color;

    function bornohin ($name,$color){
        return $this->name=$name.$this->color=$color;
    }

}
$myBike = new Bike();
echo $myBike->bornohin("Yamaha","Red");





?>


