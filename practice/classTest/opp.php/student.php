<?php
class Student{
    private $id;
    private $name;

    private static $file_path="data.text";

    function __construct($personId,$personName){
        $this->id=$personId;
        $this->name=$personName;
    }
    function student(){
        return $this->id. " , " .$this->name.PHP_EOL;
    }
    function save(){
        file_put_contents(self::$file_path,$this->student(),FILE_APPEND);
    }
    public static function displayData(){
        $data=file(self::$file_path);
        echo "<b>ID | NAME</b><br>";
        foreach($data as $getData ){
            list($id, $name)= explode(",", trim($getData));
            echo "$id, $name <br>";
        }
    }
}

?>