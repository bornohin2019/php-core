<?php


// static class

class Home{

                public $name="Rabiul Vila <br><br>";
                public $size="17 Sotok <br><br>";
                public $type="Family <br><br>";

                function galib()
                {
                return "It's Megh House<br>";
                                    
                }
          }

$galibHouse = new Home();
echo $galibHouse->name;
echo $galibHouse->size;
echo $galibHouse->type;
echo $galibHouse -> galib();

//    mathod-2

class Upzila{
        public $name;
        public $area;
        public $plase;

    function details(){
        return$this->name="<br>Shaghata <br><br>".$this->area="231.02 km2 <br><br>".$this->plase="Jomuna Rever<br><br>";
    }
}
$myHome= new Upzila();
// echo $myHome->name;
// function call korle aR echo name ba onno details call korte hobe na
echo $myHome-> details(); 


// dynamic


class Kheyarghat{
    public $name;
    public $memory;
    public $meeting;
    function febarit($plaseName, $plaseMemory,$plaseMeeting){
        return $this->name="$plaseName".$this->memory="$plaseMemory".$this->meting="$plaseMeeting";
    }
}
$myKheyarghat=new Kheyarghat();
echo $myKheyarghat->febarit("Kheyarghat <br><br>","Best<br><br>","Katra");

// construct





?>