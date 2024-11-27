<?php
class Trainee{

    private $id;
    private $name;

    function __construct($myId , $myName)
    {

        $this->id = $myId;
        $this->name = $myName;
                            
    }

    public function combined(){
        return $this->id. "," .$this->name.PHP_EOL;
    }

    public function save(){
            file_put_contents('store.txt', $this->combined(), FILE_APPEND);
    }

    static function display(){
        $myInput=file('store.txt');
        echo " $myId || $myName ";


        foreach($myInput as $singleData){
        list($id,$name)= explode(',', $singleData);
        echo "<br>  $id || $name ";
    }
    }
    
}



?>