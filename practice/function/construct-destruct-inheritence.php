<?php
class Cycle{
    public $name;
    public $age;

    function __construct($personName, $personAge){
        echo "It's Construct.<br>";
         echo $this->name=$personName;
         echo $this->age=$personAge;
    }
//      function __construct($myName,$myAge){
//        $this->name=$myName;
//         $this->hight=$myAge;
//         echo "this is cycle class <br>";
//     }
    function getName(){
        echo "<br>My Name is {$this->name}<br>";
    }
    function getAge(){
        echo "<br>I am {$this->age} Years Old.";
    }

//     function set_anoter(){
//         echo 'this is anoter user-define function';
//     }
}

$myObj= new Cycle("Megh<br>", "24");
$myObj ->getname();
$myObj ->getAge();
// echo $myObj->name;
// echo $myObj->hight;
// echo $myObj->name;
// echo $myObj->size;

// echo $myObj->set_name();

// inheritance Cycle class to Bike class 
// class Bike extends Cycle{
//     public $name="BMW";
//     public $color;

//     function __destruct(){
//         echo"bye";
//     }
//     function __construct($myName,$mySize,$myColor){
//        $this->name=$myName;
//         $this->size=$mySize;
//         $this->color=$myColor;
//     echo"hello<br>";
       
//     }
//     function info(){
        
//         echo"work<br>";
//     }
// }

// $bikeObj= new Bike("rabbani <br>","5.4' <br>","blue");
// $bikeObj->info();
// echo Bike::$name;
// echo $bikeObj->name;
// echo $bikeObj->size;
// echo $bikeObj->color;

?>