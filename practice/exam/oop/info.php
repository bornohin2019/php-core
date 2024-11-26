<?php
// stap 01 make a class 
 class info{
    private $id;
    private $name;
    private static $file_path="data.txt";
//  stap 02 make a construct 
function __construct($id,$name) {
        $this->id = $id;
        $this->name = $name;
    }
// stap 03 separet data 
    function style(){
        return this->id." ".this->name.PHP_EOL;
    }
    //  stap 04 save data text file 
    function save(){
        file_put_contents(self::$file_path,$this->style(),FILE_APPEND);
    }
    // stap 05 data in  dispalay 
     public  static function displayData(){
        $data=file(self::$file_path);
        // echo"<b>ID | Name </b>";

     }
 }





?>